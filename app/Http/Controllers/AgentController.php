<?php

namespace App\Http\Controllers;

use App\BookingAndShowing;
use App\Notifications\BookingStatus;
use App\Notifications\BookingTransactionUpdated;
use App\Notifications\BookingUpdated;
use App\Notifications\ReceivedRecommendation;
use App\Notifications\RecommendationUpdated;
use App\Recommendation;
use App\TrustedServiceProvider;
use App\User;
use App\UserManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class AgentController extends Controller
{
    public function viewClientsAssigned()
    {
        //get clients assigned
        $clients = UserManager::with(['user'])->where([
            ['manager_id','=',Auth::id()],
        ])->get();

        return view('agent.view-clients-assigned', compact('clients'));
    }

    public function viewClientBookings($clientId)
    {
        //verify client assigned
        $client = UserManager::with(['user'])->where([
            ['user_id','=',$clientId],
            ['manager_id','=',Auth::id()],
        ])->get();

        if($client->count() > 0) {
            //get bookings of the client
            $bookings = BookingAndShowing::where('user_id', '=',$clientId)->get();
            return view('agent.view-client-bookings', compact('bookings'));
        }
        else {
            return "Something went wrong. Please contact support.";
        }
    }

    public function approveBooking($bookingId)
    {
        //get booking
        $booking = BookingAndShowing::where('id', '=',$bookingId)->first();
        $booking->status = 1;
        $booking->save();

        //Notifications

        if($booking->user_id != Auth::id()) { //skip Agent's self created bookings
            // To Client
            Notification::send(User::find($booking->user_id), new BookingStatus($booking->id, 'approved'));
        }

        return redirect("/agent/view-client-bookings/$booking->user_id")->with('status', 'Booking approved successfully.');
    }

    public function denyBooking($bookingId)
    {
        //get booking
        $booking = BookingAndShowing::where('id', '=',$bookingId)->first();
        $booking->status = 2;
        $booking->save();

        //Notifications

        if($booking->user_id != Auth::id()) { //skip Agent's self created bookings
            // To Client
            Notification::send(User::find($booking->user_id), new BookingStatus($booking->id, 'denied'));
        }

        return redirect("/agent/view-client-bookings/$booking->user_id")->with('status', 'Booking denied successfully.');
    }

    public function updateTransactionStatus($bookingId, $statusCode)
    {
        //get booking
        $booking = BookingAndShowing::where('id', '=',$bookingId)->first();
        $booking->transaction_status = $statusCode;
        $booking->save();

        //Notifications

        if($booking->user_id != Auth::id()) { //skip Agent's self created bookings
            // To Client
            Notification::send(User::find($booking->user_id), new BookingTransactionUpdated($booking->id, $this->txnStatus[$statusCode]));
        }

        return redirect("/agent/view-client-bookings/$booking->user_id")->with('status', 'Transaction status updated successfully.');
    }

    public function updateBookingForm($bookingId) {
        $booking = BookingAndShowing::where([
            ['id','=',$bookingId]
        ])->first();

        return view('agent.booking-add-update-form')->with('booking', $booking);
    }

    public function updateBooking(Request $request, $bookingId) {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'street_address' => 'required',
            'listing_no' => 'required',
            'time_and_date' => 'required',
        ]);

        $booking = BookingAndShowing::where([
            ['id','=',$bookingId]
        ])->first();

        $booking->fill($validatedData);
        $booking->save();

        //Notifications
        if($booking->user_id != Auth::id()) { //skip Agent's self created bookings
            Notification::send(User::find($booking->user_id), new BookingUpdated($booking->id, Auth::id()));
        }

        return redirect("/agent/view-client-bookings/$booking->user_id")->with('status', 'The booking has been updated successfully.');
    }

    public function makeRecommendationForm($clientId) {
        return view('agent.recommendation-add-update-form')->with('client_id', $clientId);
    }

    public function makeRecommendation(Request $request)
    {
        $validatedData = $request->validate([
            'listing_no' => 'required',
            'time_and_date' => 'required',
        ]);

        $time_and_date = strtotime($request->time_and_date);
        $validatedData['time_and_date'] = date('Y-m-d H:i:s', $time_and_date);

        $Recommendation = new Recommendation();
        $Recommendation->fill($validatedData);
        $Recommendation->recommended_by = Auth::id();
        $Recommendation->recommended_to = $request->clientId;
        $Recommendation->save();

        //Notifications

        // To Client
        Notification::send(User::find($Recommendation->recommended_to), new ReceivedRecommendation());

        return redirect('/agent/view-clients-assigned')->with('status', 'The recommendation has been recorded successfully.');
    }

    public function viewRecommendations()
    {
        $recommendations = Recommendation::where([
            ['recommended_by','=',Auth::id()],
        ])->get();

        return view('agent.view-recommendations', compact('recommendations'));
    }

    public function updateRecommendationForm($recommendationId) {
        $recommendation = Recommendation::where([
            ['id','=',$recommendationId]
        ])->first();

        $time_and_date = strtotime($recommendation->time_and_date);
        $recommendation->time_and_date = date('m/d/Y H:i A', $time_and_date);

        return view('agent.recommendation-add-update-form')->with('recommendation', $recommendation);
    }

    public function updateRecommendation(Request $request, $recommendationId) {
        $validatedData = $request->validate([
            'listing_no' => 'required',
            'time_and_date' => 'required',
        ]);

        $time_and_date = strtotime($request->time_and_date);
        $validatedData['time_and_date'] = date('Y-m-d H:i:s', $time_and_date);

        $recommendation = Recommendation::where([
            ['id','=',$recommendationId]
        ])->first();

        $recommendation->fill($validatedData);
        $recommendation->save();

        //Notifications

        // To Client
        Notification::send(User::find($recommendation->recommended_to), new RecommendationUpdated());

        return redirect("/agent/view-recommendations")->with('status', 'The recommendation has been updated successfully.');
    }

    public function viewTrustedServiceProviders()
    {
        $providers = TrustedServiceProvider::where([
            ['is_deleted','=',0], //hide deleted
            ['agent_id','=',Auth::id()],
        ])->get();

        return view('agent.view-trusted-service-providers', compact('providers'));
    }

    public function addTrustedServiceProviderForm() {
        return view('agent.provider-add-update-form');
    }

    public function addTrustedServiceProvider(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);

        $TrustedServiceProvider = new TrustedServiceProvider();
        $TrustedServiceProvider->fill($validatedData);
        $TrustedServiceProvider->agent_id = Auth::id();
        $TrustedServiceProvider->save();

        return redirect('/agent/view-trusted-service-providers')->with('status', 'The trusted service provider has been added successfully.');
    }

    public function updateProviderForm($providerId) {
        $provider = TrustedServiceProvider::where([
            ['id','=',$providerId]
        ])->first();

        return view('agent.provider-add-update-form')->with('provider', $provider);
    }

    public function updateProvider(Request $request, $recommendationId) {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);

        $TrustedServiceProvider = TrustedServiceProvider::where([
            ['id','=',$recommendationId]
        ])->first();

        $TrustedServiceProvider->fill($validatedData);

        $TrustedServiceProvider->save();

        return redirect("/agent/view-trusted-service-providers")->with('status', 'The trusted service provider has been updated successfully.');
    }

    public function deleteProvider($providerId) {
        $TrustedServiceProvider = TrustedServiceProvider::where([
            ['id','=',$providerId]
        ])->first();

        $TrustedServiceProvider->is_deleted = 1;
        $TrustedServiceProvider->save();

        return redirect('/agent/view-trusted-service-providers')->with('status', 'The trusted service provider has been deleted successfully.');
    }

    public function updateSettings(Request $request) {
        $userId = Auth::id();

        $validatedData = $request->validate([
            'email' => 'required|unique:users,email,' . $userId,
            'password' => 'nullable|min:6|confirmed',
            'mobile' => 'required|numeric',
            'name' => 'required',
            'address' => 'required',
        ]);

        $user = User::where([
            ['deleted','!=','4'], //hide deleted accounts
            ['id','=',$userId]
        ])->first();

        $current_hashed_password = $user->password;

        $user->fill($validatedData);

        if($user->password == null) {
            $user->password = $current_hashed_password;
        }
        else {
            //hash password
            $user->password = Hash::make($user->password);
        }

        $user->save();

        return redirect('/settings')->with('status', 'The account settings has been updated successfully.');
    }
}

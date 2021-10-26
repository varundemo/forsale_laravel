<?php

namespace App\Http\Controllers;

use App\BookingAndShowing;
use App\Notifications\AdminAssigned;
use App\Notifications\AgentAssigned;
use App\Notifications\BookingStatus;
use App\Notifications\BookingTransactionUpdated;
use App\Notifications\BookingUpdated;
use App\Notifications\OfferUpdated;
use App\Notifications\ReceivedRecommendation;
use App\Notifications\RecommendationUpdated;
use App\Offer;
use App\Recommendation;
use App\TrustedServiceProvider;
use App\User;
use App\UserManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Mockery\ReceivedMethodCalls;

class SuperAdminController extends Controller
{
    //transaction status code values
    private $txnStatus = ['Pending', 'Active', 'Pre-Offer', 'Under Contract', 'Completed', 'Ovedue', 'Withdrawn', 'Sold', 'Terminated', 'Closed'];

    public function index() {
        return 'SuperAdminArea';
    }

    public function viewBookings() {
        //get client bookings
        $bookings = BookingAndShowing::all();
        return view('superAdmin.view-bookings', compact('bookings'));
    }

    public function addBookingForm() {
        return view('superAdmin.booking-add-update-form');
    }

    public function addBooking(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'street_address' => 'required',
            'listing_no' => 'required',
            'time_and_date' => 'required',
        ]);

        $BookingAndShowing = new BookingAndShowing();
        $BookingAndShowing->fill($validatedData);
        $BookingAndShowing->user_id = Auth::id();
        $BookingAndShowing->save();

        return redirect('/superAdmin/view-bookings')->with('status', 'The booking has been recorded successfully.');
    }

    public function updateBookingForm($bookingId) {
        $booking = BookingAndShowing::where([
            ['id','=',$bookingId]
        ])->first();

        return view('superAdmin.booking-add-update-form')->with('booking', $booking);
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
        if($booking->user_id != Auth::id()) { //skip superAdmin's self created bookings
            Notification::send(User::find($booking->user_id), new BookingUpdated($booking->id, Auth::id()));
        }

        return redirect('/superAdmin/view-bookings')->with('status', 'The booking has been updated successfully.');
    }

    public function assignAdminForm($clientId) {
        $client = User::where([
            ['id','=',$clientId]
        ])->first();

        //get all admins
        $admins = User::where([
            ['role','=','admin']
        ])->get();

        return view('superAdmin.assign-admin', compact('client', 'admins'));
    }

    public function assignAdmin(Request $request) {
        //check if assignment already exists
        $assignment = UserManager::with(['user'])->where([
            ['user_id','=',$request->clientId],
            ['manager_id','=',$request->admin_id],
        ])->get();

        if($assignment->count() > 0) {
            return redirect('/superAdmin/users')->with('status', 'Admin assigned to client already.');
        }

        $UserManager = new UserManager();
        $UserManager->user_id = $request->clientId;
        $UserManager->manager_id = $request->admin_id;
        $UserManager->save();

        //Notifications

        // To Admin
        Notification::send(User::find($UserManager->user_id), new AdminAssigned($type = 'toAdmin'));
        // To Client
        Notification::send(User::find($request->admin_id), new AdminAssigned($type = 'toClient'));

        return redirect('/superAdmin/users')->with('status', 'Admin assigned to client successfully.');
    }

    public function viewClientBookings($clientId)
    {
        //get bookings of the client
        $bookings = BookingAndShowing::where('user_id', '=',$clientId)->get();
        return view('superAdmin.view-client-bookings', compact('bookings'));
    }

    public function approveBooking($bookingId)
    {
        //get booking
        $booking = BookingAndShowing::where('id', '=',$bookingId)->first();
        $booking->status = 1;
        $booking->save();

        //Notifications

        if($booking->user_id != Auth::id()) { //skip superAdmin's self created bookings
            // To Client
            Notification::send(User::find($booking->user_id), new BookingStatus($booking->id, 'approved'));
        }

        return redirect("/superAdmin/view-client-bookings/$booking->user_id")->with('status', 'Booking approved successfully.');
    }

    public function denyBooking($bookingId)
    {
        //get booking
        $booking = BookingAndShowing::where('id', '=',$bookingId)->first();
        $booking->status = 2;
        $booking->save();

        //Notifications

        if($booking->user_id != Auth::id()) { //skip superAdmin's self created bookings
            // To Client
            Notification::send(User::find($booking->user_id), new BookingStatus($booking->id, 'denied'));
        }

        return redirect("/superAdmin/view-client-bookings/$booking->user_id")->with('status', 'Booking denied successfully.');
    }

    public function updateTransactionStatus($bookingId, $statusCode)
    {
        //get booking
        $booking = BookingAndShowing::where('id', '=',$bookingId)->first();
        $booking->transaction_status = $statusCode;
        $booking->save();

        //Notifications

        if($booking->user_id != Auth::id()) { //skip superAdmin's self created bookings
            // To Client
            Notification::send(User::find($booking->user_id), new BookingTransactionUpdated($booking->id, $this->txnStatus[$statusCode]));
        }

        return redirect("/superAdmin/view-client-bookings/$booking->user_id")->with('status', 'Transaction status updated successfully.');
    }

    public function makeRecommendationForm($clientId) {
        return view('superAdmin.recommendation-add-update-form')->with('client_id', $clientId);
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

        return redirect('/superAdmin/view-recommendations')->with('status', 'The recommendation has been recorded successfully.');
    }

    public function updateRecommendationForm($recommendationId) {
        $recommendation = Recommendation::where([
            ['id','=',$recommendationId]
        ])->first();

        $time_and_date = strtotime($recommendation->time_and_date);
        $recommendation->time_and_date = date('m/d/Y H:i A', $time_and_date);

        return view('superAdmin.recommendation-add-update-form')->with('recommendation', $recommendation);
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

        return redirect("/superAdmin/view-recommendations")->with('status', 'The recommendation has been updated successfully.');
    }

    public function viewRecommendations()
    {
        $recommendations = Recommendation::all();

        return view('superAdmin.view-recommendations', compact('recommendations'));
    }

    public function viewTrustedServiceProviders()
    {
        $providers = TrustedServiceProvider::where(
            'is_deleted','=',0 //hide deleted
        )->get();

        return view('superAdmin.view-trusted-service-providers', compact('providers'));
    }

    public function addTrustedServiceProviderForm() {
        return view('superAdmin.provider-add-update-form');
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

        return redirect('/superAdmin/view-trusted-service-providers')->with('status', 'The trusted service provider has been added successfully.');
    }

    public function updateProviderForm($providerId) {
        $provider = TrustedServiceProvider::where([
            ['id','=',$providerId]
        ])->first();

        return view('superAdmin.provider-add-update-form')->with('provider', $provider);
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

        return redirect("/superAdmin/view-trusted-service-providers")->with('status', 'The trusted service provider has been updated successfully.');
    }

    public function deleteProvider($providerId) {
        $TrustedServiceProvider = TrustedServiceProvider::where([
            ['id','=',$providerId]
        ])->first();

        $TrustedServiceProvider->is_deleted = 1;
        $TrustedServiceProvider->save();

        return redirect('/superAdmin/view-trusted-service-providers')->with('status', 'The trusted service provider has been deleted successfully.');
    }

    public function assignAgentForm($clientId) {
        $client = User::where([
            ['id','=',$clientId]
        ])->first();

        //get all agents
        $agents = User::where([
            ['role','=','worker']
        ])->get();

        return view('superAdmin.assign-agent', compact('client', 'agents'));
    }

    public function assignAgent(Request $request) {
        //check if assignment already exists
        $assignment = UserManager::with(['user'])->where([
            ['user_id','=',$request->clientId],
            ['manager_id','=',$request->admin_id],
        ])->get();

        if($assignment->count() > 0) {
            return redirect('/superAdmin/users')->with('status', 'Agent assigned to client already.');
        }

        $UserManager = new UserManager();
        $UserManager->user_id = $request->clientId;
        $UserManager->manager_id = $request->admin_id;
        $UserManager->save();

        //Notifications

        // To Admin
        Notification::send(User::find($request->clientId), new AgentAssigned($type = 'toClient'));
        // To Client
        Notification::send(User::find($request->admin_id), new AgentAssigned($type = 'toAgent'));

        return redirect('/superAdmin/users')->with('status', 'Agent assigned to client successfully.');
    }

    public function viewOffers() {
        //get offers
        $offers = Offer::all();
        return view('superAdmin.view-offers', compact('offers'));
    }

    public function viewRecentOffers($listing_no) {
        //get recent offers in a listing
        $offers = Offer::where([
            ['listing_no', '=', $listing_no],
        ])->get();
        return view('view-recent-offers', compact('offers'));
    }

    public function makeOffer() {
        return view('superAdmin.offer-add-update-form');
    }

    public function addOffer(Request $request)
    {
        $validatedData = $request->validate([
            'property_address' => 'required',
            'listing_no' => 'required',
            'purchase_price' => 'required',
            'earnest_money' => 'required',
            'financing' => 'required',
            'down_payment' => 'required',
            'seller_concession' => 'required',
            'inspection' => 'required',
            'property_tax' => 'required',
            'contingency' => 'required',
            'offer_ends' => 'required',
            'acceptance' => 'accepted',
        ]);

        $offer_ends = strtotime($request->offer_ends);
        $validatedData['offer_ends'] = date('Y-m-d H:i:s', $offer_ends);

        $Offer = new Offer();
        $Offer->fill($validatedData);
        $Offer->user_id = Auth::id();
        $Offer->save();

        return redirect('/superAdmin/view-offers')->with('status', 'The offer has been recorded successfully.');
    }

    public function updateOfferForm($offerid) {
        $offer = Offer::where([
            ['id','=',$offerid]
        ])->first();

        $offer_ends = strtotime($offer->offer_ends);
        $offer->offer_ends = date('m/d/Y H:i A', $offer_ends);

        return view('superAdmin.offer-add-update-form')->with('offer', $offer);
    }

    public function updateOffer(Request $request, $offerid) {
        $validatedData = $request->validate([
            'property_address' => 'required',
            'listing_no' => 'required',
            'purchase_price' => 'required',
            'earnest_money' => 'required',
            'financing' => 'required',
            'down_payment' => 'required',
            'seller_concession' => 'required',
            'inspection' => 'required',
            'property_tax' => 'required',
            'contingency' => 'required',
            'offer_ends' => 'required',
            'acceptance' => 'accepted',
        ]);

        $offer_ends = strtotime($request->offer_ends);
        $validatedData['offer_ends'] = date('Y-m-d H:i:s', $offer_ends);

        $offer = Offer::where([
            ['id','=',$offerid]
        ])->first();

        $offer->fill($validatedData);
        $offer->save();

        //Notifications
        if($offer->user_id != Auth::id()) { //skip superAdmin's self created bookings
            Notification::send(User::find($offer->user_id), new OfferUpdated($offer->id, Auth::id()));
        }

        return redirect('/superAdmin/view-offers')->with('status', 'The offer has been updated successfully.');
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

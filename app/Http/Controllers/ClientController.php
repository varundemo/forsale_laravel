<?php

namespace App\Http\Controllers;

use App\AgentInvitation;
use App\BookingAndShowing;
use App\Mail\InviteAgent;
use App\Notifications\BookingAdded;
use App\Notifications\OfferAdded;
use App\Offer;
use App\TrustedServiceProvider;
use App\User;
use App\UserManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Session;

class ClientController extends Controller
{
    public function index() {
        return view('invite-agent-form');
    }

    public function viewClientBookings() {
        //get client bookings
        $bookings = BookingAndShowing::where('user_id', '=', Auth::id())->get();
        return view('client.view-client-bookings', compact('bookings'));
    }

    public function requestBooking() {
        $userid = session('userid');
        // return $userid;
        return view('booking-add-update-form',['userid'=>$userid]);
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

        //Notifications

        // To SuperAdmin
        $superAdmin = User::where('role', '=', 'superAdmin')->first();
        Notification::send($superAdmin, new BookingAdded($BookingAndShowing->id));
        // To Associated Managers(Admins and Agents)
        $managers = UserManager::with(['user'])->where(
            'user_id', '=', Auth::id()
        )->get();

        foreach ($managers as $manager) {
            Notification::send(User::find($manager->manager_id), new BookingAdded($BookingAndShowing->id));
        }

        return redirect('/client/view-bookings')->with('status', 'The booking has been recorded successfully.');
    }

    public function updateBookingForm($bookingId) {
        $booking = BookingAndShowing::where([
            ['id','=',$bookingId]
        ])->first();

        return view('booking-add-update-form')->with('booking', $booking);
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

        return redirect('/client/view-bookings')->with('status', 'The booking has been updated successfully.');
    }

    public function viewClientOffers() {
        //get client offers
        $offers = Offer::where('user_id', '=', Auth::id())->get();
        return view('client.view-client-offers', compact('offers'));
    }

    public function makeOffer() {
        return view('offer-add-update-form');
    }

    public function addOffer(Request $request)
    {
        // if($request->acceptance){
        // if($request->acceptoff){
        //     return "Offer recieved";
        // }
        // }
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

        //Notifications

        // To SuperAdmin
        $superAdmin = User::where('role', '=', 'superAdmin')->first();
        Notification::send($superAdmin, new OfferAdded());
        // To Associated Managers(Admins and Agents)
        $managers = UserManager::with(['user'])->where(
            'user_id', '=', Auth::id()
        )->get();

        foreach ($managers as $manager) {
            Notification::send(User::find($manager->manager_id), new OfferAdded());
        }

        return redirect('/client/view-offers')->with('status', 'The offer has been recorded successfully.');
    }

    public function updateOfferForm($offerid) {
        $offer = Offer::where([
            ['id','=',$offerid]
        ])->first();

        $offer_ends = strtotime($offer->offer_ends);
        $offer->offer_ends = date('m/d/Y H:i A', $offer_ends);

        return view('offer-add-update-form')->with('offer', $offer);
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

        return redirect('/client/view-offers')->with('status', 'The offer has been updated successfully.'); 
    }

    public function inviteAgent(Request $request) {
        if(Auth::user()) {
            //save invitation request
            $AgentInvitation = new AgentInvitation();
            $AgentInvitation->agent_email_address = $request->email;
            $AgentInvitation->message = $request->message;
            $AgentInvitation->invited_by = Auth::id();
            $AgentInvitation->save();

            //create invite code
            $invite_code = 'INVT-' . Auth::id();
            // dd($invite_code);

            //invite agent via. mail
            Mail::to($request->email)
                ->send(new InviteAgent($request->message, $invite_code));

            //redirect based on user role
            $user_role = Auth::user()->role;

            return redirect('/' . $user_role . '/invite-agent')->with('status', 'Agent Invited Successfully.');
        }
        else {
            echo "Something went wrong. Please contact support.";
        }
    }

    public function viewTSPs()
    {
        $providers = TrustedServiceProvider::where([
            ['is_deleted','=',0], //hide deleted
        ])->get();

        return view('client.view-trusted-service-providers', compact('providers'));
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

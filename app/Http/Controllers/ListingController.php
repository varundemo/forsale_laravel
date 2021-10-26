<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function viewSavedListings() {
        if(Auth::user()->role == 'superAdmin') {
            $listings = Listing::where(
                [
                    ['is_deleted', '=', null], //hide deleted
                ]
            )->get();
        }
        else {
            $listings = Listing::where(
                [
                    ['is_deleted', '=', 0], //hide deleted
                    ['user_id', '=', Auth::id()],
                ]
            )->get();
        }

        return view('view-saved-listings', compact('listings'));
    }

    public function addListingForm($listing_no = "", $address = "") {
        return view('listing-add-update-form', compact('listing_no', 'address'));
    }

    public function editListingForm($listing_no) {
        $listing = Listing::where([
            ['id','=',$listing_no]
        ])->first();

        //check admin or content owner privileges
        if( (Auth::user()->role == 'superAdmin') OR (Auth::id() == $listing->user_id)) {
            return view('listing-add-update-form', compact('listing'));
        }
        return redirect('/saved-listings')->with('status', 'Something went wrong. Please contact support.');
    }

    public function editListing(Request $request, $listing_id) {
        $Listing = Listing::where([
            ['id','=',$listing_id]
        ])->first();

        //check admin or content owner privileges
        if( (Auth::user()->role == 'superAdmin') OR (Auth::id() == $Listing->user_id)) {
            $Listing->fill($request->all());
            $Listing->save();
            return redirect('/saved-listings')->with('status', 'The listing has been updated successfully.');
        }
        return redirect('/saved-listings')->with('status', 'Something went wrong. Please contact support.');
    }

    public function addListing(Request $request) {
        $Listing = new Listing();
        $Listing->fill($request->all());
        $Listing->user_id = Auth::id();
        $Listing->save();

        return redirect('/saved-listings')->with('status', 'The listing has been saved successfully.');
    }

    public function deleteListing($listing_no) {
        $Listing = Listing::where([
            ['id','=',$listing_no]
        ])->first();
        //check admin or content owner privileges
        if( (Auth::user()->role == 'superAdmin') OR (Auth::id() == $Listing->user_id)) {
            $Listing->is_deleted = 1;
            $Listing->save();
            return redirect('/saved-listings')->with('status', 'The listing has been deleted successfully.');
        }
        return redirect('/saved-listings')->with('status', 'Something went wrong. Please contact support.');
    }
}

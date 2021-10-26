<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Notification;
use App\Notifications\ClientRegistered;
use App\User;
// use Session;

Route::get('/ss', 'SlipStreamController@index');
Route::post('/listing/search/{id}', 'SlipStreamController@search');
Route::post('/next-page', 'SlipStreamController@nextpage');
Route::get('/photo-gal', 'SlipStreamController@photogal');
Route::post('/save-prop', 'SlipStreamController@saveprop');
Route::get('/save-search', 'SlipStreamController@savesearch');
Route::get('/view-detail', 'SlipStreamController@viewdetail');
Route::post('/remove-prop', 'SlipStreamController@removeprop');
Route::get('/list-page', 'SlipStreamController@listpage');

Route::get('/', function () {
    //return view('frontend.index');
    return view('fsbw-layout.index');
});

Route::get('/registration', function () {
    return view('frontend.registration');
})->name('register');

Route::get('/buy', function () {
    return view('frontend.buy');
});

Route::get('/sell', function () {
    return view('frontend.sell');
});

Route::get('/find-agent', function () {
    return view('frontend.find-agent');
});

Route::get('/why-12-days', function () {
    return view('frontend.why-12-days');
});

Route::get('/faqs', function () {
    return view('frontend.faqs');
});

Route::get('/our-secret', function () {
    return view('frontend.our-secret');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/agent-partners', function () {
    return view('frontend.agent-partners');
});

Route::get('/dashboard', function () {
    if(Auth::user()) {
        //User role
        $user_role = Auth::user()->role;
        // code changes start
        $user_id = Auth::user()->id;
        session(['userid'=>$user_id]);
        // code change end
        switch($user_role) {
            case 'superAdmin':
                return view('superAdmin.dashboard');
                break;
            case 'admin':
                return view('admin.dashboard');
                break;
            case 'worker':
                return view('agent.dashboard');
                break;
            case 'client':
                // return "This is dashboard page";
                return view('client.dashboard');
                break;
        }
    }
    return redirect('/login');
})->middleware('verified');

Route::get('/settings', function () {
    if(Auth::user()) {
        //User role
        $user_role = Auth::user()->role;
        //user
        $user = User::find(Auth::id());

        switch($user_role) {
            case 'superAdmin':
                return view('superAdmin.settings', compact('user'));
                break;
            case 'admin':
                return view('admin.settings', compact('user'));
                break;
            case 'worker':
                return view('agent.settings', compact('user'));
                break;
            case 'client':
                return view('client.settings', compact('user'));
                break;
        }
    }
    return redirect('/login');
})->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/view-notifications', 'NotificationController@viewNotifications');

/**************************************
SUPER ADMIN ROUTES
 **************************************/

Route::get('/superAdmin/invite-agent', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\ClientController@index');
}]);

Route::get('/superAdmin', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SuperAdminController@index');
}]);

Route::resource('superAdmin/users', 'UserController')->middleware('superAdmin');

//Route::resource('admin/users', 'UserController')->middleware('admin');

Route::post('/superAdmin/add-user', ['middleware' => 'superAdmin', 'uses' =>'UserController@store'])->name('addUserRoute');
Route::get('/superAdmin/update-user/{userId}', ['middleware' => 'superAdmin', 'uses' =>'UserController@edit']);
Route::patch('/superAdmin/update-user/{userId}', ['middleware' => 'superAdmin', 'uses' =>'UserController@update'])->name('updateUserRoute');

Route::get('/superAdmin/delete-user/{userId}', ['middleware' => 'superAdmin', 'uses' =>'UserController@destroy']);

Route::get('/superAdmin/view-user/{userId}', ['middleware' => 'superAdmin', 'uses' =>'UserController@show']);

Route::get('/superAdmin/view-bookings', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SuperAdminController@viewBookings');
}]);

Route::get('/superAdmin/add-booking', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@addBookingForm']);
Route::post('/superAdmin/add-booking', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@addBooking'])->name('addBookingRouteSuperAdmin');
Route::get('/superAdmin/update-booking/{bookingId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateBookingForm']);
Route::patch('/superAdmin/update-booking/{bookingId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateBooking'])->name('updateBookingRouteSuperAdmin');

Route::get('/superAdmin/assign-admin/{clientId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@assignAdminForm']);
Route::post('/superAdmin/assign-admin', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@assignAdmin'])->name('assignAdminRoute');

Route::get('/superAdmin/send-file', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SendFileController@sendFileForm');
}]);

Route::get('/superAdmin/view-shared-files', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SendFileController@superAdminViewSharedFiles');
}]);

Route::post('/superAdmin/send-file', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SendFileController@sendFile');
}])->name('sendFileRoute');

Route::get('/superAdmin/view-client-bookings/{clientId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@viewClientBookings']);

Route::get('/superAdmin/approve-booking/{bookingId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@approveBooking']);
Route::get('/superAdmin/deny-booking/{bookingId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@denyBooking']);
Route::get('/test', function() {
    return App::call('App\Http\Controllers\ClientController@test');
});
Route::get('/superAdmin/update-transaction-status/{bookingId}/{statusCode}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateTransactionStatus']);

Route::get('/superAdmin/make-recommendation/{clientId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@makeRecommendationForm']);
Route::post('/superAdmin/make-recommendation', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@makeRecommendation'])->name('makeRecommendationRouteSuperAdmin');

Route::get('/superAdmin/update-recommendation/{recommendationId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateRecommendationForm']);
Route::patch('/superAdmin/update-recommendation/{recommendationId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateRecommendation'])->name('updateRecommendationRouteSuperAdmin');

Route::get('/superAdmin/view-recommendations', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SuperAdminController@viewRecommendations');
}]);

Route::get('/superAdmin/view-trusted-service-providers', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SuperAdminController@viewTrustedServiceProviders');
}]);

Route::get('/superAdmin/add-trusted-service-provider', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@addTrustedServiceProviderForm']);
Route::post('/superAdmin/add-trusted-service-provider', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@addTrustedServiceProvider'])->name('addTrustedServiceProviderRouteSuperAdmin');

Route::get('/superAdmin/update-trusted-service-provider/{providerId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateProviderForm']);
Route::patch('/superAdmin/update-trusted-service-provider/{providerId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateProvider'])->name('updateTrustedServiceProviderRouteSuperAdmin');

Route::get('/superAdmin/delete-trusted-service-provider/{providerId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@deleteProvider']);

Route::get('/superAdmin/assign-agent/{clientId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@assignAgentForm']);
Route::post('/superAdmin/assign-agent', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@assignAgent'])->name('assignAgentRouteSuperAdmin');

Route::get('/superAdmin/make-offer', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SuperAdminController@makeOffer');
}]);

Route::get('/superAdmin/view-offers', ['middleware' => 'superAdmin', function () {
    return App::call('App\Http\Controllers\SuperAdminController@viewOffers');
}]);

Route::post('/superAdmin/add-offer', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@addOffer'])->name('addOfferRouteSuperAdmin');
Route::get('/superAdmin/update-offer/{offerId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateOfferForm']);
Route::patch('/superAdmin/update-offer/{offerId}', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateOffer'])->name('updateOfferRouteSuperAdmin');

Route::get('/superAdmin/add-blog-post', ['middleware' => 'superAdmin', 'uses' =>'BlogController@addBlogForm']);
Route::get('/superAdmin/update-blog-post/{blogPostId}', ['middleware' => 'superAdmin', 'uses' =>'BlogController@updateBlogPostForm']);
Route::patch('/superAdmin/update-blog-post/{blogPostId}', ['middleware' => 'superAdmin', 'uses' =>'BlogController@updateBlogPost'])->name('updateBlogPostRoute');

Route::post('/ckeditor/image_upload', ['middleware' => 'superAdmin', 'uses' =>'BlogController@upload'])->name('upload');
Route::post('/saveBlog', ['middleware' => 'superAdmin', 'uses' =>'BlogController@saveBlog'])->name('saveBlogRoute');

Route::get('/superAdmin/view-blog-posts', ['middleware' => 'superAdmin', 'uses' =>'BlogController@viewBlogPosts']);

Route::get('/superAdmin/delete-blog-post/{blogPostId}', ['middleware' => 'superAdmin', 'uses' =>'BlogController@deleteBlogPost']);

Route::patch('/update-superAdmin-settings', ['middleware' => 'superAdmin', 'uses' =>'SuperAdminController@updateSettings'])->name('updateSuperAdminSettingsRoute');

Route::get('/superAdmin/file-manager', function() {
    return view('superAdmin.file-manager');
})->middleware('superAdmin');

Route::get('/superAdmin/saved-listings', ['middleware' => 'superAdmin', 'uses' =>'ListingController@viewSavedListings']);
Route::get('/add-listing/{listing_no?}/{address?}', ['middleware' => 'auth', 'uses' =>'ListingController@addListingForm']);
Route::post('/add-listing', ['middleware' => 'auth', 'uses' =>'ListingController@addListing'])->name('addListingRoute');
Route::patch('/update-listing/{listing_id}', ['middleware' => 'auth', 'uses' =>'ListingController@editListing'])->name('updateListingRoute');

Route::get('/saved-listings', function () {
    if(Auth::user()) {
        //User role
        $user_role = Auth::user()->role;

        //check if flash message exists
        $status = "";
        if(Session::has('status')) {
            $status = Session::get('status');
        }

        switch($user_role) {
            case 'superAdmin':
                return redirect('/superAdmin/saved-listings')->with('status', $status);
                break;
            case 'admin':
                return redirect('/admin/saved-listings')->with('status', $status);
                break;
            case 'worker':
                return redirect('/worker/saved-listings')->with('status', $status);
                break;
            case 'client':
                return redirect('/client/saved-listings')->with('status', $status);
                break;
        }
    }
    return redirect('/login');
})->middleware('verified');

Route::get('/delete-listing/{listing_no}', ['middleware' => 'auth', 'uses' =>'ListingController@deleteListing']);
Route::get('/edit-listing/{listing_no}', ['middleware' => 'auth', 'uses' =>'ListingController@editListingForm']);

Route::get('/view-shared-files/{file_transfer_id}', ['middleware' => 'auth', 'uses' =>'SharedFileController@viewSharedFiles']);

Route::get('/view-recent-offers/{listing_no}', ['middleware' => 'auth', 'uses' =>'SuperAdminController@viewRecentOffers']);

/**************************************
CLIENT ROUTES
 **************************************/

Route::get('/client/view-trusted-service-providers', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@viewTSPs');
}]);

Route::get('/client/invite-agent', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@index');
}]);

Route::post('/client/invite-agent', function () {
    return App::call('App\Http\Controllers\ClientController@inviteAgent');
})->name('inviteAgentRoute');

Route::get('/client/request-booking', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@requestBooking');
}]);

Route::get('/client/view-bookings', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@viewClientBookings');
}]);

Route::post('/client/add-booking', ['middleware' => ['client', 'verified'], 'uses' =>'ClientController@addBooking'])->name('addBookingRoute');
Route::get('/client/update-booking/{bookingId}', ['middleware' => ['client', 'verified'], 'uses' =>'ClientController@updateBookingForm']);
Route::patch('/client/update-booking/{bookingId}', ['middleware' => ['client', 'verified'], 'uses' =>'ClientController@updateBooking'])->name('updateBookingRoute');

Route::get('/client/make-offer', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@makeOffer');
}]);

Route::get('/client/view-offers', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@viewClientOffers');
}]);

Route::post('/client/add-offer', ['middleware' => ['client', 'verified'], 'uses' =>'ClientController@addOffer'])->name('addOfferRoute');
Route::get('/client/update-offer/{offerId}', ['middleware' => ['client', 'verified'], 'uses' =>'ClientController@updateOfferForm']);
Route::patch('/client/update-offer/{offerId}', ['middleware' => ['client', 'verified'], 'uses' =>'ClientController@updateOffer'])->name('updateOfferRoute');

Route::get('/test-notification', ['middleware' => ['client', 'verified'], function () {
    $superAdmin = User::where('role', '=', 'superAdmin')->first();
    $superAdmin->notify(new ClientRegistered());
}]);

Route::get('/client/send-file', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\SendFileController@sendFileForm');
}]);

Route::get('/client/view-shared-files', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\SendFileController@viewSharedFiles');
}]);

Route::patch('/update-Client-settings', ['middleware' => 'client', 'uses' =>'ClientController@updateSettings'])->name('updateClientSettingsRoute');

//Route::post('/client/send-file', ['middleware' => ['client', 'verified'], function () {
//    return App::call('App\Http\Controllers\SendFileController@sendFile');
//}])->name('sendFileRoute');

/**************************************
    ADMIN ROUTES
**************************************/

Route::get('/admin/invite-agent', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@index');
}]);

Route::get('/admin/view-clients-assigned', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\AdminController@viewClientsAssigned');
}]);

Route::get('/admin/assign-agent/{clientId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@assignAgentForm']);
Route::post('/admin/assign-agent', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@assignAgent'])->name('assignAgentRouteAdmin');

Route::get('/admin/view-users', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\AdminController@viewUsers');
}]);

Route::get('/admin/view-user/{userId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@viewUser']);

Route::get('/admin/add-user', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\AdminController@addUserForm');
}]);
Route::post('/admin/add-user', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@addUser'])->name('addUserRouteAdmin');
Route::get('/admin/update-user/{userId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateUserForm']);
Route::patch('/admin/update-user/{userId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateUser'])->name('updateUserRouteAdmin');
Route::get('/admin/delete-user/{userId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@deleteUser']);

Route::get('/admin/view-client-bookings/{clientId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@viewClientBookings']);

Route::get('/admin/approve-booking/{bookingId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@approveBooking']);
Route::get('/admin/deny-booking/{bookingId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@denyBooking']);

Route::get('/admin/update-transaction-status/{bookingId}/{statusCode}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateTransactionStatus']);

Route::get('/admin/update-booking/{bookingId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateBookingForm']);
Route::patch('/admin/update-booking/{bookingId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateBooking'])->name('updateBookingRouteAdmin');

Route::get('/admin/make-recommendation/{clientId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@makeRecommendationForm']);
Route::post('/admin/make-recommendation', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@makeRecommendation'])->name('makeRecommendationRouteAdmin');

Route::get('/admin/view-recommendations', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\AdminController@viewRecommendations');
}]);

Route::get('/admin/update-recommendation/{recommendationId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateRecommendationForm']);
Route::patch('/admin/update-recommendation/{recommendationId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateRecommendation'])->name('updateRecommendationRouteAdmin');

Route::get('/admin/view-trusted-service-providers', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\AdminController@viewTrustedServiceProviders');
}]);

Route::get('/admin/add-trusted-service-provider', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@addTrustedServiceProviderForm']);
Route::post('/admin/add-trusted-service-provider', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@addTrustedServiceProvider'])->name('addTrustedServiceProviderRouteAdmin');

Route::get('/admin/update-trusted-service-provider/{providerId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateProviderForm']);
Route::patch('/admin/update-trusted-service-provider/{providerId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@updateProvider'])->name('updateTrustedServiceProviderRouteAdmin');

Route::get('/admin/delete-trusted-service-provider/{providerId}', ['middleware' => ['admin', 'verified'], 'uses' =>'AdminController@deleteProvider']);

Route::get('/admin/send-file', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\SendFileController@sendFileForm');
}]);

Route::get('/admin/view-shared-files', ['middleware' => ['admin', 'verified'], function () {
    return App::call('App\Http\Controllers\SendFileController@viewSharedFiles');
}]);

Route::patch('/update-Admin-settings', ['middleware' => 'admin', 'uses' =>'AdminController@updateSettings'])->name('updateAdminSettingsRoute');

//Route::post('/admin/send-file', ['middleware' => ['admin', 'verified'], function () {
//    return App::call('App\Http\Controllers\SendFileController@sendFile');
//}])->name('sendFileRoute');

/**************************************
WORKER/AGENT ROUTES
 **************************************/

Route::get('/agent/view-clients-assigned', ['middleware' => ['worker', 'verified'], function () {
    return App::call('App\Http\Controllers\AgentController@viewClientsAssigned');
}]);

Route::get('/agent/view-client-bookings/{clientId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@viewClientBookings']);

Route::get('/agent/approve-booking/{bookingId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@approveBooking']);
Route::get('/agent/deny-booking/{bookingId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@denyBooking']);

Route::get('/agent/update-transaction-status/{bookingId}/{statusCode}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@updateTransactionStatus']);

Route::get('/agent/update-booking/{bookingId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@updateBookingForm']);
Route::patch('/agent/update-booking/{bookingId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@updateBooking'])->name('updateBookingRouteAgent');

Route::get('/agent/make-recommendation/{clientId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@makeRecommendationForm']);
Route::post('/agent/make-recommendation', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@makeRecommendation'])->name('makeRecommendationRouteAgent');

Route::get('/agent/view-recommendations', ['middleware' => ['worker', 'verified'], function () {
    return App::call('App\Http\Controllers\AgentController@viewRecommendations');
}]);

// changes start
Route::get('/client/view-recommendations', ['middleware' => ['client', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@viewRecommendations');
}]);
// changes end

Route::get('/agent/update-recommendation/{recommendationId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@updateRecommendationForm']);
Route::patch('/agent/update-recommendation/{recommendationId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@updateRecommendation'])->name('updateRecommendationRouteAgent');

Route::get('/agent/view-trusted-service-providers', ['middleware' => ['worker', 'verified'], function () {
    return App::call('App\Http\Controllers\AgentController@viewTrustedServiceProviders');
}]);

Route::get('/agent/add-trusted-service-provider', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@addTrustedServiceProviderForm']);
Route::post('/agent/add-trusted-service-provider', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@addTrustedServiceProvider'])->name('addTrustedServiceProviderRouteAgent');

Route::get('/agent/update-trusted-service-provider/{providerId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@updateProviderForm']);
Route::patch('/agent/update-trusted-service-provider/{providerId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@updateProvider'])->name('updateTrustedServiceProviderRouteAgent');

Route::get('/agent/delete-trusted-service-provider/{providerId}', ['middleware' => ['worker', 'verified'], 'uses' =>'AgentController@deleteProvider']);

Route::get('/agent/send-file', ['middleware' => ['worker', 'verified'], function () {
    return App::call('App\Http\Controllers\SendFileController@sendFileForm');
}]);

Route::get('/{user_role}/view-shared-files', ['middleware' => ['worker', 'verified'], function () {
    return App::call('App\Http\Controllers\SendFileController@viewSharedFiles');
}])->where('user_role', '(agent|worker)');

Route::post('/agent/send-file', function () {
    return App::call('App\Http\Controllers\SendFileController@sendFile');
})->name('sendFileRoute');

Route::get('/{user_role}/invite-agent', ['middleware' => ['worker', 'verified'], function () {
    return App::call('App\Http\Controllers\ClientController@index');
}])->where('user_role', '(agent|worker)');

Route::patch('/update-Agent-settings', ['middleware' => 'worker', 'uses' =>'AgentController@updateSettings'])->name('updateAgentSettingsRoute');

/* Other Routes */
Route::get('/invitation/{invite_code}', 'InvitationController@agentInvitationForm');
Route::get('/agent-register', function() {
    $agent_registration = 1;
    return view('auth.register', compact('agent_registration'));
});

/** Front end Routes */

Route::get('/articles-knowledge', function() {
    return App::call('App\Http\Controllers\BlogController@index');
});

Route::get('/articles-knowledge/{blogPostId}', ['uses' =>'BlogController@viewBlogPost']);

Route::get('/search', ['uses' =>'SearchController@index']);
Route::get('/search-content/{params?}', ['uses' =>'SearchController@getPage']);
Route::get('/save-listing/{listing_no}', function($listing_no) {
    if(Auth::user()) {
        //User role
        $user_role = Auth::user()->role;
        switch($user_role) {
            case 'superAdmin':
                return view('superAdmin.dashboard');
                break;
            case 'admin':
                return view('admin.dashboard');
                break;
            case 'worker':
                return view('agent.dashboard');
                break;
            case 'client':
                return view('client.dashboard');
                break;
        }
    }
    return redirect('/login');
});

Route::get('/parent-url/{params?}', ['uses' =>'SearchController@parentUrl']);

/** Notification(Email and Web) redirection Routes */
Route::get('/new-booking/{bookingId}', function ($bookingId) {
    if(Auth::user()) {
        //get client id from bookingId
        $booking = \App\BookingAndShowing::find($bookingId);
        $client_id = $booking->user_id;

        //User role
        $user_role = Auth::user()->role;
        switch($user_role) {
            case 'superAdmin':
                return redirect('/superAdmin/view-bookings');
                break;
            case 'admin':
                return redirect('/admin/view-client-bookings/' . $client_id);
                break;
            case 'worker':
                return redirect('/agent/view-client-bookings/' . $client_id);
                break;
        }
    }
    return redirect('/login');
})->middleware('verified');

Route::get('/notification/{notificationId}', function($notificationId) {
    //get notification
    $notification = Notification::find($notificationId);
    // $notification2 = Notification::find($notificationId)->all();
    // echo "<pre>";
    // print_r($notification);
    // echo "<hr><hr>";
    // print_r($notification2);
    $bookingdata = json_decode(json_encode($notification->data));
    $bookde = json_decode($bookingdata);
    // print_r(json_decode(json_encode($bookingdata)));
    // print_r(json_decode(json_encode($bookde)));
    // print_r($bookde->message);

    // print_r(json_decode(json_encode($notification2)));
    // echo "</pre><br>";
    // die();
    //get notification type
    $notificationType = $notification->type;
    switch ($notificationType) {
        case 'App\Notifications\BookingAdded':
            // return redirect('/new-booking/' . json_decode($notification->data)->bookingId);
            return redirect('/new-booking/' . $bookde->bookingId);
            break;
        default:
            return redirect('/dashboard');
            break;
    }
});


Route::get('apii','SlipStreamController@api');
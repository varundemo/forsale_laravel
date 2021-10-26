<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     */

    public function authenticate(Request $request)
    {
        // dd($request);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
    public function redirectTo() {
        // dd("this file");
//        // User role
//        $user_role = Auth::user()->role;
//
//        switch($user_role) {
//            case 'superAdmin':
//                return '/superAdmin';
//                break;
//            case 'admin':
//                return '/admin';
//                break;
//            case 'worker':
//                return '/worker';
//                break;
//            case 'client':
//                return '/client';
//                break;
//        }

        return '/dashboard';
    }

    protected function authenticated(Request $request)
    {
        // dd($request);
        $location = $request->get('next') ? $request->get('next') : '/dashboard';
        return redirect($location);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

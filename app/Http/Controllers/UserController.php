<?php

namespace App\Http\Controllers;

use App\User;
use App\UserManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the users (for Super Admin)
        if(Auth::user()->role == "superAdmin") {
            $users = User::where([
                ['role', '!=', 'superAdmin'],
                ['deleted', '=', 0],
            ])->get();
        }
        else {
            $users = User::where([
                ['role', '!=', 'superAdmin'],
                ['id', '!=', Auth::id()], //not current logged in user
                ['deleted', '=', 0],
            ])->get();
        }

        // load the view and pass the users
        return View::make('view-users')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form
        return View::make('user-add-update-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'name' => 'required|min:3',
            'role' => 'required'
        ]);

        $user = new User();
        $user->fill($validatedData);

        //hash password
        $user->password = Hash::make($user->password);

        $user->save();

        return redirect('/superAdmin/users')->with('status', 'The user account has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $user = User::where([
            ['deleted','=','0'], //hide deleted accounts
            ['id','=',$userId]
        ])->first();
        if(!$user){
            return redirect('/dashboard');
        }
        return view('view-user', compact('user', $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId)
    {
        $user = User::where([
            ['role','!=','superAdmin'], //hide super admin account
            ['id','=',$userId]
        ])->first();

        return view('user-add-update-form')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users,email,' . $userId,
            'password' => 'nullable|confirmed|min:6',
            'name' => 'required|min:3',
            'role' => 'required'
        ]);

        $user = User::where([
            ['role','!=','superAdmin'], //hide super admin account
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

        return redirect('/superAdmin/users')->with('status', 'The user account has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId)
    {
        $user = User::where([
            ['role','!=','superAdmin'],
            ['id','=',$userId]
        ])->first();

        $user->deleted = 1;
        $user->save();

        return redirect('/superAdmin/users')->with('status', 'The user account has been deleted successfully.');
    }
}

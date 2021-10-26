<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function agentInvitationForm($invite_code) {
        //$userId = str_replace('INVT-', '', $invite_code);
        //$user = User::findOrFail($userId);

        //load register view
        return view('auth.register', compact('invite_code'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Notification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function viewNotifications() {
        $user = User::find(Auth::id());
        //$notifications = $user->notifications;

        //mark all notifications as read
        $user->unreadNotifications->markAsRead();
        $notifications = Notification::getNotifications();
        return view('view-notifications', compact('notifications'));
    }
}

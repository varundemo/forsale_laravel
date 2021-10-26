<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    public static function countAllNotifications() {
        $notifications = \DB::table('notifications')->where(
            [
                ['notifiable_id', '=', Auth::id()],
            ]
        )->get();

        return count($notifications);
    }

    public static function countUnreadNotifications() {
        $notifications = \DB::table('notifications')->where(
            [
                ['notifiable_id', '=', Auth::id()],
                ['read_at', '=', null],
            ]
        )->get();

        return count($notifications);
    }

    public static function getNotifications($first3 = false) {
        if($first3) {
            $notifications = \DB::table('notifications')->where(
                [
                    ['notifiable_id', '=', Auth::id()],
                ]
            )->latest()->take(3)->get();
        }
        else {
            $notifications = \DB::table('notifications')->where(
                [
                    ['notifiable_id', '=', Auth::id()],
                ]
            )->latest()->get();
        }


        return $notifications;
    }
}

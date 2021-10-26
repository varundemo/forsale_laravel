<?php

namespace App\Providers;

use App\Notification;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer(['layouts.loggedIn_header'], function ($view) {
            $notifications = Notification::getNotifications($first3 = true);
            $notificationCount = Notification::countUnreadNotifications();
            $allNotificationCount = Notification::countAllNotifications();
            $view->with(compact('notifications', 'notificationCount', 'allNotificationCount')); // bind data to view
        });
    }
}

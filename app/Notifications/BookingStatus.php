<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingStatus extends Notification
{
    use Queueable;

    private $bookingId;
    private $status;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($bookingId, $status)
    {
        $this->bookingId = $bookingId;
        $this->status = $status;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $msg = null;
        if($this->status == 'approved') {
            $msg = 'Your booking with id ' . $this->bookingId . ' has been approved.';
        }
        else if($this->status == 'denied') {
            $msg = 'Your booking with id ' . $this->bookingId . ' has been denied.';
        }

        return (new MailMessage)
            ->line($msg)
            ->action('Login', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $msg = null;
        if($this->status == 'approved') {
            $msg = 'Your booking with id ' . $this->bookingId . ' has been approved.';
        }
        else if($this->status == 'denied') {
            $msg = 'Your booking with id ' . $this->bookingId . ' has been denied.';
        }

        return [
            'message' => $msg,
        ];
    }
}

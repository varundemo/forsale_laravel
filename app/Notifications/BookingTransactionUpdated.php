<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingTransactionUpdated extends Notification
{
    use Queueable;

    private $bookingId;
    private $txnStatus;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($bookingId, $txnStatus)
    {
        $this->bookingId = $bookingId;
        $this->txnStatus = $txnStatus;
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
        $msg = 'Transaction status for your booking with id ' . $this->bookingId . ' has been updated to ' . $this->txnStatus . '.';

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
        $msg = 'Transaction status for your booking with id ' . $this->bookingId . ' has been updated to ' . $this->txnStatus . '.';

        return [
            'message' => $msg,
        ];
    }
}

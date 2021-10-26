<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FileSent extends Notification
{
    use Queueable;

    private $recipient_id;
    private $file_transfer_id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($recipient_id, $file_transfer_id)
    {
        $this->recipient_id = $recipient_id;
        $this->file_transfer_id = $file_transfer_id;
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
        return (new MailMessage)
                    ->line('You have received a file.')
                    ->action('Download File', url('/'))
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
        return [
            'userId' => $this->recipient_id,
            'fileTransferId' => $this->file_transfer_id,
            'message' => 'New file received.',
        ];
    }
}

<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AgentAssigned extends Notification
{
    use Queueable;

    private $type;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($type)
    {
        $this->type = $type;
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
        //notification type
        $msg = null;
        if($this->type == 'toAgent') {
            $msg = "You have been assigned to a Client.";
        }
        else if($this->type == 'toClient') {
            $msg = "You have been assigned to an Agent.";
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
        //notification type
        $msg = null;
        if($this->type == 'toAgent') {
            $msg = "You have been assigned to a Client.";
        }
        else if($this->type == 'toClient') {
            $msg = "You have been assigned to an Agent.";
        }

        return [
            'message' => $msg,
        ];
    }
}

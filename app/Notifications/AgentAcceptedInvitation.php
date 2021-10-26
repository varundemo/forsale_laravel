<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AgentAcceptedInvitation extends Notification
{
    use Queueable;

    private $agent_email;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($agent_email)
    {
        $this->agent_email = $agent_email;
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
        $msg = "Agent with email address " . $this->agent_email . " has accepted your invitation.";

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
        $msg = "Agent with email address " . $this->agent_email . " has accepted your invitation.";

        return [
            'message' => $msg,
            'agent_email' => $this->agent_email,
        ];
    }
}

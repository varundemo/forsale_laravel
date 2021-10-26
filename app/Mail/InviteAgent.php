<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteAgent extends Mailable
{
    use Queueable, SerializesModels;

    private $message_content;
    private $invite_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message_content, $invite_code)
    {
        $this->message_content = $message_content;
        $this->invite_code = $invite_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.inviteAgent')->with(['message_content' => $this->message_content, 'invite_code' => $this->invite_code]);
    }
}

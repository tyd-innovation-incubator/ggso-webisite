<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactusMail extends Mailable
{
    use Queueable, SerializesModels;
     public $name;
     public $email;
     public $subject;
     public $user_message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $user_message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->user_message = $user_message;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactform');
    }
}

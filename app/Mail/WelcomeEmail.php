<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address('employhub27@gmail.com'),
            subject: 'Welcome EmployHub',
        );
    }

    public function content()
    {
        // return new Content(
        //     view: 'mails.welcome.blade',
        //     with: [
        //         'user' => $this->user
        //     ]
        // );

        return new Content(
            view: 'mails.welcome',
            with: [
                'user' => $this->user
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}
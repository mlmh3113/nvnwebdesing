<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $email;
    public $phone;
    public $msg;


    public function __construct($name, $email, $phone, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->msg = $msg;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact NVN Web Desing Mail',
                         
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'emails.ContactViewMail',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}

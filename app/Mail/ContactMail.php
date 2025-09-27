<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public Contact $contact;
    public bool $isAutoReply;

    public function __construct(Contact $contact, bool $isAutoReply = false)
    {
        $this->contact = $contact;
        $this->isAutoReply = $isAutoReply;
    }

    public function envelope(): Envelope
    {
        if ($this->isAutoReply) {
            return new Envelope(
                subject: 'Thank you for contacting me - H.T. Upetha Laksiluni',
                from: config('mail.from.address'),
                to: $this->contact->email,
            );
        }

        return new Envelope(
            subject: 'New Contact Form Submission - ' . ($this->contact->subject ?: 'No Subject'),
            from: $this->contact->email,
            replyTo: $this->contact->email,
            to: config('mail.from.address'),
        );
    }

    public function content(): Content
    {
        if ($this->isAutoReply) {
            return new Content(
                view: 'emails.contact-auto-reply',
                with: [
                    'contact' => $this->contact,
                ]
            );
        }

        return new Content(
            view: 'emails.contact-notification',
            with: [
                'contact' => $this->contact,
            ]
        );
    }
}

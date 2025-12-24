<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $data
    ) {}

    public function envelope(): Envelope
    {
        $subjectMap = [
            'project' => 'New Project Inquiry',
            'product' => 'Product Information Request',
            'services' => 'Service Consultation',
            'partnership' => 'Partnership Opportunity',
            'other' => 'General Inquiry',
        ];

        $subject = $subjectMap[$this->data['subject']] ?? 'Contact Form Submission';

        return new Envelope(
            subject: "[Dimgent] {$subject}",
            replyTo: [$this->data['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-message',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

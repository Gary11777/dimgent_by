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
            'project' => 'Новый проект',
            'product' => 'Информация о продукте (Garand 101)',
            'services' => 'Консультация по услугам',
            'partnership' => 'Партнерство',
            'other' => 'Другое',
        ];

        $subject = $subjectMap[$this->data['subject']] ?? 'Сообщение с сайта dimgent.by';

        return new Envelope(
            subject: "[Dimgent.by] {$subject}",
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

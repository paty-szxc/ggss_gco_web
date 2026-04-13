<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiryData;
    public $attachmentPath;
    public $attachmentName;
    public $mimeType;

    public function __construct($inquiryData, $attachmentPath = null, $attachmentName = null, $mimeType = null)
    {
        $this->inquiryData = $inquiryData;
        $this->attachmentPath = $attachmentPath;
        $this->attachmentName = $attachmentName;
        $this->mimeType = $mimeType;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Inquiry: ' . ($this->inquiryData['services_needed'] ?? 'General Inquiry'),
            replyTo: [$this->inquiryData['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.inquiry',
            with: [
                'inquiryData' => $this->inquiryData,
            ],
        );
    }

    public function attachments(): array
    {
        if ($this->attachmentPath && $this->attachmentName) {
            return [
                Attachment::fromPath($this->attachmentPath)
                    ->as($this->attachmentName)
                    ->withMime($this->mimeType),
            ];
        }

        return [];
    }
}

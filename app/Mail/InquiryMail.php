<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $inquiryData;

    /** @var \Illuminate\Http\UploadedFile[] */
    public array $uploadedFiles;

    public function __construct(array $inquiryData, array $uploadedFiles = [])
    {
        $this->inquiryData = $inquiryData;
        $this->uploadedFiles = $uploadedFiles;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New inquiry from ' . $this->inquiryData['client_name'],
            replyTo: [
                new Address($this->inquiryData['client_email'], $this->inquiryData['client_name']),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.inquiry',
            with: [
                'inquiryData' => $this->inquiryData,
                'attachmentNames' => array_map(
                    fn ($file) => $file->getClientOriginalName(),
                    $this->uploadedFiles
                ),
            ],
        );
    }

    public function attachments(): array
    {
        return array_map(
            fn ($file) => Attachment::fromPath($file->getRealPath())
                ->as($file->getClientOriginalName())
                ->withMime($file->getMimeType()),
            $this->uploadedFiles
        );
    }
}
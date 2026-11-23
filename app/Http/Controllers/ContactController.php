<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Resend allows 40 MB per email after Base64 encoding (about 30 MB of raw files),
    // so keep the combined size of the attachments safely below that.
    private const MAX_TOTAL_ATTACHMENT_KB = 25600; // 25 MB

    public function store(Request $request)
    {
        // Hidden "website" field: real visitors never fill it in, bots often do.
        if ($request->filled('website')) {
            return response()->json(['message' => 'Your inquiry has been sent successfully!']);
        }

        $data = $request->validate([
            'client_name'       => 'required|string|max:255',
            'client_email'      => 'required|email|max:255',
            'contact_no'        => 'required|digits:11',
            'services_needed'   => 'required|array|min:1',
            'services_needed.*' => 'string|max:255',
            'purpose'           => 'required|string|max:255',
            'area'              => 'required|string|max:255',
            'location'          => 'required|string|max:255',
            'title'             => 'required|in:Yes,No',
            'attachments'       => 'nullable|array|max:5',
            'attachments.*'     => 'file|mimes:pdf,jpg,jpeg,png,doc,docx|max:10240', // 10 MB each
        ]);

        $files = $request->file('attachments', []);

        $totalKb = collect($files)->sum(fn ($file) => $file->getSize() / 1024);
        if ($totalKb > self::MAX_TOTAL_ATTACHMENT_KB) {
            return response()->json([
                'message' => 'The attachments are too large.',
                'errors'  => ['attachments' => ['The attachments must be 25 MB or less in total.']],
            ], 422);
        }

        $to = config('mail.inquiry_to') ?: config('mail.from.address');

        try {
            Mail::to($to)->send(new InquiryMail($data, $files));
        } catch (\Throwable $e) {
            Log::error('Inquiry email failed: ' . $e->getMessage());

            return response()->json([
                'message' => 'There was an issue sending your inquiry. Please try again later.',
            ], 500);
        }

        return response()->json(['message' => 'Your inquiry has been sent successfully!']);
    }
}
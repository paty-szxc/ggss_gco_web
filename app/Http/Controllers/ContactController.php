<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'services_needed' => 'nullable|string|max:255',
            'purpose' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'contact_no' => 'nullable|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_name' => 'required|name|max:255',
            'title' => 'required|string|in:yes,no',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png,zip|max:102400', // 100MB limit
        ]);

        $attachmentPath = null;
        $attachmentName = null;
        $mimeType = null;
        
        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $attachmentPath = $file->getRealPath();
            $attachmentName = $file->getClientOriginalName();
            $mimeType = $file->getMimeType();
        }

        try{
            Mail::to(env('MAIL_FROM_ADDRESS', 'info@yourdomain.com'))->send(new InquiryMail($validatedData, $attachmentPath, $attachmentName, $mimeType));
            return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
        }
        catch(\Exception $e){
            Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['email' => 'There was an issue sending your inquiry. Details: ' . $e->getMessage()]);
        }
    }
}

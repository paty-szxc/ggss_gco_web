<x-mail::message>
# New Inquiry Received

You have received a new inquiry from your website.

**Services Needed:** {{ $inquiryData['services_needed'] ?? 'N/A' }}

**Purpose:** {{ $inquiryData['purpose'] ?? 'N/A' }}

**Contact No:** {{ $inquiryData['contact_no'] ?? 'N/A' }}

**Attachment:** {{ $inquiryData['attachment'] ?? 'N/A' }}

**Email:** {{ $inquiryData['email'] }}

<x-mail::panel>
Please reply directly to this email to contact the sender.
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

@component('mail::message')
# New website inquiry

- **Name of client:** {{ $inquiryData['client_name'] }}
- **Email:** {{ $inquiryData['client_email'] }}
- **Contact no.:** {{ $inquiryData['contact_no'] }}
- **Services needed:** {{ implode(', ', $inquiryData['services_needed']) }}
- **Purpose:** {{ $inquiryData['purpose'] }}
- **Area:** {{ $inquiryData['area'] }}
- **Location:** {{ $inquiryData['location'] }}
- **Titled:** {{ $inquiryData['title'] }}
@if (!empty($attachmentNames))
- **Attachments:** {{ implode(', ', $attachmentNames) }}
@endif

Press Reply to write back to the client directly.
@endcomponent
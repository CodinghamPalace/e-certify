<x-mail::message>
# Your E-Certificate is Ready!

Dear **{{ $name }}**,

Thank you for participating in **{{ $eventTitle }}** conducted by the Department of Information and Communications Technology (DICT) Quezon 4A.

We are pleased to inform you that your certificate of participation has been generated and is attached to this email.

<x-mail::panel>
**Event:** {{ $eventTitle }}  
**Participant:** {{ $name }}
</x-mail::panel>

You can verify the authenticity of this certificate by scanning the QR code printed on it.

If you have any questions or did not receive the attachment, please contact our support team.

Best regards,  
**DICT Quezon 4A**

<x-mail::subcopy>
This is an automated message from the e-Certify System. Please do not reply to this email.
</x-mail::subcopy>
</x-mail::message>

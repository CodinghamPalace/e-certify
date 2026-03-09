<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify Your Email Address</title>
</head>
<body style="margin:0;padding:24px;background-color:#ffffff;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;color:#333333;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:640px;margin:0 auto;border:1px solid #e0e7ef;border-radius:12px;box-shadow:0 6px 24px rgba(13,71,161,0.08);">
        <tr>
            <td style="padding:32px 32px 24px 32px;text-align:center;border-bottom:1px solid #e0e7ef;background:linear-gradient(120deg,#ffffff 0%,#e3f2fd 100%);">
                <img src="https://dict.gov.ph/wp-content/uploads/2020/11/DICT-Logo.png" alt="DICT Logo" width="72" height="72" style="margin-bottom:12px;" />
                <div style="font-size:18px;font-weight:600;color:#0d47a1;">Department of Information and Communications Technology</div>
                <div style="font-size:15px;color:#1976d2;margin-top:4px;">{{ $systemName ?? config('app.name', 'e-Certify System') }}</div>
            </td>
        </tr>
        <tr>
            <td style="padding:32px;">
                <div style="font-size:20px;font-weight:600;margin-bottom:12px;color:#0d47a1;">Verify Your Email Address</div>
                <p style="margin:0 0 16px 0;line-height:1.6;">
                    Dear User,
                </p>
                <p style="margin:0 0 16px 0;line-height:1.6;">
                    Thank you for registering in the e-Certify System of the Department of Information and Communications Technology (DICT) Quezon 4A.
                    To activate your account, please verify your email address by clicking the button below.
                </p>
                <p style="margin:0 0 20px 0;line-height:1.6;">
                    This verification link will expire in {{ $expiresInMinutes }} minutes for security purposes.
                </p>
                <div style="text-align:center;margin:32px 0;">
                    <a href="{{ $verificationUrl }}" style="background-color:#0d47a1;color:#ffffff;text-decoration:none;padding:14px 32px;border-radius:999px;font-weight:600;display:inline-block;">Verify Email Address</a>
                </div>
                <p style="margin:0 0 16px 0;line-height:1.6;">
                    If the button above does not work, copy and paste the link below into your browser:
                </p>
                <p style="margin:0 0 24px 0;line-height:1.6;word-break:break-all;">
                    <a href="{{ $rawUrl ?? $verificationUrl }}" style="color:#1976d2;text-decoration:none;">{{ $rawUrl ?? $verificationUrl }}</a>
                </p>
                <p style="margin:0 0 16px 0;line-height:1.6;">
                    If you did not create this account, you may safely ignore this email and your registration will remain inactive.
                </p>
            </td>
        </tr>
        <tr>
            <td style="padding:24px 32px;background-color:#f6f8fc;border-top:1px solid #e0e7ef;text-align:center;font-size:12px;line-height:1.6;color:#5f6b7a;">
                This is an automated message from the e-Certify System of the Department of Information and Communications Technology (DICT).<br />
                Please do not reply to this email.
            </td>
        </tr>
    </table>
</body>
</html>

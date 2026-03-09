<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyEmailNotification extends BaseVerifyEmail
{
    /**
     * Build the mail representation of the notification using the official template.
     */
    protected function buildMailMessage($url): MailMessage
    {
        $expiresInMinutes = (int) config('auth.verification.expire', 60);

        return (new MailMessage)
            ->subject('Verify Your Email Address – e-Certify System')
            ->view('mail.verify-email', [
                'verificationUrl' => $url,
                'expiresInMinutes' => $expiresInMinutes,
                'systemName' => 'e-Certify System',
                'rawUrl' => $url,
            ]);
    }
}

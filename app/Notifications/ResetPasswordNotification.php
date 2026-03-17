<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as BaseResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends BaseResetPassword
{
    /**
     * Build the password reset email with the DICT template.
     */
    protected function buildMailMessage($url): MailMessage
    {
        $expiresInMinutes = config('auth.passwords.users.expire', 30);

        return (new MailMessage)
            ->subject('Password Reset Request – e-Certify')
            ->view('mail.password-reset', [
                'resetUrl' => $url,
                'expiresInMinutes' => $expiresInMinutes,
                'systemName' => 'DICT e-Certify System',
                'rawUrl' => $url,
            ]);
    }
}

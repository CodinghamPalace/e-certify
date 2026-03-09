<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\RateLimiter;
use Laravel\Fortify\Contracts\EmailVerificationNotificationSentResponse;
use Laravel\Fortify\Http\Responses\RedirectAsIntended;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification with additional throttling.
     */
    public function store(Request $request)
    {
        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return $request->wantsJson()
                ? new JsonResponse('', 204)
                : app(RedirectAsIntended::class, ['name' => 'email-verification']);
        }

        $minuteKey = $this->minuteKey($user->getKey());
        $maxKey = $this->maxKey($user->getKey());

        $maxAttempts = (int) config('auth.verification.max_attempts', 5);
        $lockSeconds = (int) config('auth.verification.lock_seconds', 3600);

        if (RateLimiter::tooManyAttempts($maxKey, $maxAttempts)) {
            $retrySeconds = RateLimiter::availableIn($maxKey);

            return back()->with([
                'status' => 'verification-maxed',
                'verification_available_in' => $retrySeconds,
            ]);
        }

        if (RateLimiter::tooManyAttempts($minuteKey, 1)) {
            $retrySeconds = RateLimiter::availableIn($minuteKey);

            return back()->with([
                'status' => 'verification-throttled',
                'verification_retry_after' => $retrySeconds,
            ]);
        }

        RateLimiter::hit($minuteKey, 60);
        RateLimiter::hit($maxKey, $lockSeconds);

        $user->sendEmailVerificationNotification();

        return app(EmailVerificationNotificationSentResponse::class);
    }

    private function minuteKey(int|string $id): string
    {
        return 'verify-email:minute:'.$id;
    }

    private function maxKey(int|string $id): string
    {
        return 'verify-email:max:'.$id;
    }
}

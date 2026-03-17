<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\FailedPasswordResetLinkRequestResponse;
use Laravel\Fortify\Contracts\RequestPasswordResetLinkViewResponse;
use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\SendPasswordResetLinkRequest;

class PasswordResetLinkController extends Controller
{
    public function create(Request $request): RequestPasswordResetLinkViewResponse
    {
        return app(RequestPasswordResetLinkViewResponse::class);
    }

    public function store(SendPasswordResetLinkRequest $request): Responsable
    {
        $key = $this->throttleKey($request);

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            $message = __('passwords.rate_limit', [
                'minutes' => max(1, (int) ceil($seconds / 60)),
            ]);

            // Wrap the redirect in a Responsable-compatible response
            return app(FailedPasswordResetLinkRequestResponse::class, [
                'status' => $message,
            ]);
        }

        RateLimiter::hit($key, 3600);

        if (config('fortify.lowercase_usernames') && $request->has(Fortify::email())) {
            $request->merge([
                Fortify::email() => Str::lower($request->{Fortify::email()}),
            ]);
        }

        $status = $this->broker()->sendResetLink(
            $request->only(Fortify::email())
        );

        return $status === Password::RESET_LINK_SENT
            ? app(SuccessfulPasswordResetLinkRequestResponse::class, ['status' => $status])
            : app(FailedPasswordResetLinkRequestResponse::class, ['status' => $status]);
    }

    protected function broker(): PasswordBroker
    {
        return Password::broker(config('fortify.passwords'));
    }

    private function throttleKey(SendPasswordResetLinkRequest $request): string
    {
        $email = Str::lower((string) $request->input(Fortify::email()));

        return 'password-reset:'.$email.'|'.$request->ip();
    }
}

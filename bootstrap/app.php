<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (InvalidSignatureException $exception, Request $request) {
            if (! $request->is('email/verify*')) {
                return null;
            }

            if ($request->user()) {
                return redirect()->route('verification.notice')
                    ->with('status', 'verification-link-expired');
            }

            return redirect()->route('login')
                ->withErrors([
                    'email' => __('This verification link is invalid or has expired. Please log in and request a new verification email.'),
                ]);
        });
    })->create();

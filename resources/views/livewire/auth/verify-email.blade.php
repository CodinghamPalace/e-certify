@php
    $throttled = session('status') === 'verification-throttled';
    $maxedOut  = session('status') === 'verification-maxed';
    $expired   = session('status') === 'verification-link-expired';
@endphp

<x-layouts::auth :title="__('Verify your email')">
    <div class="mt-2">
        @if ($expired)
            <div class="login-alert alert alert-danger d-flex align-items-center mb-3" role="alert">
                <i class="bi bi-clock-history me-2"></i>
                {{ __('This verification link is invalid or has expired. Please request a new verification email below.') }}
            </div>
        @endif

        @if (session('status') == 'verification-link-sent')
            <div class="login-alert alert alert-success d-flex align-items-center mb-3" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ __('A new verification link has been sent to your email address.') }}
            </div>
        @elseif ($throttled)
            <div class="login-alert alert alert-warning d-flex align-items-center mb-3" role="alert">
                <i class="bi bi-hourglass-split me-2"></i>
                {{ __('For security, you can request another email once every minute. Please try again in :seconds seconds.', ['seconds' => session('verification_retry_after', 60)]) }}
            </div>
        @elseif ($maxedOut)
            <div class="login-alert alert alert-danger d-flex align-items-center mb-3" role="alert">
                <i class="bi bi-shield-exclamation me-2"></i>
                {{ __('Maximum resend attempts reached. Please wait :minutes minutes before trying again.', ['minutes' => max(1, ceil((session('verification_available_in', 60)) / 60))]) }}
            </div>
        @endif

        <p class="text-center" style="font-size:.93rem;color:#334155;line-height:1.6;margin-bottom:10px;">
            {{ __('We sent a secure link to :email. Please verify your email within 60 minutes to activate your admin access.', ['email' => auth()->user()->email]) }}
        </p>
        <p class="text-center" style="font-size:.84rem;color:#475569;line-height:1.6;margin-bottom:6px;">
            {{ __('Didn\'t get it? Check your spam folder or request another message below.') }}
        </p>
        <p class="text-center" style="font-size:.78rem;color:#64748b;line-height:1.5;margin-bottom:18px;">
            {{ __('You can request a maximum of :count secure links per hour.', ['count' => config('auth.verification.max_attempts')]) }}
        </p>

        <form method="POST" action="{{ route('verification.send') }}" novalidate id="resendVerificationForm">
            @csrf
            <button type="submit" class="btn-login" id="resendBtn" data-test="resend-verification" {{ ($throttled || $maxedOut) ? 'disabled' : '' }}>
                <i class="bi bi-envelope-arrow-up-fill"></i>
                <span>{{ __('Resend verification email') }}</span>
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-2">
            @csrf
            <button type="submit" class="btn-logout" data-test="logout-button">
                <i class="bi bi-box-arrow-right"></i>
                <span>{{ __('Log out') }}</span>
            </button>
        </form>

        <div id="verificationExpiredToast" style="display:none;position:fixed;bottom:32px;left:50%;transform:translateX(-50%);background:#b42318;color:#fff;padding:14px 24px;border-radius:12px;font-size:.84rem;font-weight:500;box-shadow:0 8px 32px rgba(180,35,24,.35);z-index:9999;max-width:420px;width:90%;text-align:center;animation:slideUp .3s ease;">
            <i class="bi bi-clock-history me-2"></i>
            {{ __('Verification link expired. Please click "Resend verification email" to get a new secure link.') }}
        </div>

        <style>
            .btn-logout {
                width: 100%;
                padding: 12px;
                background: #dc3545;
                color: #fff;
                border: none;
                border-radius: 9px;
                font-size: .9rem;
                font-weight: 600;
                letter-spacing: .02em;
                cursor: pointer;
                transition: background .2s, box-shadow .2s, transform .1s;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
            }
            .btn-logout:hover {
                background: #b42318;
                box-shadow: 0 4px 16px rgba(180,35,24,.3);
            }
            .btn-logout:active {
                transform: scale(.98);
            }
            @keyframes slideUp {
                from { opacity:0; transform:translateX(-50%) translateY(16px); }
                to   { opacity:1; transform:translateX(-50%) translateY(0); }
            }
            @keyframes spin {
                to { transform: rotate(360deg); }
            }
            .btn-spinner {
                display: inline-block;
                width: 15px;
                height: 15px;
                border: 2px solid rgba(255,255,255,.4);
                border-top-color: #fff;
                border-radius: 50%;
                animation: spin .7s linear infinite;
                vertical-align: middle;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('resendVerificationForm');
                const resendBtn = document.getElementById('resendBtn');

                if (form && resendBtn && !resendBtn.disabled) {
                    form.addEventListener('submit', function () {
                        resendBtn.disabled = true;
                        resendBtn.innerHTML = '<span class="btn-spinner"></span><span style="margin-left:8px;">Sending...</span>';
                    });
                }

                @if ($expired)
                    const toast = document.getElementById('verificationExpiredToast');
                    if (toast) {
                        toast.style.display = 'block';
                        setTimeout(function () {
                            toast.style.opacity = '0';
                            toast.style.transition = 'opacity .4s ease';
                            setTimeout(function () {
                                toast.style.display = 'none';
                            }, 400);
                        }, 6000);
                    }
                @endif
            });
        </script>
    </div>
</x-layouts::auth>

<x-layouts::auth :title="__('Reset password')">
    @if ($errors->any())
        <div class="login-alert alert alert-danger d-flex align-items-center mb-3" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}" novalidate id="resetPasswordForm">
        @csrf

        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <input type="hidden" name="email" value="{{ request('email') }}">

        <div class="mb-1">
            <label class="form-label" for="resetEmail">Email</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-envelope-fill input-icon"></i>
            <input
                type="email"
                id="resetEmail"
                class="form-control-custom"
                value="{{ request('email') }}"
                autocomplete="email"
                readonly
                aria-readonly="true"
            />
        </div>

        <div class="mb-1">
            <label class="form-label" for="resetPassword">Password</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-lock-fill input-icon"></i>
            <input
                type="password"
                id="resetPassword"
                name="password"
                class="form-control-custom @error('password') is-invalid @enderror"
                placeholder="Password"
                autocomplete="new-password"
                style="padding-right: 42px;"
                required
            />
            <button type="button" class="toggle-pw" id="toggleResetPw" aria-label="Show/hide password" tabindex="-1">
                <i class="bi bi-eye-fill" id="toggleResetPwIcon"></i>
            </button>
        </div>
        <p style="font-size:.75rem;color:#64748b;margin:-10px 0 14px 0;">
            Minimum 8 characters, with at least 1 uppercase letter and 1 special symbol.
        </p>

        <div class="mb-1">
            <label class="form-label" for="resetPasswordConfirmation">Confirm password</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-lock-fill input-icon"></i>
            <input
                type="password"
                id="resetPasswordConfirmation"
                name="password_confirmation"
                class="form-control-custom"
                placeholder="Confirm password"
                autocomplete="new-password"
                style="padding-right: 42px;"
                required
            />
            <button type="button" class="toggle-pw" id="toggleResetPwConfirm" aria-label="Show/hide confirm password" tabindex="-1">
                <i class="bi bi-eye-fill" id="toggleResetPwConfirmIcon"></i>
            </button>
        </div>

        <button type="submit" class="btn-login mt-2" id="resetPasswordBtn" data-test="reset-password-button">
            <i class="bi bi-arrow-repeat"></i>
            <span>Reset password</span>
        </button>
    </form>

    <div class="security-note mt-3">
        <a href="{{ route('login') }}" class="forgot-link">
            <i class="bi bi-arrow-left me-1"></i>Back to login
        </a>
    </div>

    <style>
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
            function wireToggle(buttonId, inputId, iconId) {
                const button = document.getElementById(buttonId);
                const input = document.getElementById(inputId);
                const icon = document.getElementById(iconId);

                if (!button || !input || !icon) {
                    return;
                }

                button.addEventListener('click', function () {
                    const hidden = input.type === 'password';
                    input.type = hidden ? 'text' : 'password';
                    icon.className = hidden ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
                });
            }

            wireToggle('toggleResetPw', 'resetPassword', 'toggleResetPwIcon');
            wireToggle('toggleResetPwConfirm', 'resetPasswordConfirmation', 'toggleResetPwConfirmIcon');

            const form = document.getElementById('resetPasswordForm');
            const submitBtn = document.getElementById('resetPasswordBtn');

            if (form && submitBtn) {
                form.addEventListener('submit', function () {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="btn-spinner"></span><span style="margin-left:8px;">Resetting...</span>';
                });
            }
        });
    </script>
</x-layouts::auth>

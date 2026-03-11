<x-layouts::auth :title="__('Forgot password — e-Certify')">

    {{-- Validation errors --}}
    @if ($errors->any())
        <div class="login-alert alert alert-danger d-flex align-items-center mb-3" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            {{ $errors->first() }}
        </div>
    @endif

    <p style="font-size:.84rem;color:#475569;margin-bottom:20px;">
        Enter your registered email address and we will send you a reset link.
    </p>

    <form method="POST" action="{{ route('password.email') }}" novalidate id="forgotForm">
        @csrf

        {{-- Email --}}
        <div class="mb-1">
            <label class="form-label" for="forgotEmail">Email Address</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-envelope-fill input-icon"></i>
            <input
                type="email"
                id="forgotEmail"
                name="email"
                class="form-control-custom @error('email') is-invalid @enderror"
                placeholder="admin@dict.gov.ph"
                value="{{ old('email') }}"
                autocomplete="email"
                autofocus
                required
            />
        </div>

        <button type="submit" class="btn-login mt-2" id="resetBtn">
            <i class="bi bi-send-fill"></i>
            <span>Send Reset Link</span>
        </button>
    </form>

    <div class="security-note mt-3">
        <a href="{{ route('login') }}" class="forgot-link">
            <i class="bi bi-arrow-left me-1"></i>Return to login
        </a>
    </div>

    {{-- Toast notification --}}
    <div id="resetToast" style="
        display:none;
        position:fixed;
        bottom:32px;
        left:50%;
        transform:translateX(-50%);
        background:#003087;
        color:#fff;
        padding:14px 24px;
        border-radius:12px;
        font-size:.84rem;
        font-weight:500;
        box-shadow:0 8px 32px rgba(0,48,135,.35);
        z-index:9999;
        max-width:340px;
        width:90%;
        text-align:center;
        animation:slideUp .3s ease;
    ">
        <i class="bi bi-envelope-check-fill me-2"></i>
        If your email exists in our system, a password reset link has been sent. Please check your inbox.
    </div>

    <style>
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
            document.getElementById('forgotForm').addEventListener('submit', function () {
                const btn = document.getElementById('resetBtn');
                btn.disabled = true;
                btn.innerHTML = '<span class="btn-spinner"></span><span style="margin-left:8px;">Sending…</span>';
            });
        });
    </script>

    @if (session('status'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toast = document.getElementById('resetToast');
            toast.style.display = 'block';
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transition = 'opacity .4s ease';
                setTimeout(() => toast.style.display = 'none', 400);
            }, 5000);
        });
    </script>
    @endif

</x-layouts::auth>

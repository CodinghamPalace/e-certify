<x-layouts::auth :title="__('Admin Login — e-Certify | DICT Quezon 4A')">

    {{-- Session status (e.g. password reset success) --}}
    @if (session('status'))
        <div class="login-alert alert alert-success d-flex align-items-center mb-3" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('status') }}
        </div>
    @endif

    {{-- Validation error alert --}}
    @if ($errors->any())
        <div class="login-alert alert alert-danger d-flex align-items-center mb-3" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.store') }}" novalidate>
        @csrf

        {{-- Email --}}
        <div class="mb-1">
            <label class="form-label" for="adminEmail">Email Address</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-envelope-fill input-icon"></i>
            <input
                type="email"
                id="adminEmail"
                name="email"
                class="form-control-custom @error('email') is-invalid @enderror"
                placeholder="admin@dict.gov.ph"
                value="{{ old('email') }}"
                autocomplete="email"
                autofocus
                required
            />
        </div>

        {{-- Password --}}
        <div class="mb-1">
            <label class="form-label" for="adminPassword">Password</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-lock-fill input-icon"></i>
            <input
                type="password"
                id="adminPassword"
                name="password"
                class="form-control-custom @error('password') is-invalid @enderror"
                placeholder="Enter your password"
                autocomplete="current-password"
                style="padding-right: 42px;"
                required
            />
            <button
                type="button"
                class="toggle-pw"
                id="togglePw"
                aria-label="Show/hide password"
                tabindex="-1"
            >
                <i class="bi bi-eye-fill" id="togglePwIcon"></i>
            </button>
        </div>

        {{-- Remember me / Forgot password --}}
        <div class="row-meta">
            <label>
                <input
                    type="checkbox"
                    name="remember"
                    id="rememberMe"
                    {{ old('remember') ? 'checked' : '' }}
                />
                Remember me
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-link">Forgot password?</a>
            @endif
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn-login" id="loginBtn">
            <i class="bi bi-shield-lock-fill"></i>
            <span>Sign In</span>
        </button>

    </form>

    {{-- Security note --}}
    <div class="security-note">
        <i class="bi bi-shield-check-fill"></i>
        Authorized DICT personnel only &bull; All sessions are logged
    </div>

    {{-- Register link --}}
    @if (Route::has('register'))
        <div class="security-note mt-2">
            New admin?&nbsp;<a href="{{ route('register') }}" class="forgot-link">Create an account</a>
        </div>
    @endif

</x-layouts::auth>


<x-layouts::auth :title="__('Admin Registration — e-Certify | DICT Quezon 4A')">

    {{-- Validation error alert --}}
    @if ($errors->any())
        <div class="login-alert alert alert-danger d-flex align-items-center mb-3" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('register.store') }}" novalidate>
        @csrf

        {{-- Full Name --}}
        <div class="mb-1">
            <label class="form-label" for="regName">Full Name</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-person-fill input-icon"></i>
            <input
                type="text"
                id="regName"
                name="name"
                class="form-control-custom @error('name') is-invalid @enderror"
                placeholder="Juan dela Cruz"
                value="{{ old('name') }}"
                autocomplete="name"
                autofocus
                required
            />
        </div>

        {{-- Email --}}
        <div class="mb-1">
            <label class="form-label" for="regEmail">Email Address</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-envelope-fill input-icon"></i>
            <input
                type="email"
                id="regEmail"
                name="email"
                class="form-control-custom @error('email') is-invalid @enderror"
                placeholder="admin@dict.gov.ph"
                value="{{ old('email') }}"
                autocomplete="email"
                required
            />
        </div>

        {{-- Password --}}
        <div class="mb-1">
            <label class="form-label" for="regPassword">Password</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-lock-fill input-icon"></i>
            <input
                type="password"
                id="regPassword"
                name="password"
                class="form-control-custom @error('password') is-invalid @enderror"
                placeholder="Create a strong password"
                autocomplete="new-password"
                style="padding-right: 42px;"
                required
            />
            <button
                type="button"
                class="toggle-pw"
                id="togglePwReg"
                aria-label="Show/hide password"
                tabindex="-1"
            >
                <i class="bi bi-eye-fill" id="togglePwRegIcon"></i>
            </button>
        </div>

        {{-- Confirm Password --}}
        <div class="mb-1">
            <label class="form-label" for="regPasswordConfirm">Confirm Password</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-lock-fill input-icon"></i>
            <input
                type="password"
                id="regPasswordConfirm"
                name="password_confirmation"
                class="form-control-custom @error('password_confirmation') is-invalid @enderror"
                placeholder="Re-enter your password"
                autocomplete="new-password"
                style="padding-right: 42px;"
                required
            />
            <button
                type="button"
                class="toggle-pw"
                id="togglePwConfirm"
                aria-label="Show/hide password"
                tabindex="-1"
            >
                <i class="bi bi-eye-fill" id="togglePwConfirmIcon"></i>
            </button>
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn-login mt-2">
            <i class="bi bi-person-plus-fill"></i>
            <span>Create Admin Account</span>
        </button>

    </form>

    {{-- Back to login --}}
    <div class="security-note mt-3">
        Already have an account?&nbsp;
        <a href="{{ route('login') }}" class="forgot-link">Sign in</a>
    </div>

    <script>
      [['togglePwReg', 'regPassword', 'togglePwRegIcon'],
       ['togglePwConfirm', 'regPasswordConfirm', 'togglePwConfirmIcon']]
        .forEach(([btnId, inputId, iconId]) => {
          const btn   = document.getElementById(btnId);
          const input = document.getElementById(inputId);
          const icon  = document.getElementById(iconId);
          if (btn && input) {
            btn.addEventListener('click', () => {
              const hidden = input.type === 'password';
              input.type   = hidden ? 'text' : 'password';
              icon.className = hidden ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
            });
          }
        });
    </script>

</x-layouts::auth>


        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf
            <!-- Name -->
            <flux:input
                name="name"
                :label="__('Name')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
            />

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <flux:input
                name="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                viewable
            />

            <!-- Confirm Password -->
            <flux:input
                name="password_confirmation"
                :label="__('Confirm password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
                viewable
            />

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>

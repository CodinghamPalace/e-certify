@php
    $throttled = session('status') === 'verification-throttled';
    $maxedOut  = session('status') === 'verification-maxed';
@endphp

<x-layouts::auth :title="__('Verify your email')">
    <div class="mt-4 flex flex-col gap-6">
        <flux:text class="text-center text-base">
            {{ __('We sent a secure link to :email. Please verify your email within 60 minutes to activate your admin access.', ['email' => auth()->user()->email]) }}
        </flux:text>
        <flux:text class="text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Didn\'t get it? Check your spam folder or request another message below.') }}
        </flux:text>
        <flux:text class="text-center text-xs text-zinc-500 dark:text-zinc-500">
            {{ __('You can request a maximum of :count secure links per hour.', ['count' => config('auth.verification.max_attempts')]) }}
        </flux:text>

        @if (session('status') == 'verification-link-sent')
            <flux:text class="text-center font-medium !dark:text-green-400 !text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </flux:text>
        @elseif ($throttled)
            <div class="rounded-md border border-amber-500/50 bg-amber-50 px-4 py-3 text-center text-sm text-amber-800 dark:border-amber-300/40 dark:bg-amber-900/30 dark:text-amber-200">
                {{ __('For security, you can request another email once every minute. Please try again in :seconds seconds.', ['seconds' => session('verification_retry_after', 60)]) }}
            </div>
        @elseif ($maxedOut)
            <div class="rounded-md border border-rose-500/50 bg-rose-50 px-4 py-3 text-center text-sm text-rose-800 dark:border-rose-300/40 dark:bg-rose-900/30 dark:text-rose-100">
                {{ __('Maximum resend attempts reached. Please wait :minutes minutes before trying again.', ['minutes' => max(1, ceil((session('verification_available_in', 60)) / 60))]) }}
            </div>
        @endif

        <div class="flex flex-col items-center justify-between space-y-3">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full flex flex-col gap-3">
                @csrf
                <flux:button
                    type="submit"
                    variant="primary"
                    class="w-full"
                    :disabled="$throttled || $maxedOut"
                    data-test="resend-verification"
                >
                    {{ __('Resend verification email') }}
                </flux:button>
                <flux:button
                    type="submit"
                    variant="outline"
                    class="w-full"
                    :disabled="$throttled || $maxedOut"
                >
                    {{ __('Send a fresh secure link') }}
                </flux:button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <flux:button variant="ghost" type="submit" class="text-sm cursor-pointer" data-test="logout-button">
                    {{ __('Log out') }}
                </flux:button>
            </form>
        </div>
    </div>
</x-layouts::auth>

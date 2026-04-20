<?php # [BlazeFolded]:{flux::text}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/text.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::text}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/text.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::text}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/text.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::text}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/text.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::button}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::button}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1772508755} ?>
<?php
    $throttled = session('status') === 'verification-throttled';
    $maxedOut  = session('status') === 'verification-maxed';
?>

<?php if (isset($component)) { $__componentOriginal08b8a564843783787e0bee3357e24f38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08b8a564843783787e0bee3357e24f38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::auth','data' => ['title' => __('Verify your email')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Verify your email'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="mt-4 flex flex-col gap-6">
        <p class="[:where(&amp;)]:font-normal [:where(&amp;)]:text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70 text-center text-base" data-flux-text ><?php echo e(__('We sent a secure link to :email. Please verify your email within 60 minutes to activate your admin access.', ['email' => auth()->user()->email])); ?></p>
        <p class="[:where(&amp;)]:font-normal [:where(&amp;)]:text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70 text-center text-sm text-zinc-600 dark:text-zinc-400" data-flux-text ><?php echo e(__('Didn\'t get it? Check your spam folder or request another message below.')); ?></p>
        <p class="[:where(&amp;)]:font-normal [:where(&amp;)]:text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70 text-center text-xs text-zinc-500 dark:text-zinc-500" data-flux-text ><?php echo e(__('You can request a maximum of :count secure links per hour.', ['count' => config('auth.verification.max_attempts')])); ?></p>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('status') == 'verification-link-sent'): ?>
            <p class="[:where(&amp;)]:font-normal [:where(&amp;)]:text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70 text-center font-medium !dark:text-green-400 !text-green-600" data-flux-text ><?php echo e(__('A new verification link has been sent to the email address you provided during registration.')); ?></p>
        <?php elseif($throttled): ?>
            <div class="rounded-md border border-amber-500/50 bg-amber-50 px-4 py-3 text-center text-sm text-amber-800 dark:border-amber-300/40 dark:bg-amber-900/30 dark:text-amber-200">
                <?php echo e(__('For security, you can request another email once every minute. Please try again in :seconds seconds.', ['seconds' => session('verification_retry_after', 60)])); ?>

            </div>
        <?php elseif($maxedOut): ?>
            <div class="rounded-md border border-rose-500/50 bg-rose-50 px-4 py-3 text-center text-sm text-rose-800 dark:border-rose-300/40 dark:bg-rose-900/30 dark:text-rose-100">
                <?php echo e(__('Maximum resend attempts reached. Please wait :minutes minutes before trying again.', ['minutes' => max(1, ceil((session('verification_available_in', 60)) / 60))])); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="flex flex-col items-center justify-between space-y-3">
            <form method="POST" action="<?php echo e(route('verification.send')); ?>" class="w-full flex flex-col gap-3">
                <?php echo csrf_field(); ?>
                <button type="submit" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg ps-4 pe-4 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)] text-[var(--color-accent-foreground)] border border-black/10 dark:border-0 shadow-[inset_0px_1px_--theme(--color-white/.2)] [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-s-[1px] [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[color-mix(in_srgb,var(--color-accent-foreground),transparent_85%)]   w-full" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target" <?php if (($__blazeAttr = $throttled || $maxedOut) !== false && !is_null($__blazeAttr)): ?>disabled="<?php echo e($__blazeAttr === true ? 'disabled' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?> data-test="resend-verification">
        <?php echo e(__('Resend verification email')); ?>

    </button>

                <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'); ?>
<?php require_once $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'; ?>
<?php $__attrs20529d26fecb8aab992b100aa16b77df = ['type' => 'submit','variant' => 'secondary','class' => 'w-full','disabled' => $throttled || $maxedOut]; ?>
<?php $__blaze->pushData($__attrs20529d26fecb8aab992b100aa16b77df); ?>
<?php $slots20529d26fecb8aab992b100aa16b77df = []; ?>
<?php ob_start(); ?>
                    <?php echo e(__('Send a fresh secure link')); ?>

                <?php $slots20529d26fecb8aab992b100aa16b77df['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots20529d26fecb8aab992b100aa16b77df); ?>
<?php _20529d26fecb8aab992b100aa16b77df($__blaze, $__attrs20529d26fecb8aab992b100aa16b77df, $slots20529d26fecb8aab992b100aa16b77df, ['disabled'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
            </form>

            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg ps-4 pe-4 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white    *:transition-opacity [&amp;[disabled]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[disabled]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[disabled]]:pointer-events-none  text-sm cursor-pointer" data-flux-button="data-flux-button" data-test="logout-button">
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-4 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
        
            </div>
        
        
                    
            
            <span><?php echo e(__('Log out')); ?></span>
    </button>

            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $attributes = $__attributesOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__attributesOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $component = $__componentOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__componentOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\resources\views\livewire\auth\verify-email.blade.php ENDPATH**/ ?>
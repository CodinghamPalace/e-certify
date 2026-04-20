<?php # [BlazeFolded]:{flux::heading}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::subheading}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/subheading.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::checkbox.indicator}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/indicator.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_726f1380ec9bf16808af11c2e6e3b102')):
function _726f1380ec9bf16808af11c2e6e3b102($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__awareDefaults = [ 'indicator' ];
$indicator = $__blaze->getConsumableData('indicator'); unset($attributes['indicator']);
unset($__awareDefaults);
?>

<?php
$__defaults = [
    'iconVariant' => 'micro',
    'description' => null,
    'indicator' => true,
    'accent' => true,
    'label' => null,
    'icon' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$indicator ??= $attributes['indicator'] ?? $__defaults['indicator']; unset($attributes['indicator']);
$accent ??= $attributes['accent'] ?? $__defaults['accent']; unset($attributes['accent']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
unset($__defaults);
?>

<?php

$iconClasses = Flux::classes()
    ->add('inline-block mt-0.5 text-zinc-400 [ui-checkbox[data-checked]_&]:text-zinc-800 dark:[ui-checkbox[data-checked]_&]:text-white')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-4' : '')
    ;

$classes = Flux::classes()
    ->add('relative flex justify-between gap-3 flex-1 p-4')
    ->add('rounded-lg shadow-xs')
    ->add('bg-white dark:bg-white/10 dark:hover:bg-white/15 dark:data-checked:bg-white/15')
    ->add('after:absolute after:-inset-px after:rounded-lg')
    ->add('border border-zinc-800/15 dark:border-white/10')
    ->add([
        '[--haze:color-mix(in_oklab,_var(--color-accent-content),_transparent_97.5%)]',
        '[--haze-border:color-mix(in_oklab,_var(--color-accent-content),_transparent_80%)]',
        '[--haze-light:color-mix(in_oklab,_var(--color-accent),_transparent_98%)]',
        'dark:[--haze:color-mix(in_oklab,_var(--color-accent-content),_transparent_90%)]',
    ])
    ->add(match ($accent) {
        true => [
            '[&:hover_[data-flux-checkbox-indicator]]:border-[var(--haze-border)] dark:[&:hover_[data-flux-checkbox-indicator]]:border-white/10',
            'hover:border-[var(--haze-border)] dark:hover:border-white/10',

            'data-checked:border-(--color-accent) hover:data-checked:border-(--color-accent) dark:data-checked:bg-white/15 ',
            'hover:after:bg-[var(--haze-light)] dark:hover:after:bg-white/[4%] data-checked:after:bg-(--haze) hover:data-checked:after:bg-(--haze)',
        ],
        false => [
            'data-checked:bg-zinc-50 dark:data-checked:bg-white/15 data-checked:border-zinc-800 dark:data-checked:border-white',
            'hover:bg-zinc-50 dark:hover:bg-white/15',
        ],
    })
    ->add('[&[disabled]]:opacity-50 dark:[&[disabled]]:opacity-75 [&[disabled]]:cursor-default [&[disabled]]:pointer-events-none')
    ;
?>




<ui-checkbox <?php echo e($attributes->class($classes)); ?> data-flux-control data-flux-checkbox-cards tabindex="-1" data-flux-field>
    <?php if ($label): ?>
        <div class="flex-1 flex gap-2">
            <?php if (is_string($icon) && $icon !== ''): ?>
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/0855732aafc6286059c5e718eea4a6e5.php'); ?>
<?php require_once $__blaze->compiledPath.'/0855732aafc6286059c5e718eea4a6e5.php'; ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _0855732aafc6286059c5e718eea4a6e5($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant', 'class'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            <?php elseif ($icon): ?>
                <?php echo e($icon); ?>

            <?php endif; ?>

            <div class="flex-1">
                <div class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-sm [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2" data-flux-heading><?php echo e($slot->isNotEmpty() ? $slot : $label); ?></div>


                <?php if ($description): ?>
                    <div class="text-xs [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70" data-flux-subheading>
    <?php echo e($description); ?>

</div>

                <?php endif; ?>
            </div>
        </div>

        <div class="shrink-0 size-[1.125rem] rounded-[.3rem] flex justify-center items-center text-sm text-zinc-700 dark:text-zinc-800 shadow-xs [ui-checkbox[disabled]_&amp;]:opacity-75 [ui-checkbox[data-checked][disabled]_&amp;]:opacity-50 [ui-checkbox[disabled]_&amp;]:shadow-none [ui-checkbox[data-checked]_&amp;]:shadow-none [ui-checkbox[data-indeterminate]_&amp;]:shadow-none [ui-checkbox[data-checked]:not([data-indeterminate])_&amp;&gt;svg:first-child]:block [ui-checkbox[data-indeterminate]_&amp;&gt;svg:last-child]:block border border-zinc-300 dark:border-white/10 [ui-checkbox[disabled]_&amp;]:border-zinc-200 dark:[ui-checkbox[disabled]_&amp;]:border-white/5 [ui-checkbox[data-checked]_&amp;]:border-transparent [ui-checkbox[data-indeterminate]_&amp;]:border-transparent [ui-checkbox[disabled][data-checked]_&amp;]:border-transparent [ui-checkbox[disabled][data-indeterminate]_&amp;]:border-transparent [print-color-adjust:exact] bg-white dark:bg-white/10 [ui-checkbox[data-checked]_&amp;]:bg-[var(--color-accent)] hover:[ui-checkbox[data-checked]_&amp;]:bg-(--color-accent) focus:[ui-checkbox[data-checked]_&amp;]:bg-(--color-accent) [ui-checkbox[data-indeterminate]_&amp;]:bg-[var(--color-accent)] hover:[ui-checkbox[data-indeterminate]_&amp;]:bg-(--color-accent) focus:[ui-checkbox[data-indeterminate]_&amp;]:bg-(--color-accent)" data-flux-checkbox-indicator>
    <svg class="shrink-0 [:where(&amp;)]:size-4 hidden text-[var(--color-accent-foreground)]" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd"/>
</svg>

            <svg class="shrink-0 [:where(&amp;)]:size-4 hidden text-[var(--color-accent-foreground)]" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z"/>
</svg>

        </div>

    <?php else: ?>
        <?php echo e($slot); ?>

    <?php endif; ?>
</ui-checkbox>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\checkbox\variants\cards.blade.php ENDPATH**/ ?>
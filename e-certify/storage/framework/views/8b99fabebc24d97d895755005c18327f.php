<?php # [BlazeFolded]:{flux::heading}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::subheading}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/subheading.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::radio.indicator}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/radio/indicator.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_8b99fabebc24d97d895755005c18327f')):
function _8b99fabebc24d97d895755005c18327f($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    ->add('inline-block mt-0.5 text-zinc-400 [ui-radio[data-checked]_&]:text-zinc-800 dark:[ui-radio[data-checked]_&]:text-white')
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
            '[&:hover_[data-flux-radio-indicator]]:border-[var(--haze-border)] dark:[&:hover_[data-flux-radio-indicator]]:border-white/10',
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




<ui-radio <?php echo e($attributes->class($classes)); ?> data-flux-control data-flux-radio-cards tabindex="-1" data-flux-field>
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

        <?php if ($indicator): ?>
            <div class="shrink-0 size-[1.125rem] rounded-full text-sm text-zinc-700 dark:text-zinc-800 shadow-xs [ui-radio[disabled]_&amp;]:opacity-75 [ui-radio[data-checked][disabled]_&amp;]:opacity-50 [ui-radio[disabled]_&amp;]:shadow-none [ui-radio[data-checked]_&amp;]:shadow-none flex justify-center items-center [ui-radio[data-checked]_&amp;&gt;div]:block border border-zinc-300 dark:border-white/10 [ui-radio[disabled]_&amp;]:border-zinc-200 dark:[ui-radio[disabled]_&amp;]:border-white/5 [ui-radio[data-checked]_&amp;]:border-transparent data-indeterminate:border-transparent [ui-radio[data-checked]_&amp;]:[ui-radio[disabled]_&amp;]:border-transparent data-indeterminate:border-transparent [print-color-adjust:exact] bg-white dark:bg-white/10 [ui-radio[data-checked]_&amp;]:bg-[var(--color-accent)] hover:[ui-radio[data-checked]_&amp;]:bg-(--color-accent) focus:[ui-radio[data-checked]_&amp;]:bg-(--color-accent)" data-flux-radio-indicator>
    <div class="hidden size-2 rounded-full bg-[var(--color-accent-foreground)]"></div>
</div>

        <?php endif; ?>
    <?php else: ?>
        <?php echo e($slot); ?>

    <?php endif; ?>
</ui-radio>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\radio\variants\cards.blade.php ENDPATH**/ ?>
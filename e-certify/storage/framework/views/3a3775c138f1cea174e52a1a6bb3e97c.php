<?php
if (!function_exists('_3a3775c138f1cea174e52a1a6bb3e97c')):
function _3a3775c138f1cea174e52a1a6bb3e97c($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'iconVariant' => 'mini',
    'iconTrailing' => null,
    'variant' => 'default',
    'disabled' => false,
    'indent' => false,
    'suffix' => null,
    'value' => null,
    'icon' => null,
    'kbd' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$disabled ??= $attributes['disabled'] ?? $__defaults['disabled']; unset($attributes['disabled']);
$indent ??= $attributes['indent'] ?? $__defaults['indent']; unset($attributes['indent']);
$suffix ??= $attributes['suffix'] ?? $__defaults['suffix']; unset($attributes['suffix']);
$value ??= $attributes['value'] ?? $__defaults['value']; unset($attributes['value']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
unset($__defaults);
?>

<?php
if ($kbd) $suffix = $kbd;

$iconClasses = Flux::classes()
    ->add('me-2')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$trailingIconClasses = Flux::classes()
    ->add('ms-auto')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$classes = Flux::classes()
    ->add('group flex items-center px-2 py-2 lg:py-1.5 w-full')
    ->add('rounded-md')
    ->add('text-start text-sm font-medium')
    ->add(match ($variant) {
        'danger' => [
            'text-zinc-800 hover:text-red-600 hover:bg-red-50 dark:text-white dark:hover:bg-red-400/20 dark:hover:text-red-400',
            '**:data-navmenu-icon:text-zinc-400 dark:**:data-navmenu-icon:text-white/60 [&:hover_[data-navmenu-icon]]:text-current',
        ],
        'default' => [
            'text-zinc-800 hover:bg-zinc-50 dark:text-white dark:hover:bg-zinc-600',
            '**:data-navmenu-icon:text-zinc-400 dark:**:data-navmenu-icon:text-white/60 [&:hover_[data-navmenu-icon]]:text-current',
        ]
    })
    ->add($disabled ? 'text-zinc-400' : '')
    ;
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/button-or-link.blade.php', $__blaze->compiledPath.'/ca934b3590aaef73dcdf79070fb76d93.php'); ?>
<?php require_once $__blaze->compiledPath.'/ca934b3590aaef73dcdf79070fb76d93.php'; ?>
<?php $__attrsca934b3590aaef73dcdf79070fb76d93 = ['attributes' => $attributes->class($classes),'data-flux-navmenu-item' => true]; ?>
<?php $__blaze->pushData($__attrsca934b3590aaef73dcdf79070fb76d93); ?>
<?php $slotsca934b3590aaef73dcdf79070fb76d93 = []; ?>
<?php ob_start(); ?>
    <?php if ($indent): ?>
        <div class="w-7"></div>
    <?php endif; ?>

    <?php if (is_string($icon) && $icon !== ''): ?>
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => $iconClasses, 'dataNavmenuIcon' => true]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/0855732aafc6286059c5e718eea4a6e5.php'); ?>
<?php require_once $__blaze->compiledPath.'/0855732aafc6286059c5e718eea4a6e5.php'; ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses,'data-navmenu-icon' => true]); ?>
<?php _0855732aafc6286059c5e718eea4a6e5($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses,'data-navmenu-icon' => true], [], ['icon', 'variant', 'class', 'data-navmenu-icon'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    <?php elseif ($icon): ?>
        <?php echo e($icon); ?>

    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if ($suffix): ?>
        <?php if (is_string($suffix)): ?>
            <div class="ms-auto opacity-50 text-xs">
                <?php echo e($suffix); ?>

            </div>
        <?php else: ?>
            <?php echo e($suffix); ?>

        <?php endif; ?>
    <?php endif; ?>

    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => $trailingIconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/0855732aafc6286059c5e718eea4a6e5.php'); ?>
<?php require_once $__blaze->compiledPath.'/0855732aafc6286059c5e718eea4a6e5.php'; ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $trailingIconClasses]); ?>
<?php _0855732aafc6286059c5e718eea4a6e5($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $trailingIconClasses], [], ['icon', 'variant', 'class'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    <?php elseif ($iconTrailing): ?>
        <?php echo e($iconTrailing); ?>

    <?php endif; ?>
<?php $slotsca934b3590aaef73dcdf79070fb76d93['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotsca934b3590aaef73dcdf79070fb76d93); ?>
<?php _ca934b3590aaef73dcdf79070fb76d93($__blaze, $__attrsca934b3590aaef73dcdf79070fb76d93, $slotsca934b3590aaef73dcdf79070fb76d93, ['attributes', 'data-flux-navmenu-item'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\navmenu\item.blade.php ENDPATH**/ ?>
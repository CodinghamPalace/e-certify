<?php
if (!function_exists('_0223aeaffd6e797697f6221da9eda6a6')):
function _0223aeaffd6e797697f6221da9eda6a6($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'); ?>
<?php require_once $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'; ?>
<?php $__attrs1a9a3fb2077fb855a54c2e2bd2577e74 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__blaze->pushData($__attrs1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php $slots1a9a3fb2077fb855a54c2e2bd2577e74 = []; ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $slots1a9a3fb2077fb855a54c2e2bd2577e74['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php _1a9a3fb2077fb855a54c2e2bd2577e74($__blaze, $__attrs1a9a3fb2077fb855a54c2e2bd2577e74, $slots1a9a3fb2077fb855a54c2e2bd2577e74, ['content', 'position', 'kbd'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\with-tooltip.blade.php ENDPATH**/ ?>
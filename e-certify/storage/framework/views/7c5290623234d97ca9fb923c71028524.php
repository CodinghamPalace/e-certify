<?php
if (!function_exists('_7c5290623234d97ca9fb923c71028524')):
function _7c5290623234d97ca9fb923c71028524($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$__defaults = [
    'animate' => null,
];
$animate ??= $attributes['animate'] ?? $__defaults['animate']; unset($attributes['animate']);
unset($__defaults);
?>

<div <?php echo e($attributes); ?> data-flux-skeleton-group>
    <?php echo e($slot); ?>

</div><?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\skeleton\group.blade.php ENDPATH**/ ?>
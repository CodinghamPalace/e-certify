<?php
if (!function_exists('_f6c2a0da50fe13453e48c3df41089f8a')):
function _f6c2a0da50fe13453e48c3df41089f8a($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'scrollable' => false,
    'variant' => null,
];
$scrollable ??= $attributes['scrollable'] ?? $__defaults['scrollable']; unset($attributes['scrollable']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('flex items-center gap-1 py-3')
    ->add($scrollable ? ['overflow-x-auto overflow-y-hidden'] : [])
    ;
?>

<nav <?php echo e($attributes->class($classes)); ?> data-flux-navbar>
    <?php echo e($slot); ?>

</nav>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\navbar\index.blade.php ENDPATH**/ ?>
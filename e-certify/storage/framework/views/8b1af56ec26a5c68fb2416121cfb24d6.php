<?php
if (!function_exists('_8b1af56ec26a5c68fb2416121cfb24d6')):
function _8b1af56ec26a5c68fb2416121cfb24d6($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$classes = Flux::classes([
    'flex items-center px-4 text-sm whitespace-nowrap',
    'text-zinc-800 dark:text-zinc-200',
    'bg-zinc-800/5 dark:bg-white/20',
    'border-zinc-200 dark:border-white/10',
    'rounded-e-lg',
    'border-e border-t border-b shadow-xs',
]);
?>

<div <?php echo e($attributes->class($classes)); ?> data-flux-input-group-suffix>
    <?php echo e($slot); ?>

</div>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\input\group\suffix.blade.php ENDPATH**/ ?>
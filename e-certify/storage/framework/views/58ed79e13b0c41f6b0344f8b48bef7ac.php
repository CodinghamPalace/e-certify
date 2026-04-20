<?php
if (!function_exists('_58ed79e13b0c41f6b0344f8b48bef7ac')):
function _58ed79e13b0c41f6b0344f8b48bef7ac($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$classes = Flux::classes()
    ->add('flex isolate')
    ->add('*:not-first:-ml-2 **:ring-white **:dark:ring-zinc-900')
    ->add('**:data-[slot=avatar]:ring-4 **:data-[slot=avatar]:data-[size=sm]:ring-2 **:data-[slot=avatar]:data-[size=xs]:ring-2')
    ;
?>

<div <?php echo e($attributes->class($classes)); ?>>
    <?php echo e($slot); ?>

</div>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\avatar\group.blade.php ENDPATH**/ ?>
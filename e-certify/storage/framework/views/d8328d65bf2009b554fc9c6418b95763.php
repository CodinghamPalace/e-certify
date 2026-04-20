<?php
if (!function_exists('_d8328d65bf2009b554fc9c6418b95763')):
function _d8328d65bf2009b554fc9c6418b95763($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    ->add('[:where(&)]:min-w-48 p-[.3125rem]')
    ->add('rounded-lg shadow-xs')
    ->add('border border-zinc-200 dark:border-zinc-600')
    ->add('bg-white dark:bg-zinc-700')
    ->add('focus:outline-hidden')
    ;
?>

<ui-menu
    <?php echo e($attributes->class($classes)); ?>

    popover="manual"
    data-flux-menu
>
    <?php echo e($slot); ?>

</ui-menu>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\menu\index.blade.php ENDPATH**/ ?>
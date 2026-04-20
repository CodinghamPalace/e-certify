<?php
if (!function_exists('_49aad09dc26a093779d61170df8f0a94')):
function _49aad09dc26a093779d61170df8f0a94($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$classes = Flux::classes('[grid-area:footer]')
    ->add($attributes->has('container') ? '' : 'p-6 lg:p-8')
    ;
?>

<div <?php echo e($attributes->class($classes)); ?> data-flux-footer>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-container.blade.php', $__blaze->compiledPath.'/19b56bc61dc32ff168550a0906adb563.php'); ?>
<?php require_once $__blaze->compiledPath.'/19b56bc61dc32ff168550a0906adb563.php'; ?>
<?php $__attrs19b56bc61dc32ff168550a0906adb563 = ['attributes' => $attributes->except('class')->class('p-6 lg:p-8')]; ?>
<?php $__blaze->pushData($__attrs19b56bc61dc32ff168550a0906adb563); ?>
<?php $slots19b56bc61dc32ff168550a0906adb563 = []; ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $slots19b56bc61dc32ff168550a0906adb563['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots19b56bc61dc32ff168550a0906adb563); ?>
<?php _19b56bc61dc32ff168550a0906adb563($__blaze, $__attrs19b56bc61dc32ff168550a0906adb563, $slots19b56bc61dc32ff168550a0906adb563, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</div>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\footer.blade.php ENDPATH**/ ?>
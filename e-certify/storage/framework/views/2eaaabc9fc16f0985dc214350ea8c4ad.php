<?php # [BlazeFolded]:{flux::container}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/container.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_2eaaabc9fc16f0985dc214350ea8c4ad')):
function _2eaaabc9fc16f0985dc214350ea8c4ad($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'container' => null,
];
$container ??= $attributes['container'] ?? $__defaults['container']; unset($attributes['container']);
unset($__defaults);
?>

<?php if ($container): ?>
    <div class="mx-auto w-full [:where(&amp;)]:max-w-7xl px-6 lg:px-8 <?php echo $attributes->get('class'); ?>" data-flux-container>
    <?php echo e($slot); ?>

</div>

<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\with-container.blade.php ENDPATH**/ ?>
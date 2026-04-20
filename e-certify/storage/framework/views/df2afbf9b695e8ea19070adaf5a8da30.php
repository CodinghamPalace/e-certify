<?php
if (!function_exists('_df2afbf9b695e8ea19070adaf5a8da30')):
function _df2afbf9b695e8ea19070adaf5a8da30($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'sticky' => null,
];
$sticky ??= $attributes['sticky'] ?? $__defaults['sticky']; unset($attributes['sticky']);
unset($__defaults);
?>

<?php
$classes = Flux::classes('[grid-area:aside]');

if ($sticky) {
    $attributes = $attributes->merge([
        'x-data' => '',
        'x-bind:style' => '{ position: \'sticky\', top: $el.offsetTop + \'px\', \'max-height\': \'calc(100dvh - \' + $el.offsetTop + \'px)\' }',
        'class' => 'max-h-[100vh] overflow-y-auto',
    ]);
}
?>

<div <?php echo e($attributes->class($classes)); ?> data-flux-aside>
    <?php echo e($slot); ?>

</div>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\aside.blade.php ENDPATH**/ ?>
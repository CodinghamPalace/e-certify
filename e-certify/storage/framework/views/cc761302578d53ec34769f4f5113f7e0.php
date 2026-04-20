<?php
if (!function_exists('_cc761302578d53ec34769f4f5113f7e0')):
function _cc761302578d53ec34769f4f5113f7e0($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'external' => null,
];
$external ??= $attributes['external'] ?? $__defaults['external']; unset($attributes['external']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('inline font-medium')
    ->add('underline underline-offset-[6px] hover:decoration-current')
    ->add('decoration-zinc-800/20 dark:decoration-white/20')
    ;
?>

<a <?php echo e($attributes->class($classes)); ?> <?php if ($external) : ?>target="_blank"<?php endif; ?>><?php echo e($slot); ?></a><?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\callout\link.blade.php ENDPATH**/ ?>
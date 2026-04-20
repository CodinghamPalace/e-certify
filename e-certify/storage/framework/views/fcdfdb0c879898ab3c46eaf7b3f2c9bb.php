<?php
if (!function_exists('_fcdfdb0c879898ab3c46eaf7b3f2c9bb')):
function _fcdfdb0c879898ab3c46eaf7b3f2c9bb($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'accent' => true,
    'label' => null,
];
$accent ??= $attributes['accent'] ?? $__defaults['accent']; unset($attributes['accent']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('flex whitespace-nowrap gap-2 items-center py-1 px-2 rounded-full text-sm font-medium leading-4')
    ->add('bg-zinc-800/6 dark:bg-white/10 hover:bg-zinc-800/10 dark:hover:bg-white/15 text-zinc-800 hover:text-zinc-800 dark:text-white/70 dark:hover:text-white')
    ->add(match ($accent) {
        true => 'data-checked:bg-(--color-accent) hover:data-checked:bg-(--color-accent)',
        false => 'data-checked:bg-zinc-800 dark:data-checked:bg-white',
    })
    ->add(match ($accent) {
        true => 'data-checked:text-(--color-accent-foreground) hover:data-checked:text-(--color-accent-foreground)',
        false => 'data-checked:text-white dark:data-checked:text-zinc-800',
    })
    ->add('[&[disabled]]:opacity-50 dark:[&[disabled]]:opacity-75 [&[disabled]]:cursor-default [&[disabled]]:pointer-events-none')
    ;
?>




<ui-radio <?php echo e($attributes->class($classes)); ?> data-flux-control data-flux-radio-pills tabindex="-1" data-flux-field>
    <?php echo e($slot->isNotEmpty() ? $slot : $label); ?>

</ui-radio>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\radio\variants\pills.blade.php ENDPATH**/ ?>
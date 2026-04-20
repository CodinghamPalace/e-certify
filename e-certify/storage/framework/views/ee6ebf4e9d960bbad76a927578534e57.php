<?php # [BlazeFolded]:{flux::legend}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/legend.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::description}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_ee6ebf4e9d960bbad76a927578534e57')):
function _ee6ebf4e9d960bbad76a927578534e57($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'legend' => null,
    'description' => null,
];
$legend ??= $attributes['legend'] ?? $__defaults['legend']; unset($attributes['legend']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('[&[disabled]_[data-flux-label]]:opacity-50') // Dim labels when the fieldset is disabled...
    ->add('[&[disabled]_[data-flux-legend]]:opacity-50') // Dim legend when the fieldset is disabled...

    // Adjust spacing between fields...
    ->add('*:data-flux-field:mb-3')

    // Adjust spacing between fields...
    ->add('*:data-flux-field:mb-3')
    ->add('[&>[data-flux-field]:has(>[data-flux-description])]:mb-4')
    ->add('[&>[data-flux-field]:last-child]:mb-0!')

    // Adjust spacing below legend...
    ->add('[&>[data-flux-legend]]:mb-4')
    ->add('[&>[data-flux-legend]:has(+[data-flux-description])]:mb-2')

    // Adjust spacing below description...
    ->add('[&>[data-flux-legend]+[data-flux-description]]:mb-4')
    ;
?>

<fieldset <?php echo e($attributes->class($classes)); ?> data-flux-fieldset>
    <?php if ($legend): ?>
        <ui-legend class="text-base font-medium text-zinc-800 dark:text-white" data-flux-legend>
    <?php echo e($legend); ?>

</ui-legend>

    <?php endif; ?>

    <?php if ($description): ?>
        <ui-description class="text-sm text-zinc-500 dark:text-white/60" data-flux-description>
    <?php echo e($description); ?>

</ui-description>

    <?php endif; ?>

    <?php echo e($slot); ?>

</fieldset>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\fieldset.blade.php ENDPATH**/ ?>
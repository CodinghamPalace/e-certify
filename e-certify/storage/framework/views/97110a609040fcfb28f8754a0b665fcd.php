<?php
if (!function_exists('_97110a609040fcfb28f8754a0b665fcd')):
function _97110a609040fcfb28f8754a0b665fcd($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'name' => null,
    'variant' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute it has been set manually
// but not if it has been set from the `wire:model` attribute...
$showName = isset($name);
if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    // Adjust spacing between fields...
    ->add('*:data-flux-field:mb-3')
    ->add('[&>[data-flux-field]:has(>[data-flux-description])]:mb-4')
    ->add('[&>[data-flux-field]:last-child]:mb-0!')
    ;
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'); ?>
<?php require_once $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'; ?>
<?php $__attrs83170c525c89aaf290d354eb92adaf4a = ['attributes' => $attributes]; ?>
<?php $__blaze->pushData($__attrs83170c525c89aaf290d354eb92adaf4a); ?>
<?php $slots83170c525c89aaf290d354eb92adaf4a = []; ?>
<?php ob_start(); ?>
    <ui-radio-group <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-radio-group>
        <?php echo e($slot); ?>

    </ui-radio-group>
<?php $slots83170c525c89aaf290d354eb92adaf4a['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots83170c525c89aaf290d354eb92adaf4a); ?>
<?php _83170c525c89aaf290d354eb92adaf4a($__blaze, $__attrs83170c525c89aaf290d354eb92adaf4a, $slots83170c525c89aaf290d354eb92adaf4a, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\radio\group\variants\default.blade.php ENDPATH**/ ?>
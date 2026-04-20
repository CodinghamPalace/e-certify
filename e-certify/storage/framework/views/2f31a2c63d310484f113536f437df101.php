<?php
if (!function_exists('_2f31a2c63d310484f113536f437df101')):
function _2f31a2c63d310484f113536f437df101($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'variant' => null,
    'size' => null,
    'name' => null,
];
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the radio if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('flex gap-3')
    ;
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'); ?>
<?php require_once $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'; ?>
<?php $__attrs83170c525c89aaf290d354eb92adaf4a = ['attributes' => $attributes]; ?>
<?php $__blaze->pushData($__attrs83170c525c89aaf290d354eb92adaf4a); ?>
<?php $slots83170c525c89aaf290d354eb92adaf4a = []; ?>
<?php ob_start(); ?>
    <ui-radio-group <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-radio-group-cards>
        <?php echo e($slot); ?>

    </ui-radio-group>
<?php $slots83170c525c89aaf290d354eb92adaf4a['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots83170c525c89aaf290d354eb92adaf4a); ?>
<?php _83170c525c89aaf290d354eb92adaf4a($__blaze, $__attrs83170c525c89aaf290d354eb92adaf4a, $slots83170c525c89aaf290d354eb92adaf4a, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\radio\group\variants\cards.blade.php ENDPATH**/ ?>
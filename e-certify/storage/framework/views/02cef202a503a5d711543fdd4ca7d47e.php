<?php
if (!function_exists('_02cef202a503a5d711543fdd4ca7d47e')):
function _02cef202a503a5d711543fdd4ca7d47e($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    ->add('*:data-flux-field:mb-3')
    ->add('[&>[data-flux-field]:has(>[data-flux-description])]:mb-4')
    ->add('[&>[data-flux-field]:last-child]:mb-0!')
    ;

// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'); ?>
<?php require_once $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'; ?>
<?php $__attrs83170c525c89aaf290d354eb92adaf4a = ['attributes' => $attributes]; ?>
<?php $__blaze->pushData($__attrs83170c525c89aaf290d354eb92adaf4a); ?>
<?php $slots83170c525c89aaf290d354eb92adaf4a = []; ?>
<?php ob_start(); ?>
    <ui-checkbox-group <?php echo e($attributes->class($classes)); ?> data-flux-checkbox-group>
        <?php echo e($slot); ?>

    </ui-checkbox-group>
<?php $slots83170c525c89aaf290d354eb92adaf4a['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots83170c525c89aaf290d354eb92adaf4a); ?>
<?php _83170c525c89aaf290d354eb92adaf4a($__blaze, $__attrs83170c525c89aaf290d354eb92adaf4a, $slots83170c525c89aaf290d354eb92adaf4a, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\checkbox\group\variants\default.blade.php ENDPATH**/ ?>
<?php
if (!function_exists('_67bb56f0032de3973c44822ab228f3d9')):
function _67bb56f0032de3973c44822ab228f3d9($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'variant' => 'default',
];
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
unset($__defaults);
?>

<?php $__resolved = $__blaze->resolve('flux::' . 'checkbox.group.variants.' . $variant); ?>
<?php $__blaze->pushData($attributes->all()); ?>
<?php if ($__resolved !== false): ?>
<?php require_once $__blaze->compiledPath . '/' . $__resolved . '.php'; ?><?php $slots5d075c2200adcafb19a0aae7c9b915ff = []; ?>
<?php ob_start(); ?><?php echo e($slot); ?><?php $slots5d075c2200adcafb19a0aae7c9b915ff['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $slots5d075c2200adcafb19a0aae7c9b915ff = array_merge($__blaze->mergedComponentSlots(), $slots5d075c2200adcafb19a0aae7c9b915ff); ?>
<?php ('_' . $__resolved)($__blaze, $attributes->all(), $slots5d075c2200adcafb19a0aae7c9b915ff, [], isset($this) ? $this : null); ?>
<?php else: ?>
<?php if (!Flux::componentExists($name = 'checkbox.group.variants.' . $variant)) throw new \Exception("Flux component [{$name}] does not exist."); ?><?php if (isset($component)) { $__componentOriginal4c7f570a6fa628b9904d8cf142be6c8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c7f570a6fa628b9904d8cf142be6c8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve([
    'view' => (app()->version() >= 12 ? hash('xxh128', 'flux') : md5('flux')) . '::' . 'checkbox.group.variants.' . $variant,
    'data' => $__env->getCurrentComponentData(),
] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::' . 'checkbox.group.variants.' . $variant); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes($attributes->getAttributes()); ?><?php echo e($slot); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c7f570a6fa628b9904d8cf142be6c8b)): ?>
<?php $attributes = $__attributesOriginal4c7f570a6fa628b9904d8cf142be6c8b; ?>
<?php unset($__attributesOriginal4c7f570a6fa628b9904d8cf142be6c8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c7f570a6fa628b9904d8cf142be6c8b)): ?>
<?php $component = $__componentOriginal4c7f570a6fa628b9904d8cf142be6c8b; ?>
<?php unset($__componentOriginal4c7f570a6fa628b9904d8cf142be6c8b); ?>
<?php endif; ?>
<?php endif; ?>
<?php $__blaze->popData(); ?>
<?php unset($__resolved) ?>

<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\checkbox\group\index.blade.php ENDPATH**/ ?>
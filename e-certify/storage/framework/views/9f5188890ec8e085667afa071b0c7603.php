<?php
if (!function_exists('_9f5188890ec8e085667afa071b0c7603')):
function _9f5188890ec8e085667afa071b0c7603($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$__awareDefaults = [ 'variant', 'size', 'indicator' ];
$variant = $__blaze->getConsumableData('variant'); unset($attributes['variant']);
$size = $__blaze->getConsumableData('size'); unset($attributes['size']);
$indicator = $__blaze->getConsumableData('indicator'); unset($attributes['indicator']);
unset($__awareDefaults);
?>

<?php
$__defaults = [
    'variant' => 'default',
];
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
unset($__defaults);
?>

<?php
// This prevents variants picked up by `@aware()` from other wrapping components like flux::modal from being used here...
$variant = $variant !== 'default' && Flux::componentExists('radio.variants.' . $variant)
    ? $variant
    : 'default';
?>

<?php $__resolved = $__blaze->resolve('flux::' . 'radio.variants.' . $variant); ?>
<?php $__blaze->pushData($attributes->all()); ?>
<?php if ($__resolved !== false): ?>
<?php require_once $__blaze->compiledPath . '/' . $__resolved . '.php'; ?><?php $slots12d0c0a822d94e9a5659fd20e50dc814 = []; ?>
<?php ob_start(); ?><?php echo e($slot); ?><?php $slots12d0c0a822d94e9a5659fd20e50dc814['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $slots12d0c0a822d94e9a5659fd20e50dc814 = array_merge($__blaze->mergedComponentSlots(), $slots12d0c0a822d94e9a5659fd20e50dc814); ?>
<?php ('_' . $__resolved)($__blaze, $attributes->all(), $slots12d0c0a822d94e9a5659fd20e50dc814, [], isset($this) ? $this : null); ?>
<?php else: ?>
<?php if (!Flux::componentExists($name = 'radio.variants.' . $variant)) throw new \Exception("Flux component [{$name}] does not exist."); ?><?php if (isset($component)) { $__componentOriginal265f91d25e15cdf8789a0aea59dc939c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal265f91d25e15cdf8789a0aea59dc939c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve([
    'view' => (app()->version() >= 12 ? hash('xxh128', 'flux') : md5('flux')) . '::' . 'radio.variants.' . $variant,
    'data' => $__env->getCurrentComponentData(),
] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::' . 'radio.variants.' . $variant); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes($attributes->getAttributes()); ?><?php echo e($slot); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal265f91d25e15cdf8789a0aea59dc939c)): ?>
<?php $attributes = $__attributesOriginal265f91d25e15cdf8789a0aea59dc939c; ?>
<?php unset($__attributesOriginal265f91d25e15cdf8789a0aea59dc939c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal265f91d25e15cdf8789a0aea59dc939c)): ?>
<?php $component = $__componentOriginal265f91d25e15cdf8789a0aea59dc939c; ?>
<?php unset($__componentOriginal265f91d25e15cdf8789a0aea59dc939c); ?>
<?php endif; ?>
<?php endif; ?>
<?php $__blaze->popData(); ?>
<?php unset($__resolved) ?>

<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\radio\index.blade.php ENDPATH**/ ?>
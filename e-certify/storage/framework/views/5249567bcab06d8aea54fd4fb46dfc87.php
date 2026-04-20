<?php
if (!function_exists('_5249567bcab06d8aea54fd4fb46dfc87')):
function _5249567bcab06d8aea54fd4fb46dfc87($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$__awareDefaults = [ 'variant' ];
$variant = $__blaze->getConsumableData('variant'); unset($attributes['variant']);
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
$variant = $variant !== 'default' && Flux::componentExists('select.variants.' . $variant)
    ? 'custom'
    : 'default';
?>

<?php $__resolved = $__blaze->resolve('flux::' . 'select.option.variants.' . $variant); ?>
<?php $__blaze->pushData($attributes->all()); ?>
<?php if ($__resolved !== false): ?>
<?php require_once $__blaze->compiledPath . '/' . $__resolved . '.php'; ?><?php $slots03472fecd344168dfca3d3972b40209d = []; ?>
<?php ob_start(); ?><?php echo e($slot); ?><?php $slots03472fecd344168dfca3d3972b40209d['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $slots03472fecd344168dfca3d3972b40209d = array_merge($__blaze->mergedComponentSlots(), $slots03472fecd344168dfca3d3972b40209d); ?>
<?php ('_' . $__resolved)($__blaze, $attributes->all(), $slots03472fecd344168dfca3d3972b40209d, [], isset($this) ? $this : null); ?>
<?php else: ?>
<?php if (!Flux::componentExists($name = 'select.option.variants.' . $variant)) throw new \Exception("Flux component [{$name}] does not exist."); ?><?php if (isset($component)) { $__componentOriginal0c793dac3b0f3858ef7a5fdb4e001894 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c793dac3b0f3858ef7a5fdb4e001894 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve([
    'view' => (app()->version() >= 12 ? hash('xxh128', 'flux') : md5('flux')) . '::' . 'select.option.variants.' . $variant,
    'data' => $__env->getCurrentComponentData(),
] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::' . 'select.option.variants.' . $variant); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes($attributes->getAttributes()); ?><?php echo e($slot); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c793dac3b0f3858ef7a5fdb4e001894)): ?>
<?php $attributes = $__attributesOriginal0c793dac3b0f3858ef7a5fdb4e001894; ?>
<?php unset($__attributesOriginal0c793dac3b0f3858ef7a5fdb4e001894); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c793dac3b0f3858ef7a5fdb4e001894)): ?>
<?php $component = $__componentOriginal0c793dac3b0f3858ef7a5fdb4e001894; ?>
<?php unset($__componentOriginal0c793dac3b0f3858ef7a5fdb4e001894); ?>
<?php endif; ?>
<?php endif; ?>
<?php $__blaze->popData(); ?>
<?php unset($__resolved) ?>

<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\select\option\index.blade.php ENDPATH**/ ?>
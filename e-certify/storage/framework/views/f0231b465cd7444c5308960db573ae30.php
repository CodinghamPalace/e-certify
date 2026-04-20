<?php
if (!function_exists('_f0231b465cd7444c5308960db573ae30')):
function _f0231b465cd7444c5308960db573ae30($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'); ?>
<?php require_once $__blaze->compiledPath.'/83170c525c89aaf290d354eb92adaf4a.php'; ?>
<?php $__attrs83170c525c89aaf290d354eb92adaf4a = ['attributes' => $attributes]; ?>
<?php $__blaze->pushData($__attrs83170c525c89aaf290d354eb92adaf4a); ?>
<?php $slots83170c525c89aaf290d354eb92adaf4a = []; ?>
<?php ob_start(); ?>
    <?php $__resolved = $__blaze->resolve('flux::' . 'select.variants.' . $variant); ?>
<?php $__blaze->pushData($attributes->all()); ?>
<?php if ($__resolved !== false): ?>
<?php require_once $__blaze->compiledPath . '/' . $__resolved . '.php'; ?><?php $slots4d12e6ab75736565ad24ea45c030ea52 = []; ?>
<?php ob_start(); ?><?php echo e($slot); ?><?php $slots4d12e6ab75736565ad24ea45c030ea52['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $slots4d12e6ab75736565ad24ea45c030ea52 = array_merge($__blaze->mergedComponentSlots(), $slots4d12e6ab75736565ad24ea45c030ea52); ?>
<?php ('_' . $__resolved)($__blaze, $attributes->all(), $slots4d12e6ab75736565ad24ea45c030ea52, [], isset($this) ? $this : null); ?>
<?php else: ?>
<?php if (!Flux::componentExists($name = 'select.variants.' . $variant)) throw new \Exception("Flux component [{$name}] does not exist."); ?><?php if (isset($component)) { $__componentOriginal08070e8b41d4df2d7ae8c552da62ae57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08070e8b41d4df2d7ae8c552da62ae57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve([
    'view' => (app()->version() >= 12 ? hash('xxh128', 'flux') : md5('flux')) . '::' . 'select.variants.' . $variant,
    'data' => $__env->getCurrentComponentData(),
] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::' . 'select.variants.' . $variant); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes($attributes->getAttributes()); ?><?php echo e($slot); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08070e8b41d4df2d7ae8c552da62ae57)): ?>
<?php $attributes = $__attributesOriginal08070e8b41d4df2d7ae8c552da62ae57; ?>
<?php unset($__attributesOriginal08070e8b41d4df2d7ae8c552da62ae57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08070e8b41d4df2d7ae8c552da62ae57)): ?>
<?php $component = $__componentOriginal08070e8b41d4df2d7ae8c552da62ae57; ?>
<?php unset($__componentOriginal08070e8b41d4df2d7ae8c552da62ae57); ?>
<?php endif; ?>
<?php endif; ?>
<?php $__blaze->popData(); ?>
<?php unset($__resolved) ?>

<?php $slots83170c525c89aaf290d354eb92adaf4a['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots83170c525c89aaf290d354eb92adaf4a); ?>
<?php _83170c525c89aaf290d354eb92adaf4a($__blaze, $__attrs83170c525c89aaf290d354eb92adaf4a, $slots83170c525c89aaf290d354eb92adaf4a, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\select\index.blade.php ENDPATH**/ ?>
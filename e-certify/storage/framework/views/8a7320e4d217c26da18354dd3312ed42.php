<?php
if (!function_exists('_8a7320e4d217c26da18354dd3312ed42')):
function _8a7320e4d217c26da18354dd3312ed42($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
$variant = $variant !== 'default' && Flux::componentExists('checkbox.variants.' . $variant)
    ? $variant
    : 'default';
?>

<?php $__resolved = $__blaze->resolve('flux::' . 'checkbox.variants.' . $variant); ?>
<?php $__blaze->pushData($attributes->all()); ?>
<?php if ($__resolved !== false): ?>
<?php require_once $__blaze->compiledPath . '/' . $__resolved . '.php'; ?><?php $slots9cb430e7e266ec003a256f251613614a = []; ?>
<?php ob_start(); ?><?php echo e($slot); ?><?php $slots9cb430e7e266ec003a256f251613614a['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $slots9cb430e7e266ec003a256f251613614a = array_merge($__blaze->mergedComponentSlots(), $slots9cb430e7e266ec003a256f251613614a); ?>
<?php ('_' . $__resolved)($__blaze, $attributes->all(), $slots9cb430e7e266ec003a256f251613614a, [], isset($this) ? $this : null); ?>
<?php else: ?>
<?php if (!Flux::componentExists($name = 'checkbox.variants.' . $variant)) throw new \Exception("Flux component [{$name}] does not exist."); ?><?php if (isset($component)) { $__componentOriginale96b33a22b0abf65a3b62dc1a6ecf912 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale96b33a22b0abf65a3b62dc1a6ecf912 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve([
    'view' => (app()->version() >= 12 ? hash('xxh128', 'flux') : md5('flux')) . '::' . 'checkbox.variants.' . $variant,
    'data' => $__env->getCurrentComponentData(),
] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::' . 'checkbox.variants.' . $variant); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes($attributes->getAttributes()); ?><?php echo e($slot); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale96b33a22b0abf65a3b62dc1a6ecf912)): ?>
<?php $attributes = $__attributesOriginale96b33a22b0abf65a3b62dc1a6ecf912; ?>
<?php unset($__attributesOriginale96b33a22b0abf65a3b62dc1a6ecf912); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale96b33a22b0abf65a3b62dc1a6ecf912)): ?>
<?php $component = $__componentOriginale96b33a22b0abf65a3b62dc1a6ecf912; ?>
<?php unset($__componentOriginale96b33a22b0abf65a3b62dc1a6ecf912); ?>
<?php endif; ?>
<?php endif; ?>
<?php $__blaze->popData(); ?>
<?php unset($__resolved) ?>

<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\checkbox\index.blade.php ENDPATH**/ ?>
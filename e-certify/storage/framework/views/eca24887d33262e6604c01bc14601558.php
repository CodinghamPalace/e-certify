<?php
if (!function_exists('_eca24887d33262e6604c01bc14601558')):
function _eca24887d33262e6604c01bc14601558($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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

<?php $__resolved = $__blaze->resolve('flux::' . 'radio.group.variants.' . $variant); ?>
<?php $__blaze->pushData($attributes->all()); ?>
<?php if ($__resolved !== false): ?>
<?php require_once $__blaze->compiledPath . '/' . $__resolved . '.php'; ?><?php $slotsdad3ab624521e87f7d01959486fcf529 = []; ?>
<?php ob_start(); ?><?php echo e($slot); ?><?php $slotsdad3ab624521e87f7d01959486fcf529['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $slotsdad3ab624521e87f7d01959486fcf529 = array_merge($__blaze->mergedComponentSlots(), $slotsdad3ab624521e87f7d01959486fcf529); ?>
<?php ('_' . $__resolved)($__blaze, $attributes->all(), $slotsdad3ab624521e87f7d01959486fcf529, [], isset($this) ? $this : null); ?>
<?php else: ?>
<?php if (!Flux::componentExists($name = 'radio.group.variants.' . $variant)) throw new \Exception("Flux component [{$name}] does not exist."); ?><?php if (isset($component)) { $__componentOriginalf6b376e50e9192a3af54df033b02996a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6b376e50e9192a3af54df033b02996a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve([
    'view' => (app()->version() >= 12 ? hash('xxh128', 'flux') : md5('flux')) . '::' . 'radio.group.variants.' . $variant,
    'data' => $__env->getCurrentComponentData(),
] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::' . 'radio.group.variants.' . $variant); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes($attributes->getAttributes()); ?><?php echo e($slot); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6b376e50e9192a3af54df033b02996a)): ?>
<?php $attributes = $__attributesOriginalf6b376e50e9192a3af54df033b02996a; ?>
<?php unset($__attributesOriginalf6b376e50e9192a3af54df033b02996a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6b376e50e9192a3af54df033b02996a)): ?>
<?php $component = $__componentOriginalf6b376e50e9192a3af54df033b02996a; ?>
<?php unset($__componentOriginalf6b376e50e9192a3af54df033b02996a); ?>
<?php endif; ?>
<?php endif; ?>
<?php $__blaze->popData(); ?>
<?php unset($__resolved) ?>

<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\radio\group\index.blade.php ENDPATH**/ ?>
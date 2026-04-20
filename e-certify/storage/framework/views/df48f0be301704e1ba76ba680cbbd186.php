<?php
if (!function_exists('_df48f0be301704e1ba76ba680cbbd186')):
function _df48f0be301704e1ba76ba680cbbd186($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'interactive' => null,
    'position' => 'top',
    'align' => 'center',
    'content' => null,
    'kbd' => null,
    'toggleable' => null,
];
$interactive ??= $attributes['interactive'] ?? $__defaults['interactive']; unset($attributes['interactive']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$content ??= $attributes['content'] ?? $__defaults['content']; unset($attributes['content']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$toggleable ??= $attributes['toggleable'] ?? $__defaults['toggleable']; unset($attributes['toggleable']);
unset($__defaults);
?>

<?php
// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if ($toggleable): ?>
    <ui-dropdown position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/7dfc728ad0354c9cbb3400932515bc88.php'); ?>
<?php require_once $__blaze->compiledPath.'/7dfc728ad0354c9cbb3400932515bc88.php'; ?>
<?php $__attrs7dfc728ad0354c9cbb3400932515bc88 = ['kbd' => $kbd]; ?>
<?php $__blaze->pushData($__attrs7dfc728ad0354c9cbb3400932515bc88); ?>
<?php $slots7dfc728ad0354c9cbb3400932515bc88 = []; ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $slots7dfc728ad0354c9cbb3400932515bc88['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots7dfc728ad0354c9cbb3400932515bc88); ?>
<?php _7dfc728ad0354c9cbb3400932515bc88($__blaze, $__attrs7dfc728ad0354c9cbb3400932515bc88, $slots7dfc728ad0354c9cbb3400932515bc88, ['kbd'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-dropdown>
<?php else: ?>
    <ui-tooltip position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip <?php if($interactive): ?> interactive <?php endif; ?>>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/7dfc728ad0354c9cbb3400932515bc88.php'); ?>
<?php require_once $__blaze->compiledPath.'/7dfc728ad0354c9cbb3400932515bc88.php'; ?>
<?php $__attrs7dfc728ad0354c9cbb3400932515bc88 = ['kbd' => $kbd]; ?>
<?php $__blaze->pushData($__attrs7dfc728ad0354c9cbb3400932515bc88); ?>
<?php $slots7dfc728ad0354c9cbb3400932515bc88 = []; ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $slots7dfc728ad0354c9cbb3400932515bc88['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots7dfc728ad0354c9cbb3400932515bc88); ?>
<?php _7dfc728ad0354c9cbb3400932515bc88($__blaze, $__attrs7dfc728ad0354c9cbb3400932515bc88, $slots7dfc728ad0354c9cbb3400932515bc88, ['kbd'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-tooltip>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\tooltip\index.blade.php ENDPATH**/ ?>
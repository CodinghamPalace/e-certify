<?php
if (!function_exists('_10fca58a39317ce98ea6c8f3c4970037')):
function _10fca58a39317ce98ea6c8f3c4970037($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<div class="-mx-[.3125rem] my-[.3125rem] h-px" <?php echo e($attributes); ?> data-flux-navmenu-separator>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/separator.blade.php', $__blaze->compiledPath.'/b27b7de20cc079efce4733fd24ae9e1a.php'); ?>
<?php require_once $__blaze->compiledPath.'/b27b7de20cc079efce4733fd24ae9e1a.php'; ?>
<?php $__blaze->pushData(['class' => 'dark:bg-zinc-600!']); ?>
<?php _b27b7de20cc079efce4733fd24ae9e1a($__blaze, ['class' => 'dark:bg-zinc-600!'], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</div>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\navmenu\separator.blade.php ENDPATH**/ ?>
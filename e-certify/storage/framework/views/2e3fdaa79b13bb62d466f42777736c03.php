<?php
if (!function_exists('_2e3fdaa79b13bb62d466f42777736c03')):
function _2e3fdaa79b13bb62d466f42777736c03($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/index.blade.php', $__blaze->compiledPath.'/4985888872481e5ee120e252c510ca76.php'); ?>
<?php require_once $__blaze->compiledPath.'/4985888872481e5ee120e252c510ca76.php'; ?>
<?php $__blaze->pushData(['all' => true,'attributes' => $attributes]); ?>
<?php _4985888872481e5ee120e252c510ca76($__blaze, ['all' => true,'attributes' => $attributes], [], ['all', 'attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\checkbox\all.blade.php ENDPATH**/ ?>
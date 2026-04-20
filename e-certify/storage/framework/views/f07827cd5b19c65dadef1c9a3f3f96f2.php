<?php
if (!function_exists('_f07827cd5b19c65dadef1c9a3f3f96f2')):
function _f07827cd5b19c65dadef1c9a3f3f96f2($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'); ?>
<?php require_once $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'; ?>
<?php $__blaze->pushData(['attributes' => $attributes->class('shrink-0'),'variant' => 'subtle','square' => true,'x-data' => true,'x-on:click' => '$dispatch(\'flux-sidebar-toggle\')','aria-label' => ''.e(__('Toggle sidebar')).'','data-flux-sidebar-toggle' => true]); ?>
<?php _20529d26fecb8aab992b100aa16b77df($__blaze, ['attributes' => $attributes->class('shrink-0'),'variant' => 'subtle','square' => true,'x-data' => true,'x-on:click' => '$dispatch(\'flux-sidebar-toggle\')','aria-label' => ''.e(__('Toggle sidebar')).'','data-flux-sidebar-toggle' => true], [], ['attributes', 'square', 'x-data', 'data-flux-sidebar-toggle'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\sidebar\toggle.blade.php ENDPATH**/ ?>
<?php # [BlazeFolded]:{flux::icon.x-mark}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/x-mark.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_e020eac4d4bda4232c35287a47f4649f')):
function _e020eac4d4bda4232c35287a47f4649f($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1 [[data-flux-input]:has(input:placeholder-shown)_&]:hidden [[data-flux-input]:has(input[disabled])_&]:hidden',
    'square' => true,
    'size' => null,
]);
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'); ?>
<?php require_once $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'; ?>
<?php $__attrs20529d26fecb8aab992b100aa16b77df = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','x-data' => 'fluxInputClearable','x-on:click' => 'clear()','tabindex' => '-1','aria-label' => 'Clear input','data-flux-clear-button' => true]; ?>
<?php $__blaze->pushData($__attrs20529d26fecb8aab992b100aa16b77df); ?>
<?php $slots20529d26fecb8aab992b100aa16b77df = []; ?>
<?php ob_start(); ?>
    <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z"/>
</svg>

        
<?php $slots20529d26fecb8aab992b100aa16b77df['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots20529d26fecb8aab992b100aa16b77df); ?>
<?php _20529d26fecb8aab992b100aa16b77df($__blaze, $__attrs20529d26fecb8aab992b100aa16b77df, $slots20529d26fecb8aab992b100aa16b77df, ['attributes', 'size', 'data-flux-clear-button'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\input\clearable.blade.php ENDPATH**/ ?>
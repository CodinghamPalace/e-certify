<?php # [BlazeFolded]:{flux::icon.eye-slash}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye-slash.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::icon.eye}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_49f4a4839fddf764130103490eba78e3')):
function _49f4a4839fddf764130103490eba78e3($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'); ?>
<?php require_once $__blaze->compiledPath.'/20529d26fecb8aab992b100aa16b77df.php'; ?>
<?php $__attrs20529d26fecb8aab992b100aa16b77df = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','x-data' => 'fluxInputViewable','x-on:click' => 'toggle()','x-bind:data-viewable-open' => 'open','aria-label' => ''.e(__('Toggle password visibility')).'']; ?>
<?php $__blaze->pushData($__attrs20529d26fecb8aab992b100aa16b77df); ?>
<?php $slots20529d26fecb8aab992b100aa16b77df = []; ?>
<?php ob_start(); ?>
    <svg class="shrink-0 [:where(&amp;)]:size-4 hidden [[data-viewable-open]>&]:block" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M3.28 2.22a.75.75 0 0 0-1.06 1.06l10.5 10.5a.75.75 0 1 0 1.06-1.06l-1.322-1.323a7.012 7.012 0 0 0 2.16-3.11.87.87 0 0 0 0-.567A7.003 7.003 0 0 0 4.82 3.76l-1.54-1.54Zm3.196 3.195 1.135 1.136A1.502 1.502 0 0 1 9.45 8.389l1.136 1.135a3 3 0 0 0-4.109-4.109Z" clip-rule="evenodd"/>
  <path d="m7.812 10.994 1.816 1.816A7.003 7.003 0 0 1 1.38 8.28a.87.87 0 0 1 0-.566 6.985 6.985 0 0 1 1.113-2.039l2.513 2.513a3 3 0 0 0 2.806 2.806Z"/>
</svg>

        
    <svg class="shrink-0 [:where(&amp;)]:size-4 block [[data-viewable-open]>&]:hidden" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/>
  <path fill-rule="evenodd" d="M1.38 8.28a.87.87 0 0 1 0-.566 7.003 7.003 0 0 1 13.238.006.87.87 0 0 1 0 .566A7.003 7.003 0 0 1 1.379 8.28ZM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd"/>
</svg>

        
<?php $slots20529d26fecb8aab992b100aa16b77df['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots20529d26fecb8aab992b100aa16b77df); ?>
<?php _20529d26fecb8aab992b100aa16b77df($__blaze, $__attrs20529d26fecb8aab992b100aa16b77df, $slots20529d26fecb8aab992b100aa16b77df, ['attributes', 'size'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\input\viewable.blade.php ENDPATH**/ ?>
<?php # [BlazeFolded]:{flux::icon.clipboard-document-check}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/clipboard-document-check.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::icon.clipboard-document}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/clipboard-document.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_118206f99780ef6631324e69d745c115')):
function _118206f99780ef6631324e69d745c115($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
<?php $__attrs20529d26fecb8aab992b100aa16b77df = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','x-data' => 'fluxInputCopyable','x-on:click' => 'copy()','x-bind:data-copyable-copied' => 'copied','aria-label' => ''.e(__('Copy to clipboard')).'']; ?>
<?php $__blaze->pushData($__attrs20529d26fecb8aab992b100aa16b77df); ?>
<?php $slots20529d26fecb8aab992b100aa16b77df = []; ?>
<?php ob_start(); ?>
    <svg class="shrink-0 [:where(&amp;)]:size-5 hidden [[data-copyable-copied]>&]:block" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M18 5.25a2.25 2.25 0 0 0-2.012-2.238A2.25 2.25 0 0 0 13.75 1h-1.5a2.25 2.25 0 0 0-2.238 2.012c-.875.092-1.6.686-1.884 1.488H11A2.5 2.5 0 0 1 13.5 7v7h2.25A2.25 2.25 0 0 0 18 11.75v-6.5ZM12.25 2.5a.75.75 0 0 0-.75.75v.25h3v-.25a.75.75 0 0 0-.75-.75h-1.5Z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M3 6a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H3Zm6.874 4.166a.75.75 0 1 0-1.248-.832l-2.493 3.739-.853-.853a.75.75 0 0 0-1.06 1.06l1.5 1.5a.75.75 0 0 0 1.154-.114l3-4.5Z" clip-rule="evenodd"/>
</svg>

        
    <svg class="shrink-0 [:where(&amp;)]:size-5 block [[data-copyable-copied]>&]:hidden" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M15.988 3.012A2.25 2.25 0 0 1 18 5.25v6.5A2.25 2.25 0 0 1 15.75 14H13.5v-3.379a3 3 0 0 0-.879-2.121l-3.12-3.121a3 3 0 0 0-1.402-.791 2.252 2.252 0 0 1 1.913-1.576A2.25 2.25 0 0 1 12.25 1h1.5a2.25 2.25 0 0 1 2.238 2.012ZM11.5 3.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 .75.75v.25h-3v-.25Z" clip-rule="evenodd"/>
  <path d="M3.5 6A1.5 1.5 0 0 0 2 7.5v9A1.5 1.5 0 0 0 3.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L8.44 6.439A1.5 1.5 0 0 0 7.378 6H3.5Z"/>
</svg>

        
<?php $slots20529d26fecb8aab992b100aa16b77df['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots20529d26fecb8aab992b100aa16b77df); ?>
<?php _20529d26fecb8aab992b100aa16b77df($__blaze, $__attrs20529d26fecb8aab992b100aa16b77df, $slots20529d26fecb8aab992b100aa16b77df, ['attributes', 'size'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\input\copyable.blade.php ENDPATH**/ ?>
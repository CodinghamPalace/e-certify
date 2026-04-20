<?php
if (!function_exists('_a3e55835a23c2370314df985b8701cf1')):
function _a3e55835a23c2370314df985b8701cf1($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'name' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('flex size-[1.125rem] rounded-[.3rem] mt-px outline-offset-2')
    ;
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-inline-field.blade.php', $__blaze->compiledPath.'/cda70d584944399488e14260cc42b709.php'); ?>
<?php require_once $__blaze->compiledPath.'/cda70d584944399488e14260cc42b709.php'; ?>
<?php $__attrscda70d584944399488e14260cc42b709 = ['attributes' => $attributes]; ?>
<?php $__blaze->pushData($__attrscda70d584944399488e14260cc42b709); ?>
<?php $slotscda70d584944399488e14260cc42b709 = []; ?>
<?php ob_start(); ?>
    <ui-checkbox <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-control data-flux-checkbox>
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::checkbox.indicator", []); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/indicator.blade.php', $__blaze->compiledPath.'/f9133d93e8ec1142e9eff6ebad149347.php'); ?>
<?php require_once $__blaze->compiledPath.'/f9133d93e8ec1142e9eff6ebad149347.php'; ?>
<?php $__blaze->pushData([]); ?>
<?php _f9133d93e8ec1142e9eff6ebad149347($__blaze, [], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    </ui-checkbox>
<?php $slotscda70d584944399488e14260cc42b709['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotscda70d584944399488e14260cc42b709); ?>
<?php _cda70d584944399488e14260cc42b709($__blaze, $__attrscda70d584944399488e14260cc42b709, $slotscda70d584944399488e14260cc42b709, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\checkbox\variants\default.blade.php ENDPATH**/ ?>
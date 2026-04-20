<?php
if (!function_exists('_2109e64e1ec8ebac2e02598e1eb95c60')):
function _2109e64e1ec8ebac2e02598e1eb95c60($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$__awareDefaults = ['mode' => 'numeric', 'private' => false];
$mode = $__blaze->getConsumableData('mode', $__awareDefaults['mode']); unset($attributes['mode']);
$private = $__blaze->getConsumableData('private', $__awareDefaults['private']); unset($attributes['private']);
unset($__awareDefaults);
?>

<?php
    $attributes = $attributes
        ->merge([
            'class' => 'w-8! grow-0 has-focus-within:z-10',
            'class:input' => 'px-0! py-3 text-center disabled:opacity-75 disabled:shadow-xs! dark:disabled:shadow-none!',
        ])
        ->merge(['data-flux-otp-input' => ''])
    ;

    if ($mode == 'numeric') {
        $attributes = $attributes->merge(['inputmode' => 'numeric']);
    }

    if ($private) {
        $attributes = $attributes->merge(['type' => 'password']);
    }
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/51210aa5c05ec12399d4c8c9d1e4aa8a.php'); ?>
<?php require_once $__blaze->compiledPath.'/51210aa5c05ec12399d4c8c9d1e4aa8a.php'; ?>
<?php $__blaze->pushData(['attributes' => $attributes]); ?>
<?php _51210aa5c05ec12399d4c8c9d1e4aa8a($__blaze, ['attributes' => $attributes], [], ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?><?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\otp\input.blade.php ENDPATH**/ ?>
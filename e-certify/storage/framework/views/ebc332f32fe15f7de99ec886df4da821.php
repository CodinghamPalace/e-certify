<?php
if (!function_exists('_ebc332f32fe15f7de99ec886df4da821')):
function _ebc332f32fe15f7de99ec886df4da821($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
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
    'align' => 'right',
    'checked' => null
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$checked ??= $attributes['checked'] ?? $__defaults['checked']; unset($attributes['checked']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute it has been set manually
// but not if it has been set from the `wire:model` attribute...
$showName = isset($name);
if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('group h-5 w-8 min-w-8 relative inline-flex items-center outline-offset-2')
    ->add('rounded-full')
    ->add('transition')
    ->add('bg-zinc-800/15 [&[disabled]]:opacity-50 dark:bg-transparent dark:border dark:border-white/20 dark:[&[disabled]]:border-white/10')
    ->add('[print-color-adjust:exact]')
    ->add([
        'data-checked:bg-(--color-accent)',
        'data-checked:border-0',
    ])
    ;

$indicatorClasses = Flux::classes()
    ->add('size-3.5')
    ->add('rounded-full')
    ->add('transition translate-x-[0.1875rem] dark:translate-x-[0.125rem] rtl:-translate-x-[0.1875rem] dark:rtl:-translate-x-[0.125rem]')
    ->add('bg-white')
    ->add([
        'group-data-checked:translate-x-[0.9375rem] rtl:group-data-checked:-translate-x-[0.9375rem]',
        // We have to add the dark variant of the `translate-x-[0.9375rem]` to ensure that if `.dark` is added to an element mid way
        // down the DOM instead of on the root HTML element, that the above `dark:translate-x-[0.125rem]` doesn't over ride it...
        'dark:group-data-checked:translate-x-[0.9375rem] dark:rtl:group-data-checked:-translate-x-[0.9375rem]',
        'group-data-checked:bg-(--color-accent-foreground)',
    ]);
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($align === 'left' || $align === 'start'): ?>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-inline-field.blade.php', $__blaze->compiledPath.'/cda70d584944399488e14260cc42b709.php'); ?>
<?php require_once $__blaze->compiledPath.'/cda70d584944399488e14260cc42b709.php'; ?>
<?php $__attrscda70d584944399488e14260cc42b709 = ['attributes' => $attributes]; ?>
<?php $__blaze->pushData($__attrscda70d584944399488e14260cc42b709); ?>
<?php $slotscda70d584944399488e14260cc42b709 = []; ?>
<?php ob_start(); ?>
        <ui-switch <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> <?php if($checked): ?> checked data-checked <?php endif; ?> data-flux-control data-flux-switch>
            <span class="<?php echo e(\Illuminate\Support\Arr::toCssClasses($indicatorClasses)); ?>"></span>
        </ui-switch>
    <?php $slotscda70d584944399488e14260cc42b709['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotscda70d584944399488e14260cc42b709); ?>
<?php _cda70d584944399488e14260cc42b709($__blaze, $__attrscda70d584944399488e14260cc42b709, $slotscda70d584944399488e14260cc42b709, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/with-reversed-inline-field.blade.php', $__blaze->compiledPath.'/de11624764e49aba4389c8855113acd5.php'); ?>
<?php require_once $__blaze->compiledPath.'/de11624764e49aba4389c8855113acd5.php'; ?>
<?php $__attrsde11624764e49aba4389c8855113acd5 = ['attributes' => $attributes]; ?>
<?php $__blaze->pushData($__attrsde11624764e49aba4389c8855113acd5); ?>
<?php $slotsde11624764e49aba4389c8855113acd5 = []; ?>
<?php ob_start(); ?>
        <ui-switch <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> <?php if($checked): ?> checked data-checked <?php endif; ?> data-flux-control data-flux-switch>
            <span class="<?php echo e(\Illuminate\Support\Arr::toCssClasses($indicatorClasses)); ?>"></span>
        </ui-switch>
    <?php $slotsde11624764e49aba4389c8855113acd5['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotsde11624764e49aba4389c8855113acd5); ?>
<?php _de11624764e49aba4389c8855113acd5($__blaze, $__attrsde11624764e49aba4389c8855113acd5, $slotsde11624764e49aba4389c8855113acd5, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\switch.blade.php ENDPATH**/ ?>
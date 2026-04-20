<?php # [BlazeFolded]:{flux::label}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::description}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::field}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_b3c0ca551230de65f0c8409097c629e6')):
function _b3c0ca551230de65f0c8409097c629e6($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
extract(flux::forwardedattributes($attributes, [
    'name',
    'description',
    'label',
]));
?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'description' => null,
    'label' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description)): ?>
    <ui-field class="min-w-0 [&amp;:not(:has([data-flux-field])):has([data-flux-control][disabled])&gt;[data-flux-label]]:opacity-50 [&amp;:has(&gt;[data-flux-radio-group][disabled])&gt;[data-flux-label]]:opacity-50 [&amp;:has(&gt;[data-flux-checkbox-group][disabled])&gt;[data-flux-label]]:opacity-50 grid gap-x-3 gap-y-1.5 has-[[data-flux-label]~[data-flux-control]]:grid-cols-[1fr_auto] has-[[data-flux-control]~[data-flux-label]]:grid-cols-[auto_1fr] [&amp;&gt;[data-flux-control]~[data-flux-description]]:row-start-2 [&amp;&gt;[data-flux-control]~[data-flux-description]]:col-start-2 [&amp;&gt;[data-flux-control]~[data-flux-error]]:col-span-2 [&amp;&gt;[data-flux-control]~[data-flux-error]]:mt-1 [&amp;&gt;[data-flux-label]~[data-flux-control]]:row-start-1 [&amp;&gt;[data-flux-label]~[data-flux-control]]:col-start-2" data-flux-field>
    <?php echo e($slot); ?>


        <?php if (isset($label)): ?>
            <ui-label class="inline-flex items-center text-sm font-medium  [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white [&amp;:has([data-flux-label-trailing])]:flex" data-flux-label>
    <?php echo e($label); ?>


    
    
    </ui-label>

        <?php endif; ?>

        <?php if (isset($description)): ?>
            <ui-description class="text-sm text-zinc-500 dark:text-white/60" data-flux-description>
    <?php echo e($description); ?>

</ui-description>

        <?php endif; ?>

        <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/a4b16ae05c9c34387756971f52d8cef3.php'); ?>
<?php require_once $__blaze->compiledPath.'/a4b16ae05c9c34387756971f52d8cef3.php'; ?>
<?php $__blaze->pushData(['name' => $name]); ?>
<?php _a4b16ae05c9c34387756971f52d8cef3($__blaze, ['name' => $name], [], ['name'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</ui-field>

<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>

<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\with-inline-field.blade.php ENDPATH**/ ?>
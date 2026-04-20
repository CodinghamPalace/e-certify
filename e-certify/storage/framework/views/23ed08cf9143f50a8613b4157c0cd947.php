<?php
if (!function_exists('_23ed08cf9143f50a8613b4157c0cd947')):
function _23ed08cf9143f50a8613b4157c0cd947($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/dfca99e65dabbe4bf84356b3563ab2ae.php'); ?>
<?php require_once $__blaze->compiledPath.'/dfca99e65dabbe4bf84356b3563ab2ae.php'; ?>
<?php $__attrsdfca99e65dabbe4bf84356b3563ab2ae = ['attributes' => $fieldAttributes]; ?>
<?php $__blaze->pushData($__attrsdfca99e65dabbe4bf84356b3563ab2ae); ?>
<?php $slotsdfca99e65dabbe4bf84356b3563ab2ae = []; ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/9bb81fbcaddf33adf0644786d57b3be1.php'); ?>
<?php require_once $__blaze->compiledPath.'/9bb81fbcaddf33adf0644786d57b3be1.php'; ?>
<?php $__attrs9bb81fbcaddf33adf0644786d57b3be1 = ['attributes' => $labelAttributes]; ?>
<?php $__blaze->pushData($__attrs9bb81fbcaddf33adf0644786d57b3be1); ?>
<?php $slots9bb81fbcaddf33adf0644786d57b3be1 = []; ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $slots9bb81fbcaddf33adf0644786d57b3be1['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots9bb81fbcaddf33adf0644786d57b3be1); ?>
<?php _9bb81fbcaddf33adf0644786d57b3be1($__blaze, $__attrs9bb81fbcaddf33adf0644786d57b3be1, $slots9bb81fbcaddf33adf0644786d57b3be1, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/cb0b14f7462ea36a114c8ce5946f62bc.php'); ?>
<?php require_once $__blaze->compiledPath.'/cb0b14f7462ea36a114c8ce5946f62bc.php'; ?>
<?php $__attrscb0b14f7462ea36a114c8ce5946f62bc = ['attributes' => $descriptionAttributes]; ?>
<?php $__blaze->pushData($__attrscb0b14f7462ea36a114c8ce5946f62bc); ?>
<?php $slotscb0b14f7462ea36a114c8ce5946f62bc = []; ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $slotscb0b14f7462ea36a114c8ce5946f62bc['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotscb0b14f7462ea36a114c8ce5946f62bc); ?>
<?php _cb0b14f7462ea36a114c8ce5946f62bc($__blaze, $__attrscb0b14f7462ea36a114c8ce5946f62bc, $slotscb0b14f7462ea36a114c8ce5946f62bc, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->all()]); ?>
        <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/a4b16ae05c9c34387756971f52d8cef3.php'); ?>
<?php require_once $__blaze->compiledPath.'/a4b16ae05c9c34387756971f52d8cef3.php'; ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _a4b16ae05c9c34387756971f52d8cef3($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/cb0b14f7462ea36a114c8ce5946f62bc.php'); ?>
<?php require_once $__blaze->compiledPath.'/cb0b14f7462ea36a114c8ce5946f62bc.php'; ?>
<?php $__attrscb0b14f7462ea36a114c8ce5946f62bc = ['attributes' => $descriptionAttributes]; ?>
<?php $__blaze->pushData($__attrscb0b14f7462ea36a114c8ce5946f62bc); ?>
<?php $slotscb0b14f7462ea36a114c8ce5946f62bc = []; ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $slotscb0b14f7462ea36a114c8ce5946f62bc['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotscb0b14f7462ea36a114c8ce5946f62bc); ?>
<?php _cb0b14f7462ea36a114c8ce5946f62bc($__blaze, $__attrscb0b14f7462ea36a114c8ce5946f62bc, $slotscb0b14f7462ea36a114c8ce5946f62bc, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $slotsdfca99e65dabbe4bf84356b3563ab2ae['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotsdfca99e65dabbe4bf84356b3563ab2ae); ?>
<?php _dfca99e65dabbe4bf84356b3563ab2ae($__blaze, $__attrsdfca99e65dabbe4bf84356b3563ab2ae, $slotsdfca99e65dabbe4bf84356b3563ab2ae, ['attributes'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\with-field.blade.php ENDPATH**/ ?>
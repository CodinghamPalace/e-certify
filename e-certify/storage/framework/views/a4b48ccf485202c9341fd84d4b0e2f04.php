<?php # [BlazeFolded]:{flux::icon}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php}:{1772508755} ?>
<?php
if (!function_exists('_a4b48ccf485202c9341fd84d4b0e2f04')):
function _a4b48ccf485202c9341fd84d4b0e2f04($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'right',
    'placeholder' => __('Search...'),
    'tooltipKbd' => null,
    'tooltip' => null,
    'kbd' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$placeholder ??= $attributes['placeholder'] ?? $__defaults['placeholder']; unset($attributes['placeholder']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
unset($__defaults);
?>

<?php
$tooltip = $tooltip ?? $placeholder;

$tooltipKbd ??= $kbd;

$tooltipClasses = Flux::classes()
    ->add('w-full')
    ->add('in-data-flux-sidebar-header:in-data-flux-sidebar-collapsed-desktop:in-data-flux-sidebar-active:hidden')
    ;

$classes = Flux::classes()
    ->add('h-10 py-2 px-3 w-full rounded-lg disabled:shadow-none dark:shadow-none appearance-none text-base sm:text-sm leading-[1.375rem] bg-zinc-800/5 dark:bg-white/10 dark:disabled:bg-white/[7%] text-zinc-700 placeholder-zinc-500 disabled:placeholder-zinc-400 dark:text-zinc-200 dark:placeholder-white/60 dark:disabled:placeholder-white/40 border-0 relative flex items-center gap-3')
    ->add('in-data-flux-sidebar-on-mobile:h-10 in-data-flux-sidebar-collapsed-desktop:px-3')
    ->add('in-data-flux-sidebar-header:in-data-flux-sidebar-collapsed-desktop:in-data-flux-sidebar-active:hidden')
    ;
?>

<?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'); ?>
<?php require_once $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'; ?>
<?php $__attrs1a9a3fb2077fb855a54c2e2bd2577e74 = ['position' => $tooltipPosition,'class' => $tooltipClasses]; ?>
<?php $__blaze->pushData($__attrs1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php $slots1a9a3fb2077fb855a54c2e2bd2577e74 = []; ?>
<?php ob_start(); ?>
    <button
        <?php echo e($attributes->class($classes)); ?>

        type="button"
        data-flux-sidebar-search
    >
        <div class="flex items-center justify-center text-xs text-zinc-400/75 start-0">
            <svg class="shrink-0 [:where(&amp;)]:size-6 size-4" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
</svg>

        

        </div>

        <div class="in-data-flux-sidebar-collapsed-desktop:hidden block self-center text-start flex-1 font-medium text-zinc-400 dark:text-white/40">
            <?php echo e($placeholder); ?>

        </div>

        <?php if ($kbd): ?>
            <div class="in-data-flux-sidebar-collapsed-desktop:hidden absolute top-0 bottom-0 flex items-center justify-center text-xs text-zinc-400/75 pe-4 end-0">
                <?php echo e($kbd); ?>

            </div>
        <?php endif; ?>
    </button>

    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/7dfc728ad0354c9cbb3400932515bc88.php'); ?>
<?php require_once $__blaze->compiledPath.'/7dfc728ad0354c9cbb3400932515bc88.php'; ?>
<?php $__attrs7dfc728ad0354c9cbb3400932515bc88 = ['kbd' => $tooltipKbd,'class' => 'not-in-data-flux-sidebar-collapsed-desktop:hidden cursor-default']; ?>
<?php $__blaze->pushData($__attrs7dfc728ad0354c9cbb3400932515bc88); ?>
<?php $slots7dfc728ad0354c9cbb3400932515bc88 = []; ?>
<?php ob_start(); ?>
        <?php echo e($tooltip); ?>

    <?php $slots7dfc728ad0354c9cbb3400932515bc88['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots7dfc728ad0354c9cbb3400932515bc88); ?>
<?php _7dfc728ad0354c9cbb3400932515bc88($__blaze, $__attrs7dfc728ad0354c9cbb3400932515bc88, $slots7dfc728ad0354c9cbb3400932515bc88, ['kbd'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
<?php $slots1a9a3fb2077fb855a54c2e2bd2577e74['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php _1a9a3fb2077fb855a54c2e2bd2577e74($__blaze, $__attrs1a9a3fb2077fb855a54c2e2bd2577e74, $slots1a9a3fb2077fb855a54c2e2bd2577e74, ['position', 'class'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?><?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\sidebar\search.blade.php ENDPATH**/ ?>
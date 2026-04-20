<?php
if (!function_exists('_0c8e0dc3379877857a7a6d3563b323ae')):
function _0c8e0dc3379877857a7a6d3563b323ae($__blaze, $__data = [], $__slots = [], $__bound = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::sanitized($__data, $__bound);
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP); unset($__data, $__bound);
ob_start();
?>


<?php
$__defaults = [
    'color' => null,
];
$color ??= $attributes['color'] ?? $__defaults['color']; unset($attributes['color']);
unset($__defaults);
?>

<?php
$trackClasses = Flux::classes()
    ->add('h-1.5 relative w-full overflow-hidden bg-zinc-200 dark:bg-white/10')
    ->add('[print-color-adjust:exact]')
    ->add('rounded-full')
    ;

$barClasses = Flux::classes()
    ->add('h-full rounded-full transition-[width] duration-300 ease-out')
    ->add(match ($color) {
        'red'     => 'bg-red-600 dark:bg-red-400',
        'orange'  => 'bg-orange-600 dark:bg-orange-400',
        'amber'   => 'bg-amber-600 dark:bg-amber-400',
        'yellow'  => 'bg-yellow-600 dark:bg-yellow-400',
        'lime'    => 'bg-lime-600 dark:bg-lime-400',
        'green'   => 'bg-green-600 dark:bg-green-400',
        'emerald' => 'bg-emerald-600 dark:bg-emerald-400',
        'teal'    => 'bg-teal-600 dark:bg-teal-400',
        'cyan'    => 'bg-cyan-600 dark:bg-cyan-400',
        'sky'     => 'bg-sky-600 dark:bg-sky-400',
        'blue'    => 'bg-blue-600 dark:bg-blue-400',
        'indigo'  => 'bg-indigo-600 dark:bg-indigo-400',
        'violet'  => 'bg-violet-600 dark:bg-violet-400',
        'purple'  => 'bg-purple-600 dark:bg-purple-400',
        'fuchsia' => 'bg-fuchsia-600 dark:bg-fuchsia-400',
        'pink'    => 'bg-pink-600 dark:bg-pink-400',
        'rose'    => 'bg-rose-600 dark:bg-rose-400',
        default   => 'bg-accent',
    })
    ;
?>

<ui-progress <?php echo e($attributes->class($trackClasses)); ?> data-flux-progress>
    <div class="<?php echo e($barClasses); ?>" style="width: var(--flux-progress-percentage)"></div>
</ui-progress>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\stubs\resources\views\flux\progress.blade.php ENDPATH**/ ?>
<?php # [BlazeFolded]:{flux::navbar}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/navbar/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::navbar}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/navbar/index.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::header}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/header.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::sidebar.header}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/header.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::sidebar.nav}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/nav.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::sidebar.nav}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/nav.blade.php}:{1772508755} ?>
<?php # [BlazeFolded]:{flux::sidebar}:{C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/index.blade.php}:{1772508755} ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
    <head>
        <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <?php $__blaze->pushData(['container' => '1', 'class' => 'border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900']); $__env->pushConsumableComponentData(['container' => '1', 'class' => 'border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900']); ?><header class="[grid-area:header] z-10 min-h-14  border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900" data-flux-header>
            <div class="mx-auto w-full h-full [:where(&)]:max-w-7xl px-6 lg:px-8 flex items-center">
            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/toggle.blade.php', $__blaze->compiledPath.'/bdb1764295bc664f45f8501e77e261b3.php'); ?>
<?php require_once $__blaze->compiledPath.'/bdb1764295bc664f45f8501e77e261b3.php'; ?>
<?php $__blaze->pushData(['class' => 'lg:hidden mr-2','icon' => 'bars-2','inset' => 'left']); ?>
<?php _bdb1764295bc664f45f8501e77e261b3($__blaze, ['class' => 'lg:hidden mr-2','icon' => 'bars-2','inset' => 'left'], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>

            <?php if (isset($component)) { $__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo','data' => ['href' => ''.e(route('dashboard')).'','wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('dashboard')).'','wire:navigate' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3)): ?>
<?php $attributes = $__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3; ?>
<?php unset($__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3)): ?>
<?php $component = $__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3; ?>
<?php unset($__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3); ?>
<?php endif; ?>

            <?php $__blaze->pushData(['class' => '-mb-px max-lg:hidden']); $__env->pushConsumableComponentData(['class' => '-mb-px max-lg:hidden']); ?><nav class="flex items-center gap-1 py-3  -mb-px max-lg:hidden" data-flux-navbar>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/navbar/item.blade.php', $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'); ?>
<?php require_once $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'; ?>
<?php $__attrs8988cc8c5ba9176a0a576140d1dbf6cb = ['icon' => 'layout-grid','href' => route('dashboard'),'current' => request()->routeIs('dashboard'),'wire:navigate' => true]; ?>
<?php $__blaze->pushData($__attrs8988cc8c5ba9176a0a576140d1dbf6cb); ?>
<?php $slots8988cc8c5ba9176a0a576140d1dbf6cb = []; ?>
<?php ob_start(); ?>
                    <?php echo e(__('Dashboard')); ?>

                <?php $slots8988cc8c5ba9176a0a576140d1dbf6cb['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots8988cc8c5ba9176a0a576140d1dbf6cb); ?>
<?php _8988cc8c5ba9176a0a576140d1dbf6cb($__blaze, $__attrs8988cc8c5ba9176a0a576140d1dbf6cb, $slots8988cc8c5ba9176a0a576140d1dbf6cb, ['href', 'current', 'wire:navigate'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</nav>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?>

            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/spacer.blade.php', $__blaze->compiledPath.'/5fcecea94329ce6beb570a281df6f4fb.php'); ?>
<?php require_once $__blaze->compiledPath.'/5fcecea94329ce6beb570a281df6f4fb.php'; ?>
<?php $__blaze->pushData([]); ?>
<?php _5fcecea94329ce6beb570a281df6f4fb($__blaze, [], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>

            <?php $__blaze->pushData(['class' => 'me-1.5 space-x-0.5 rtl:space-x-reverse py-0!']); $__env->pushConsumableComponentData(['class' => 'me-1.5 space-x-0.5 rtl:space-x-reverse py-0!']); ?><nav class="flex items-center gap-1 py-3  me-1.5 space-x-0.5 rtl:space-x-reverse py-0!" data-flux-navbar>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'); ?>
<?php require_once $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'; ?>
<?php $__attrs1a9a3fb2077fb855a54c2e2bd2577e74 = ['content' => __('Search'),'position' => 'bottom']; ?>
<?php $__blaze->pushData($__attrs1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php $slots1a9a3fb2077fb855a54c2e2bd2577e74 = []; ?>
<?php ob_start(); ?>
                    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/navbar/item.blade.php', $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'); ?>
<?php require_once $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'; ?>
<?php $__blaze->pushData(['class' => '!h-10 [&>div>svg]:size-5','icon' => 'magnifying-glass','href' => '#','label' => __('Search')]); ?>
<?php _8988cc8c5ba9176a0a576140d1dbf6cb($__blaze, ['class' => '!h-10 [&>div>svg]:size-5','icon' => 'magnifying-glass','href' => '#','label' => __('Search')], [], ['label'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                <?php $slots1a9a3fb2077fb855a54c2e2bd2577e74['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php _1a9a3fb2077fb855a54c2e2bd2577e74($__blaze, $__attrs1a9a3fb2077fb855a54c2e2bd2577e74, $slots1a9a3fb2077fb855a54c2e2bd2577e74, ['content'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'); ?>
<?php require_once $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'; ?>
<?php $__attrs1a9a3fb2077fb855a54c2e2bd2577e74 = ['content' => __('Repository'),'position' => 'bottom']; ?>
<?php $__blaze->pushData($__attrs1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php $slots1a9a3fb2077fb855a54c2e2bd2577e74 = []; ?>
<?php ob_start(); ?>
                    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/navbar/item.blade.php', $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'); ?>
<?php require_once $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'; ?>
<?php $__blaze->pushData(['class' => 'h-10 max-lg:hidden [&>div>svg]:size-5','icon' => 'folder-git-2','href' => 'https://github.com/laravel/livewire-starter-kit','target' => '_blank','label' => __('Repository')]); ?>
<?php _8988cc8c5ba9176a0a576140d1dbf6cb($__blaze, ['class' => 'h-10 max-lg:hidden [&>div>svg]:size-5','icon' => 'folder-git-2','href' => 'https://github.com/laravel/livewire-starter-kit','target' => '_blank','label' => __('Repository')], [], ['label'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                <?php $slots1a9a3fb2077fb855a54c2e2bd2577e74['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php _1a9a3fb2077fb855a54c2e2bd2577e74($__blaze, $__attrs1a9a3fb2077fb855a54c2e2bd2577e74, $slots1a9a3fb2077fb855a54c2e2bd2577e74, ['content'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'); ?>
<?php require_once $__blaze->compiledPath.'/1a9a3fb2077fb855a54c2e2bd2577e74.php'; ?>
<?php $__attrs1a9a3fb2077fb855a54c2e2bd2577e74 = ['content' => __('Documentation'),'position' => 'bottom']; ?>
<?php $__blaze->pushData($__attrs1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php $slots1a9a3fb2077fb855a54c2e2bd2577e74 = []; ?>
<?php ob_start(); ?>
                    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/navbar/item.blade.php', $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'); ?>
<?php require_once $__blaze->compiledPath.'/8988cc8c5ba9176a0a576140d1dbf6cb.php'; ?>
<?php $__blaze->pushData(['class' => 'h-10 max-lg:hidden [&>div>svg]:size-5','icon' => 'book-open-text','href' => 'https://laravel.com/docs/starter-kits#livewire','target' => '_blank','label' => __('Documentation')]); ?>
<?php _8988cc8c5ba9176a0a576140d1dbf6cb($__blaze, ['class' => 'h-10 max-lg:hidden [&>div>svg]:size-5','icon' => 'book-open-text','href' => 'https://laravel.com/docs/starter-kits#livewire','target' => '_blank','label' => __('Documentation')], [], ['label'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                <?php $slots1a9a3fb2077fb855a54c2e2bd2577e74['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots1a9a3fb2077fb855a54c2e2bd2577e74); ?>
<?php _1a9a3fb2077fb855a54c2e2bd2577e74($__blaze, $__attrs1a9a3fb2077fb855a54c2e2bd2577e74, $slots1a9a3fb2077fb855a54c2e2bd2577e74, ['content'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</nav>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?>

            <?php if (isset($component)) { $__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.desktop-user-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('desktop-user-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a)): ?>
<?php $attributes = $__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a; ?>
<?php unset($__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a)): ?>
<?php $component = $__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a; ?>
<?php unset($__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a); ?>
<?php endif; ?>
        </div>
    </header>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?>

        <!-- Mobile Menu -->
        <ui-sidebar-toggle class="z-20 fixed inset-0 bg-black/10 hidden data-flux-sidebar-on-mobile:not-data-flux-sidebar-collapsed-mobile:block" data-flux-sidebar-backdrop></ui-sidebar-toggle>

<ui-sidebar
    class="[grid-area:sidebar] z-1 flex flex-col gap-4 [:where(&amp;)]:w-64 p-4 data-flux-sidebar-collapsed-desktop:w-14 data-flux-sidebar-collapsed-desktop:px-2 data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:data-flux-sidebar-collapsed-desktop:cursor-w-resize max-lg:data-flux-sidebar-cloak:hidden data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:-translate-x-full data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:rtl:translate-x-full z-20! data-flux-sidebar-on-mobile:start-0! data-flux-sidebar-on-mobile:fixed! data-flux-sidebar-on-mobile:top-0! data-flux-sidebar-on-mobile:min-h-dvh! data-flux-sidebar-on-mobile:max-h-dvh! max-h-dvh overflow-y-auto overscroll-contain lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900" x-init="$el.classList.add(&#039;transition-transform&#039;)"
     collapsible="mobile"          sticky     x-data
    data-flux-sidebar-cloak
    data-flux-sidebar
>
    <div class="flex items-center justify-between gap-2 min-h-10" data-flux-sidebar-header>
    <?php if (isset($component)) { $__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo','data' => ['sidebar' => true,'href' => ''.e(route('dashboard')).'','wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sidebar' => true,'href' => ''.e(route('dashboard')).'','wire:navigate' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3)): ?>
<?php $attributes = $__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3; ?>
<?php unset($__attributesOriginal7b17d80ff7900603fe9e5f0b453cc7c3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3)): ?>
<?php $component = $__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3; ?>
<?php unset($__componentOriginal7b17d80ff7900603fe9e5f0b453cc7c3); ?>
<?php endif; ?>
                <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/collapse.blade.php', $__blaze->compiledPath.'/40c87328c68c5ffc02f97228ff62e4c2.php'); ?>
<?php require_once $__blaze->compiledPath.'/40c87328c68c5ffc02f97228ff62e4c2.php'; ?>
<?php $__blaze->pushData(['class' => 'in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2']); ?>
<?php _40c87328c68c5ffc02f97228ff62e4c2($__blaze, ['class' => 'in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2'], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</div>

            <nav class="flex flex-col overflow-visible min-h-auto" data-flux-sidebar-nav>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/group.blade.php', $__blaze->compiledPath.'/5891fee25fef92538a62fbc871a19166.php'); ?>
<?php require_once $__blaze->compiledPath.'/5891fee25fef92538a62fbc871a19166.php'; ?>
<?php $__attrs5891fee25fef92538a62fbc871a19166 = ['heading' => __('Platform')]; ?>
<?php $__blaze->pushData($__attrs5891fee25fef92538a62fbc871a19166); ?>
<?php $slots5891fee25fef92538a62fbc871a19166 = []; ?>
<?php ob_start(); ?>
                    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/dedfe7ce296f3375d23eb70ff05d622f.php'); ?>
<?php require_once $__blaze->compiledPath.'/dedfe7ce296f3375d23eb70ff05d622f.php'; ?>
<?php $__attrsdedfe7ce296f3375d23eb70ff05d622f = ['icon' => 'layout-grid','href' => route('dashboard'),'current' => request()->routeIs('dashboard'),'wire:navigate' => true]; ?>
<?php $__blaze->pushData($__attrsdedfe7ce296f3375d23eb70ff05d622f); ?>
<?php $slotsdedfe7ce296f3375d23eb70ff05d622f = []; ?>
<?php ob_start(); ?>
                        <?php echo e(__('Dashboard')); ?>

                    <?php $slotsdedfe7ce296f3375d23eb70ff05d622f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotsdedfe7ce296f3375d23eb70ff05d622f); ?>
<?php _dedfe7ce296f3375d23eb70ff05d622f($__blaze, $__attrsdedfe7ce296f3375d23eb70ff05d622f, $slotsdedfe7ce296f3375d23eb70ff05d622f, ['href', 'current', 'wire:navigate'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                <?php $slots5891fee25fef92538a62fbc871a19166['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slots5891fee25fef92538a62fbc871a19166); ?>
<?php _5891fee25fef92538a62fbc871a19166($__blaze, $__attrs5891fee25fef92538a62fbc871a19166, $slots5891fee25fef92538a62fbc871a19166, ['heading'], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</nav>


            <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/spacer.blade.php', $__blaze->compiledPath.'/5fcecea94329ce6beb570a281df6f4fb.php'); ?>
<?php require_once $__blaze->compiledPath.'/5fcecea94329ce6beb570a281df6f4fb.php'; ?>
<?php $__blaze->pushData([]); ?>
<?php _5fcecea94329ce6beb570a281df6f4fb($__blaze, [], [], [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>

            <nav class="flex flex-col overflow-visible min-h-auto" data-flux-sidebar-nav>
    <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/dedfe7ce296f3375d23eb70ff05d622f.php'); ?>
<?php require_once $__blaze->compiledPath.'/dedfe7ce296f3375d23eb70ff05d622f.php'; ?>
<?php $__attrsdedfe7ce296f3375d23eb70ff05d622f = ['icon' => 'folder-git-2','href' => 'https://github.com/laravel/livewire-starter-kit','target' => '_blank']; ?>
<?php $__blaze->pushData($__attrsdedfe7ce296f3375d23eb70ff05d622f); ?>
<?php $slotsdedfe7ce296f3375d23eb70ff05d622f = []; ?>
<?php ob_start(); ?>
                    <?php echo e(__('Repository')); ?>

                <?php $slotsdedfe7ce296f3375d23eb70ff05d622f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotsdedfe7ce296f3375d23eb70ff05d622f); ?>
<?php _dedfe7ce296f3375d23eb70ff05d622f($__blaze, $__attrsdedfe7ce296f3375d23eb70ff05d622f, $slotsdedfe7ce296f3375d23eb70ff05d622f, [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
                <?php $__blaze->ensureCompiled('C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/dedfe7ce296f3375d23eb70ff05d622f.php'); ?>
<?php require_once $__blaze->compiledPath.'/dedfe7ce296f3375d23eb70ff05d622f.php'; ?>
<?php $__attrsdedfe7ce296f3375d23eb70ff05d622f = ['icon' => 'book-open-text','href' => 'https://laravel.com/docs/starter-kits#livewire','target' => '_blank']; ?>
<?php $__blaze->pushData($__attrsdedfe7ce296f3375d23eb70ff05d622f); ?>
<?php $slotsdedfe7ce296f3375d23eb70ff05d622f = []; ?>
<?php ob_start(); ?>
                    <?php echo e(__('Documentation')); ?>

                <?php $slotsdedfe7ce296f3375d23eb70ff05d622f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($slotsdedfe7ce296f3375d23eb70ff05d622f); ?>
<?php _dedfe7ce296f3375d23eb70ff05d622f($__blaze, $__attrsdedfe7ce296f3375d23eb70ff05d622f, $slotsdedfe7ce296f3375d23eb70ff05d622f, [], isset($this) ? $this : null); ?>
<?php $__blaze->popData(); ?>
</nav>
</ui-sidebar>


        <?php echo e($slot); ?>


        <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

    </body>
</html>
<?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\resources\views\layouts\app\header.blade.php ENDPATH**/ ?>
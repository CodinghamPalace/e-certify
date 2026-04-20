<?php if (isset($component)) { $__componentOriginal08b8a564843783787e0bee3357e24f38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08b8a564843783787e0bee3357e24f38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::auth','data' => ['title' => __('Admin Registration — e-Certify | DICT Quezon 4A')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Admin Registration — e-Certify | DICT Quezon 4A'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
        <div class="login-alert alert alert-danger d-flex align-items-center mb-3" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <form method="POST" action="<?php echo e(route('register.store')); ?>" novalidate>
        <?php echo csrf_field(); ?>

        
        <div class="mb-1">
            <label class="form-label" for="regName">Full Name</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-person-fill input-icon"></i>
            <input
                type="text"
                id="regName"
                name="name"
                class="form-control-custom <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Juan dela Cruz"
                value="<?php echo e(old('name')); ?>"
                autocomplete="name"
                autofocus
                required
            />
        </div>

        
        <div class="mb-1">
            <label class="form-label" for="regEmail">Email Address</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-envelope-fill input-icon"></i>
            <input
                type="email"
                id="regEmail"
                name="email"
                class="form-control-custom <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="admin@dict.gov.ph"
                value="<?php echo e(old('email')); ?>"
                autocomplete="email"
                required
            />
        </div>

        
        <div class="mb-1">
            <label class="form-label" for="regPassword">Password</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-lock-fill input-icon"></i>
            <input
                type="password"
                id="regPassword"
                name="password"
                class="form-control-custom <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Create a strong password"
                autocomplete="new-password"
                style="padding-right: 42px;"
                required
            />
            <button
                type="button"
                class="toggle-pw"
                id="togglePwReg"
                aria-label="Show/hide password"
                tabindex="-1"
            >
                <i class="bi bi-eye-fill" id="togglePwRegIcon"></i>
            </button>
        </div>

        
        <div class="mb-1">
            <label class="form-label" for="regPasswordConfirm">Confirm Password</label>
        </div>
        <div class="input-group-custom">
            <i class="bi bi-lock-fill input-icon"></i>
            <input
                type="password"
                id="regPasswordConfirm"
                name="password_confirmation"
                class="form-control-custom <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Re-enter your password"
                autocomplete="new-password"
                style="padding-right: 42px;"
                required
            />
            <button
                type="button"
                class="toggle-pw"
                id="togglePwConfirm"
                aria-label="Show/hide password"
                tabindex="-1"
            >
                <i class="bi bi-eye-fill" id="togglePwConfirmIcon"></i>
            </button>
        </div>

        
        <button type="submit" class="btn-login mt-2">
            <i class="bi bi-person-plus-fill"></i>
            <span>Create Admin Account</span>
        </button>

    </form>

    
    <div class="security-note mt-3">
        Already have an account?&nbsp;
        <a href="<?php echo e(route('login')); ?>" class="forgot-link">Sign in</a>
    </div>

    <script>
      [['togglePwReg', 'regPassword', 'togglePwRegIcon'],
       ['togglePwConfirm', 'regPasswordConfirm', 'togglePwConfirmIcon']]
        .forEach(([btnId, inputId, iconId]) => {
          const btn   = document.getElementById(btnId);
          const input = document.getElementById(inputId);
          const icon  = document.getElementById(iconId);
          if (btn && input) {
            btn.addEventListener('click', () => {
              const hidden = input.type === 'password';
              input.type   = hidden ? 'text' : 'password';
              icon.className = hidden ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
            });
          }
        });
    </script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $attributes = $__attributesOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__attributesOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08b8a564843783787e0bee3357e24f38)): ?>
<?php $component = $__componentOriginal08b8a564843783787e0bee3357e24f38; ?>
<?php unset($__componentOriginal08b8a564843783787e0bee3357e24f38); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\resources\views/livewire/auth/register.blade.php ENDPATH**/ ?>
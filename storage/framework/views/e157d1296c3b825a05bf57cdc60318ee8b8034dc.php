<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">

        <div class="row">
          <div class="col-lg-6 d-none d-lg-block login-aside">
            <div class="bg-login-image"></div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><?php echo e(__('auth.welcome')); ?></h1>
                <?php if(isDemo()): ?>
                <div class="alert alert-info">
                  <div>Demo accounts</div>
                  <small class="d-inline-block">Admin : admin@demo.com / 12345678</small>
                  <small class="d-inline-block">Agent : agent@demo.com / 12345678</small>
                  <small class="d-inline-block">Customer : customer@demo.com / 12345678</small>
                </div>
                <?php endif; ?>
              </div>

              <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>

              <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">

                  <input id="email" type="email"
                    class="form-control form-control-user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                    placeholder="<?php echo e(__('E-Mail Address')); ?>..." value="<?php echo e(old('email')); ?>" required autocomplete="email"
                    autofocus>

                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
                <div class="form-group">
                  <input id="password" type="password"
                    class="form-control form-control-user <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="<?php echo e(__('Password')); ?>..." name="password" required autocomplete="current-password">
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                      <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label class="custom-control-label" for="remember"><?php echo e(__('auth.remember')); ?></label>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      <?php echo e(__('auth.login')); ?>

                    </button>
                  </div>
                  <div class="col-12 mt-3">
                    <?php if(Route::has('register')): ?>
                    <?php echo e(__("auth.dont_have_an_account")); ?> 
                    <a href="<?php echo e(route('register')); ?>"><?php echo e(__('auth.register_here')); ?> </a>
                    <?php endif; ?>
                  </div>
                </div>

                <?php if(isOAuthEnabled()): ?>
                <div class="mt-4 mb-1 text-capitalize"><?php echo e(__('Login with')); ?>: </div>
                
                <?php $__currentLoopData = OAuthProviders(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OAuthProvider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('auth.socialite',  ['provider' => $OAuthProvider])); ?>" class="btn btn-outline-primary rounded-pill btn-sm mb-2 text-capitalize">
                  <i class="fab fa-<?php echo e($OAuthProvider); ?>"></i> <?php echo e($OAuthProvider); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?> 
                

              </form>
              <hr class="m-0 mt-4">
              <div class="text-right">
                <?php if(Route::has('password.request')): ?>
                <a class="my-4 small text-secondary" href="<?php echo e(route('password.request')); ?>"><?php echo e(__('auth.forgot_password')); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/auth/login.blade.php ENDPATH**/ ?>
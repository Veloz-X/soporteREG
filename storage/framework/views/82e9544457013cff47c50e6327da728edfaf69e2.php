

<?php $__env->startSection('content'); ?>   
<div class="container page-profile">
  <form method="POST" action="">
  <?php echo csrf_field(); ?>
  <div class="row">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header card-header-divider">
                  <div class="card-sub-title"><?php echo e(__('General Information')); ?></div>
              </div>
              <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label for="email"><?php echo e(__('Email')); ?></label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e($user->email); ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="name"><?php echo e(__('Name')); ?></label>
                      <input type="name" class="form-control" name="name" id="name" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($user->name); ?>">
                    </div>
                    
                    

                    <div class="form-group col-12">
                      <label for="locale"><?php echo e(__('Language')); ?></label>
                      <select name="locale" class="form-control">
                        <?php $__currentLoopData = availableLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langK => $langV): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($langK); ?>" <?php echo e(( old("locale", $user->locale) == $langK ? "selected":"")); ?>><?php echo e($langV); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>

                    <div class="form-group col-12">
                      <label for="name"><?php echo e(__('Signature')); ?></label>
                      <textarea class="form-control" name="signature" id="signature" placeholder="<?php echo e(__('signature')); ?>"><?php echo e($user->signature); ?></textarea>
                      <small id="signatureHelp" class="form-text text-muted"><?php echo e(__('profile_signature_max_length')); ?></small>
                    </div>
                    
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="card">
              <div class="card-header card-header-divider">
                  <?php echo e(__('Change password')); ?>

              </div>
              <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label for="current_password"><?php echo e(__('Current password')); ?>:</label>
                      <input type="password" class="form-control" name="current_password" id="current_password" placeholder="<?php echo e(__('Current password')); ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="password"><?php echo e(__('New password')); ?>:</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo e(__('New password')); ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="password_confirmation"><?php echo e(__('Re-type new password')); ?>:</label>
                      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="<?php echo e(__('Re-type new password')); ?>">
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-12">
      <input class="btn btn-primary float-right mt-3" type="submit" value="<?php echo e(__('Save')); ?>">
      </div>
  </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('my_account.base', ['page' => 'profile', 'pageTitle', __('Profile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/profile/index.blade.php ENDPATH**/ ?>
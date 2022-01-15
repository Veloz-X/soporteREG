

<?php $__env->startSection('content'); ?>
<div class="form-group">
    <label for="pc"><?php echo e(__('Enter your purchase code')); ?></label>
    <input id="pc" type="text" placeholder="Your Envato purchase code" class="form-control <?php $__errorArgs = ['pc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pc" value="<?php echo e(old('pc')); ?>" required autocomplete="pc">
    <?php $__errorArgs = ['pc'];
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
    <small id="pcHelp" class="form-text text-muted">
        Purchase code is available on your Envato account under the downloads page
        <a href="https://help.market.envato.com/hc/en-us/articles/202822600" target="_blank">
            Where Is My Purchase Code?
        </a>
    </small>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layouts.master', [
    'step_text' => 'Product license',
    'action' => route('install.product_license'),
    'step' => 3
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/install/productLicense.blade.php ENDPATH**/ ?>
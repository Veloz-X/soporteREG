

<?php $__env->startSection('content'); ?>
    <view-user userid="<?php echo e($user->id); ?>" type="customers"><div class="preloader"></div></view-user>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', ['page' => 'customers', 'pageTitle' => __('Customer')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/customers/profile.blade.php ENDPATH**/ ?>
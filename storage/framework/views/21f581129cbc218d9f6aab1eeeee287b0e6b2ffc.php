

<?php $__env->startSection('content'); ?>
    <view-user userid="<?php echo e($user->id); ?>" type="employees"><div class="preloader"></div></view-user>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', ['page' => 'employees', 'pageTitle' => __('Employee')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/employees/profile.blade.php ENDPATH**/ ?>
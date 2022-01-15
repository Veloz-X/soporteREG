<?php $__env->startSection('content'); ?>
<div id="appm-customzer">
    <appm-customizer><div class="preloader"></div></appm-customizer>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
##parent-placeholder-26ec8d00fb6b55466b3a115f1d559422a7fa7aac##
<link href="<?php echo e(asset('assets/modules/customizer/css/customizer.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_footer'); ?>
##parent-placeholder-87dbaae7a08e17b2d198b71dbe9cdcd5c89f2864##
<script src="<?php echo e(asset('assets/modules/customizer/js/customizer.js')); ?>" async ></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base',
[
'page' => 'customizer',
'pageTitle' => __('Customizer')
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/Modules/Customizer/Resources/views/index.blade.php ENDPATH**/ ?>
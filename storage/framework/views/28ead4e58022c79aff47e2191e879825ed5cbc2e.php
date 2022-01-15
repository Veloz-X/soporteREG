<?php $__env->startSection('content'); ?>
<div id="appm-translation">
        <?php echo $__env->make('translation::notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('body'); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
##parent-placeholder-26ec8d00fb6b55466b3a115f1d559422a7fa7aac##
<link href="<?php echo e(asset('assets/modules/translation/css/translation.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_footer'); ?>
##parent-placeholder-87dbaae7a08e17b2d198b71dbe9cdcd5c89f2864##
<script src="<?php echo e(asset('assets/modules/translation/js/translation.js?v=0'.config('vars.asset_version'))); ?>" defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base',
[
'page' => 'translation',
'pageTitle' => __('Translation')
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/Modules/Translation/Resources/views/layout.blade.php ENDPATH**/ ?>
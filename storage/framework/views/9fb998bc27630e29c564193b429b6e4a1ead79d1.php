


<?php $__env->startSection('page-heading'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
<div class="container page-ticket"> 
    <mya-ticket :ticketid="<?php echo e($ticket->id); ?>"></mya-ticket>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head_assets'); ?>
##parent-placeholder-55bd8469f48a7dac17d600d63d658c7679f05187##
<link href="<?php echo e(asset('assets/libs/vue-select/vue-select.min.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('assets/libs/vue-select/vue-select.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('my_account.base', ['page' => 'view_ticket', 'pageTitle' => __('My ticket')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/tickets/view.blade.php ENDPATH**/ ?>
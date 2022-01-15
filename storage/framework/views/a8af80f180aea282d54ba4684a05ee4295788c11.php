

<?php $__env->startSection('content'); ?> 
<div class="container page-ticket"> 
<div class="row">

    <div class="col-md-12">
        <ticket-list type="<?php echo e(Request::get('type')); ?>" category="<?php echo e(Request::get('category')); ?>" title="Tickets" class="ticket-list-holder"><div class="preloader"></div></ticket-list>
    </div>
    
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head_assets'); ?>
##parent-placeholder-55bd8469f48a7dac17d600d63d658c7679f05187##
<link href="<?php echo e(asset('assets/libs/vue-select/vue-select.min.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('assets/libs/vue-select/vue-select.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', ['page' => 'tickets', 'pageTitle' => __('Tickets')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/ticket/list.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?> 
<div class="container page-ticket"> 
    <my-ticket :ticketid="<?php echo e($ticket->id); ?>" 
        <?php if( Auth::User()->can('delete_ticket_reply') || Auth::User()->can('delete_any_ticket_reply') ): ?>
        :can-delete-reply=true
        <?php else: ?>
        :can-delete-reply=false
        <?php endif; ?>
        <?php if( Auth::User()->can('delete_any_ticket') || Auth::User()->can('delete_ticket') ): ?>
        :can-delete-ticket=true
        <?php else: ?>
        :can-delete-ticket=false
        <?php endif; ?>
    ><div class="preloader"></div></my-ticket>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head_assets'); ?>
##parent-placeholder-55bd8469f48a7dac17d600d63d658c7679f05187##
<link href="<?php echo e(asset('assets/libs/vue-select/vue-select.min.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('assets/libs/vue-select/vue-select.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', ['page' => 'tickets', 'pageTitle' => __('Ticket').' ID #'.$ticket->id.' | '.$ticket->title, 'hideTitle' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/ticket/index.blade.php ENDPATH**/ ?>
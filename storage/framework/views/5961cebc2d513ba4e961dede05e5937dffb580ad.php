

<?php $__env->startSection('content'); ?>   

<div class="row">
    <div class="col-md-12">
        <mya-ticket-list title="My Tickets" class="ticket-list-holder open">
            <div class="preloader"></div>
        </mya-ticket-list>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('my_account.base', ['page' => 'tickets', 'pageTitle', __('Tickets')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/tickets/index.blade.php ENDPATH**/ ?>
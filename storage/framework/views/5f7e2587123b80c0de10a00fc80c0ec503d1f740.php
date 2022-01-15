

<?php $__env->startSection('page-heading'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>   
<div class="container page-ticket-new">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-divider text-capitalize">
                    <h5><?php echo e(__('Create new ticket')); ?></h5>
                </div>
                <div class="card-body">
                    <submit-ticket-form><div class="preloader"></div></submit-ticket-form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('my_account.base', ['page' => 'create_ticket', 'pageTitle' => __('Create new ticket')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/tickets/create.blade.php ENDPATH**/ ?>
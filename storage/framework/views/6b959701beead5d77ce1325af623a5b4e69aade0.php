

<?php $__env->startSection('title', __('Service Unavailable')); ?>
<?php $__env->startSection('code', '503'); ?>

<?php $__env->startSection('message'); ?>
<?php
$downMessage = (array)json_decode(file_get_contents(storage_path('framework/down')), true);

if( $downMessage ){
    if(isset( $downMessage['message'] )){ 
        echo $downMessage['message'];
    }
} else {
    echo __('Service Unavailable');
}
?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('image', asset('assets/img/error-500.svg')); ?>
<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/errors/503.blade.php ENDPATH**/ ?>
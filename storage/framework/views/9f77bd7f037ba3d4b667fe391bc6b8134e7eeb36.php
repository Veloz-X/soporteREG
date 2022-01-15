

<?php $__env->startSection('title', __('Page not found')); ?>
<?php $__env->startSection('code', '404'); ?>
<?php $__env->startSection('message', __("The requested page cannot be found" ?: 'Page not found')); ?>
<?php $__env->startSection('image', asset('assets/img/error-404.svg')); ?>
<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/errors/404.blade.php ENDPATH**/ ?>
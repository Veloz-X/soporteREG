

<?php $__env->startSection('content'); ?>
    <div class="alert alert-success">Congratulations! Installation has been successfully completed</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layouts.master', [
    'step_text' => 'Completed',
    'finish' => route('dashboard'),
    'step' => 6
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/install/finish.blade.php ENDPATH**/ ?>
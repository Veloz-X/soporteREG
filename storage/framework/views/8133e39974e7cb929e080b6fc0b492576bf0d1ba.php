

<?php $__env->startSection('content'); ?>
    <p>The wizard will guide you through the installation steps. In addition, you can always click the Help button of the wizard to obtain assistance during the installation process.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layouts.master', [
    'step_text' => 'Click next to begin the installation',
    'next' => route('install.requirements'),
    'step' => 0
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/install/index.blade.php ENDPATH**/ ?>
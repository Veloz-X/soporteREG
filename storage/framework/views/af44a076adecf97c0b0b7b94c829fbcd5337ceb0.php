

<?php $__env->startSection('content'); ?>
<ul class="list-group mb-2">
    <?php $__currentLoopData = $folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo e($k); ?>

            <?php if( in_array($v, [777, 775, 755]) ): ?>
                <span class="badge badge-success badge-pill"><?php echo e($v); ?></span>
            <?php else: ?>
                <span class="badge badge-danger badge-pill"><?php echo e($v); ?></span>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layouts.master', [
    'step_text' => 'Folder permissions',
    'action' => route('install.folder_permissions'),
    'step' => 2
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/install/folderPermissions.blade.php ENDPATH**/ ?>
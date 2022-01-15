

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('notifications.notifications')); ?></h1>
</div>

<div class="mb-2">
<?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<a class="d-flex align-items-center p-3 text-decoration-none border-bottom" href="<?php echo e(@$notification->data['link']); ?>">
    <div class="mr-2">
        <div class="icon-circle p-2 rounded-circle bg-<?php echo e(@$notification->data['color']); ?>">
            <i class="fas fa-<?php echo e(@$notification->data['icon']); ?> text-white"></i>
        </div>
    </div>
    <div>
        <span class="font-weight-bold"><?php echo e(@$notification->data['text']); ?></span>
        <div class="small text-gray-500"><?php echo e(@$notification->date); ?></div>
    </div>
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="text-center p-5"><?php echo e(__('notifications.no_notifications_yet')); ?></div>
<?php endif; ?>
</div>

<?php echo e($notifications->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('my_account.base', ['page' => 'notifications', 'pageTitle', __('notifications.notifications')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/notifications/index.blade.php ENDPATH**/ ?>
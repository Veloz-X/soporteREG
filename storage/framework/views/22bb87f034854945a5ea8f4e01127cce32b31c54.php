<?php if(Session::has('success')): ?>
    <div class="alert alert-success my-2" role="alert">
        <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <div class="alert alert-danger my-2" role="alert">
        <?php echo Session::get('error'); ?>

    </div>
<?php endif; ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/Modules/Translation/Resources/views/notifications.blade.php ENDPATH**/ ?>
<div>
    
    <select class="form-control" name="<?php echo e($name); ?>" onchange="event.target.form.submit()" <?php if(isset($submit) && $submit): ?>  <?php endif; ?>>
        <?php if(isset($optional) && $optional): ?><option value> ----- </option><?php endif; ?>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_numeric($key)): ?>
                <option value="<?php echo e($value); ?>" <?php if(isset($selected) && $selected === $value): ?> selected="selected" <?php endif; ?>><?php echo e($value); ?></option>
            <?php else: ?>
                <option value="<?php echo e($key); ?>" <?php if(isset($selected) && $selected === $key): ?> selected="selected" <?php endif; ?>><?php echo e($value); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div><?php /**PATH /home/fastbrao/soporte.recargaloya.com/Modules/Translation/Resources/views/forms/select.blade.php ENDPATH**/ ?>
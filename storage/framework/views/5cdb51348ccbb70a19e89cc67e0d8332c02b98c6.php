<div class="form-group">
    <label for="<?php echo e($field); ?>"><?php echo e($label); ?></label>
    <input 
        class="form-control <?php if($errors->has($field)): ?> error <?php endif; ?>" 
        name="<?php echo e($field); ?>" 
        id="<?php echo e($field); ?>" 
        type="text"
        placeholder="<?php echo e(isset($placeholder) ? $placeholder : ''); ?>"
        value="<?php echo e(old($field)); ?>"
        <?php echo e(isset($required) ? 'required' : ''); ?>>
    
    <?php if($errors->has($field)): ?>
        <?php $__currentLoopData = $errors->get($field); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="error-text"><?php echo $error; ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div><?php /**PATH /home/fastbrao/soporte.recargaloya.com/Modules/Translation/Resources/views/forms/text.blade.php ENDPATH**/ ?>
<?php $__env->startSection('body'); ?>
<div class="card">
    <div class="card-header"><?php echo e(__('translation::translation.add_translation')); ?></div>
    <form action="<?php echo e(route('languages.translations.store', $language)); ?>" method="POST">
        <fieldset>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="card-body p-4">
                <?php echo $__env->make('translation::forms.text', ['field' => 'group', 'label' =>
                __('translation::translation.group_label'), 'placeholder' =>
                __('translation::translation.group_placeholder')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('translation::forms.text', ['field' => 'key', 'required' => true, 'label' =>
                __('translation::translation.key_label'), 'placeholder' =>
                __('translation::translation.key_placeholder')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('translation::forms.text', ['field' => 'value', 'required' => true, 'label' =>
                __('translation::translation.value_label'), 'placeholder' =>
                __('translation::translation.value_placeholder')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div>
                    <?php echo $__env->make('translation::forms.text', ['field' => 'namespace', 'label' =>
                    __('translation::translation.namespace_label'), 'placeholder' =>
                    __('translation::translation.namespace_placeholder')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </fieldset>
        <div class="card-footer flex flex-row-reverse">
            <button class="btn btn-primary">
                <?php echo e(__('translation::translation.save')); ?>

            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('translation::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/Modules/Translation/Resources/views/languages/translations/create.blade.php ENDPATH**/ ?>
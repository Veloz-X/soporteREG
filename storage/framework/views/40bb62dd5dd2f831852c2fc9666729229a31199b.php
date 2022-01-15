

<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
    <div class="col-md-12 m-2">
        
        <a href="<?php echo e(route('dashboard.manage_articles')); ?>" class="btn btn-sm btn-outline-secondary mr-2" title="<?php echo e(__('Manage articles')); ?>" data-toggle="tooltip" data-placement="top" data-placement="top">
            <i class="fas fa-angle-left"></i>
        </a>

        <h5 class="header-title d-inline text-capitalize">
            <?php if(isset($article_id)): ?><?php echo e(__('Edit article')); ?> 
            <a :href="$myaccount_url+'manage_articles/create'" class="btn btn-sm btn-outline-secondary" ><i class="fas fa-plus"></i> <?php echo e(__('New')); ?></a>
            <?php else: ?> <?php echo e(__('New article')); ?> <?php endif; ?>
        </h5>

        <?php if(isset($article_id)): ?>
        <a href="<?php echo e(url('articles/'.$article_id)); ?>" class="btn btn-sm btn-outline-secondary float-right" target="_blank"><i class="far fa-eye"></i> <?php echo e(__('View')); ?></a>
        <?php endif; ?>
            
    </div>
    <div class="col-md-12">
        <article-create-form <?php if(isset($article_id)): ?>article_id="<?php echo e($article_id); ?>"<?php endif; ?>><div class="preloader"></div></article-create-form>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', ['page' => 'articles', 'pageTitle' => __('Articles'), 'hideTitle' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/manage_articles/create.blade.php ENDPATH**/ ?>
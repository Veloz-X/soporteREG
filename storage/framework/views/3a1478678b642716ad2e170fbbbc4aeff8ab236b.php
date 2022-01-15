


<?php $__env->startSection('sub-header'); ?>
<div class="overlay"></div>
<div class="row">
    <div class="col-xl-9 mx-auto">
    <h1 class="mb-5">¿Cómo podemos ayudarle hoy?</h1>
    </div>
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
    <search-bar></search-bar>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-capitalize">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Help center')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Tags')); ?></li>
                <li class="breadcrumb-item"><?php echo e($tag); ?></li>
            </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container mb-4">
    <h2><?php echo e(__('":tag" tag articles', ['tag' => $tag ])); ?></h2>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="border-bottom my-2 p-2">
            <a href="<?php echo e($article->url); ?>">
                <h3><?php echo e($article->transTitle()); ?></h3>
            </a>
            <small>
                <?php echo e(Illuminate\Support\Carbon::parse($article->created_at)->format(setting('date_format')) . " - " . Illuminate\Support\Carbon::parse($article->created_at)->diffForHumans()); ?>

                <?php if( $article->rate_total ): ?>
                . <?php echo e(__(' :rate out of :total found this helpfull', ['rate' => $article->rate_helpful, 'total' => $article->rate_total])); ?>

                <?php endif; ?>
            </small>
            <p class="p-0 m-0"><?php echo e(\Illuminate\Support\Str::limit(strip_tags($article->content), 150, $end='...')); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if( $articles ): ?>
        <?php echo e($articles->links()); ?>

    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.base', ['title' => __('Tag articles')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/frontend/tag.blade.php ENDPATH**/ ?>
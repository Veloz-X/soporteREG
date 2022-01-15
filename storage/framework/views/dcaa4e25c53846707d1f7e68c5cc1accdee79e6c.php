


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
                <li class="breadcrumb-item"><?php echo e(__('Categories')); ?></li>
                <li class="breadcrumb-item"><?php echo e($category->name); ?></li>
            </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container mb-4">
    
    <?php if(count($category->children)): ?>
        <h3><?php echo e($category->name  . ' ' . __('sub_categories')); ?></h3>
        <div class="row mb-3">
            <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-6 col-sm-4 col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <h3 class="p-0 m-0"><a href="<?php echo e($cat->url); ?>" class="w-100 d-block text-center p-3"><?php echo e($cat->name); ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <h2><?php echo e(__('":category" category articles', ['category' => $category->name  ])); ?> . <small>( <?php echo e($articles->total()); ?> )</small></h2>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="border-bottom my-2 p-2">
            <a href="<?php echo e($article->url); ?>">
                <h3><?php echo e($article->title); ?></h3>
            </a>
            <small>
                <?php echo e(Illuminate\Support\Carbon::parse($article->created_at)->format(setting('date_format')) . " - " . Illuminate\Support\Carbon::parse($article->created_at)->diffForHumans()); ?>

                <?php if( $article->rate_total ): ?>
                . <?php echo e(__(' :rate out of :total found this helpfull', ['rate' => $article->rate_helpful, 'total' => $article->rate_total])); ?>

                <?php endif; ?>
            </small>
            <p class="p-0 m-0"><?php echo e(\Illuminate\Support\Str::limit( preg_replace("/&#?[a-z0-9]{2,8};/i","", strip_tags($article->content)), 150, $end='...')); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if( $articles ): ?>
        <?php echo e($articles->links()); ?>

    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.base', ['title' => __('Category articles')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/frontend/category.blade.php ENDPATH**/ ?>
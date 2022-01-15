

<?php $__env->startSection('sub-header'); ?>
<div class="home-page">
<div class="overlay"></div>
<div class="homepage">
<div class="row">
    <div class="col-md-6 mt-3 d-flex">
        <div class="search-box align-self-center mx-auto">
            <h1 class="mb-2 text-white"><?php echo e(__('How can we help you today?')); ?></h1>
            <search-bar><i class="fas fa-circle-notch fa-spin"></i></search-bar>
        </div>
    </div>
    <div class="col d-none d-md-block">
        <img src="<?php echo e(setting('frontend_hero_image', asset('assets/img/intro-img.svg'))); ?>" width="100%"/>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<section class="featured-articles p-2 container mb-5">
    <header class="section-header mt-4">
        <h3><?php echo e(__('Featured articles')); ?></h3>
    </header>
    <div class="row m-4">
        <?php $__currentLoopData = $featured_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-12 col-lg-4">
            <h4>
                <a href="<?php echo e($article->url); ?>" class="text-dark">
                    <i class="far fa-newspaper"></i> <?php echo e($article->transTitle()); ?>

                </a>
            </h4>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<section class="articles-by-category container mb-5">
    <div class="container">
        <header class="section-header mb-5">
            <h3><?php echo e(__('Browse our knowledge base categories')); ?></h3>
        </header>
        <div class="row mx-lg-n4">
            <?php $__currentLoopData = $articles_by_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <h2><a href="<?php echo e($abc->url); ?>" class="text-dark"><?php echo e($abc->name); ?> (<?php echo e($abc->articles_count); ?>)</a></h2>
                    <?php $__currentLoopData = $abc->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articleItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h4>
                            <a href="<?php echo e($articleItem->url); ?>" class="pl-2 d-block p-2 border-bottom article-category text-dark">
                                <i class="far fa-newspaper"></i> <?php echo e($articleItem->title); ?>

                            </a>
                        </h4>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php if(defaultSetting('ticket_allowed', true)): ?>
<section class="submit-ticket container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row justify-content-center my-5 text-white">
                    <div class="col-lg-12 text-center"><h4><?php echo e(__('still_no_luck_we_can_help')); ?></h4></div>
                    <div class="col-auto mb-3">
                        <a href="<?php echo e(route('my_account.tickets.create')); ?>" class="btn btn-submit-ticket btn-sm" ><i class="fas fa-ticket-alt"></i> <?php echo e(__('Submit a ticket')); ?></a>
                    </div>
                    <div class="col-lg-12 text-center"><?php echo e(__('submit_ticket_text')); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.base',['fixednavbar' => 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/frontend/index.blade.php ENDPATH**/ ?>
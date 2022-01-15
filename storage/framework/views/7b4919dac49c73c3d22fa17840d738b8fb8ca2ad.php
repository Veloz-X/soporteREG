

<?php $__env->startSection('sub-header'); ?>
<div class="overlay"></div>
<div class="row">
    <div class="col mx-auto">
    <form action="/search" method="GET" role="search">
        <div class="input-group mb-2 searchbar">
            <input type="text" name="q" value="<?php echo e($query); ?>" class="form-control" placeholder="<?php echo e(__('Type to search for articles...')); ?>" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary color-grey"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container">
    <div class="container">
        <?php if(isset($articles)): ?>
            <?php if($query): ?>
                <p><?php echo __('The Search results for your query :q are', ['q' => '<b>'.$query.'</b>']); ?> :</p>
            <?php endif; ?>
            
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
            
            <?php echo e($articles->appends(['q' => $query ])->links()); ?>

        <?php else: ?>
            <p><?php echo __('No results found for your query :q ', ['q' => '<b>'.$query.'</b>']); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.base', ['title' => __("search")], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/frontend/search.blade.php ENDPATH**/ ?>
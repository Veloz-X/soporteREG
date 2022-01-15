

<?php $__env->startSection('sub-header'); ?>
<div class="overlay"></div>
<div class="row">
    <div class="col-xl-9 mx-auto">
        <h1 class="mb-5"><?php echo e(__('¿Cómo podemos ayudarle hoy?')); ?>?</h1>
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
                        <li class="breadcrumb-item"><a href="<?php echo e($article->category->url); ?>"><?php if($article->category): ?>
                                <?php echo e($article->category->name); ?> <?php else: ?> <?php echo e(__('General')); ?> <?php endif; ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            
            <div class="col-sm-3 border-right page-aside sticky-section">
                <div class="sticky-section-item">
                <?php if(count($related_articles)): ?>
                <div class="mb-4">
                    <h3><?php echo e(__('Related articles')); ?></h3>
                    <div class="list-group">
                        <?php $__currentLoopData = $related_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($related_article->url); ?>" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <?php echo e($related_article->title); ?>

                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(count($article->tags)): ?>
                <div>
                    <h4 class="m-1"><?php echo e(__('Tags')); ?></h4>
                    <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($tag->url); ?>" class="btn btn-outline-secondary btn-sm m-1"><?php echo e($tag->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
                </div>
            </div>
            
            <div class="col-sm-9 p-2">
                <div class="article-header mb-2">
                    <h1><?php echo e($article->transTitle()); ?></h1>
                    <small>
                        <?php echo e(Illuminate\Support\Carbon::parse($article->created_at)->format(setting('date_format')) . " - " . Illuminate\Support\Carbon::parse($article->created_at)->diffForHumans()); ?>

                    </small>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_article')): ?>
                    <div class="clearfix">
                        <a href="<?php echo e(route('dashboard')); ?>#/articles/edit/<?php echo e($article->id); ?>"
                            class="float-right"><i class="far fa-edit"></i> <?php echo e(__('edit')); ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="article-body">
                    <?php echo $article->transContent(); ?>

                </div>

                <div>
                    <small>
                        <?php echo e(__('last_update')); ?> : <?php echo e(Illuminate\Support\Carbon::parse($article->updated_at)->format(setting('date_format')) . " - " . Illuminate\Support\Carbon::parse($article->updated_at)->diffForHumans()); ?>

                    </small>
                </div>

                <?php if(defaultSetting('ticket_allowed', true)): ?>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-12 text-center">
                        <h4><?php echo e(__('still_no_luck_we_can_help')); ?>!</h4>
                    </div>
                    <div class="col-auto mb-3">
                        <a href="<?php echo e(route('my_account.tickets.create')); ?>" class="btn btn-success btn-sm"><i
                                class="fas fa-ticket-alt"></i> <?php echo e(__('Submit a ticket')); ?></a>
                    </div>
                    <div class="col-lg-12 text-center"><?php echo e(__('submit_ticket_text')); ?>.</div>
                </div>
                <?php endif; ?>

                <hr />
                <div class="row justify-content-center mb-5" id="article-rate">
                    <article-rate article_id="<?php echo e($article->id); ?>" rate='<?php echo e($article->rate_helpful); ?>'
                        total="<?php echo e($article->rate_total); ?>" />
                </div>
            </div>
        </div>

    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection("styles"); ?>

    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/lightbox/css/lightbox.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/prism/prism.css')); ?>" />
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('footer_js'); ?>
    ##parent-placeholder-28cec834948493e1b72126f804d2108071763d2d##
    
    <script src="<?php echo e(asset('assets/libs/lightbox/js/lightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/prism/prism.js')); ?>"></script>

    <script>
        var img = jQuery(".article-body img");

        img.each(function() {
            var element = jQuery(this);
            if( this.parentElement.tagName != "A" ){
                var a = jQuery("<a />", {href: element.attr("src"), 'data-lightbox': 'Article image'});
                element.wrap(a);
            }
        });
    </script>

    <script>
        var headings = document.querySelectorAll(".article-body h2");
        var sections = []

        headings.forEach(function(item) {
            item.childNodes.forEach(function(child) {
                if(child.nodeName == "A" && child.hasAttribute('id')){
                    sections.push([child.getAttribute('id'), item.textContent]);
                }
            });
        });

        if( sections.length > 0 ){
            var sectionsList = "<h3><?php echo e(__('Article sections')); ?></h3>"
            sectionsList += "<ul class='list-group my-2'>";
            sections.forEach(function(item) {
                sectionsList += "<li class='list-group-item'><a href='#"+item[0]+"'>"+item[1]+"</a></li>"
            });
            sectionsList += "</ul>"
            let elem = document.querySelector ('.page-aside .sticky-section-item')
            elem.innerHTML = sectionsList+elem.innerHTML;
        }

        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.base', ['title' => $article->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/frontend/article.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(isset($pageTitle) ? $pageTitle : setting('app_name')); ?></title>

    <link href="<?php echo e(asset(setting('favicon'))); ?>" rel="icon">
    <link href="<?php echo e(asset(setting('favicon'))); ?>" rel="apple-touch-icon">
    
    <link href="<?php echo e(asset('assets/my_account/css/app.css?v='.config('vars.asset_version'))); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/fontawesome/css/all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/nprogress/nprogress.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/libs/vue-select/vue-select.min.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

    <?php if(isRTL(app()->getLocale())): ?>
    <link href="<?php echo e(asset('assets/common/css/rtl.css?v='.config('vars.asset_version'))); ?>" rel="stylesheet">
    <?php endif; ?> 
    
    <?php echo $__env->yieldContent('head_assets'); ?>
    <?php echo $__env->yieldContent('style'); ?>
    <?php echo $__env->yieldContent('script'); ?>

    <script>
        const BASE_URL = "<?php echo e(url('')); ?>/";
        const MYACCOUNT_URL = "<?php echo e(route('my_account')); ?>/"; 
        const API_URL = "<?php echo e(url('/api')); ?>/";
    </script>

</head>

<body id="page-top">
    <div id="app" :class="{ 'sidebar-toggled' : sidebarToggled == true}">
        <div class="app-container app-theme-white body-tabs-shadow">
            <?php echo $__env->make('my_account.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="app-main">
                <div class="app-main__outer">
                    <div class="app-main__inner container">

                        <?php $__env->startSection('page-heading'); ?>
                            <?php if(isset($pageTitle)): ?>
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <?php echo e($pageTitle); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(isDemo()): ?>
                        <div class="alert alert-info" role="alert">
                            This is a working Demo version, Some features has been disabled
                        </div>
                        <?php endif; ?>

                        <?php echo $__env->yieldSection(); ?>
                        <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                        <?php if(session('danger')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(session('danger')); ?>

                        </div>
                        <?php endif; ?>
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <?php echo $__env->make('my_account.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>

        <a class="scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="<?php echo e(asset('assets/js/app.js?v='.config('vars.asset_version'))); ?>" defer></script>
    <script src="<?php echo e(asset('assets/libs/nprogress/nprogress.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/vue-select/vue-select.min.js')); ?>"></script>
    <script src="<?php echo e(route('my_account.lang')); ?>?v=<?php echo e(config('vars.asset_version')); ?>" ></script>

    <?php echo $__env->yieldContent('script_footer'); ?>

</body>

</html><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/base.blade.php ENDPATH**/ ?>
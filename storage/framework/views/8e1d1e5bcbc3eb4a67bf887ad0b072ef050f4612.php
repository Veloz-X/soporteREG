<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title><?php echo e(isset($title) ? $title : ( setting('site_title') ? setting('site_title') : 'Knowledge base' )); ?></title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <meta content="<?php echo e(setting('site_keywords')); ?>" name="keywords">
  <meta content="<?php echo e(setting('site_description')); ?>" name="description">

  <?php if(isset($canonical)): ?>
  <link rel="canonical" href="<?php echo e($canonical); ?>" />
  <?php endif; ?>

  <link href="<?php echo e(asset(setting('favicon'))); ?>" rel="icon">
  <link href="<?php echo e(asset(setting('favicon'))); ?>" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <link href="<?php echo e(asset('assets/libs/fontawesome/css/all.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/frontend/css/app.css?v='.config('vars.asset_version'))); ?>" rel="stylesheet">

  <script>
    const BASE_URL = "<?php echo e(url('/')); ?>/";
  </script>

  <?php echo $__env->yieldContent('styles'); ?>

  <?php echo customStyle('frontend'); ?>


  <?php echo setting('custom_css'); ?>


</head>

<body>
  <div id="app">
    <?php $__env->startSection('header'); ?>
    <header id="header" class="fixed-top">
      <div class="container">

        <div class="logo float-left">
          <a href="<?php echo e(route('frontend')); ?>" class="scrollto">
            <img src="<?php echo e(asset(setting('app_logo'))); ?>" class="img-fluid">
          </a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
          <ul>
            <?php if(isDemo()): ?>
            <li>
              <a class="btn btn-success text-white btn-sm mr-3" href="#">
                <?php echo e(__('Buy NOW')); ?>

              </a>
            </li>
            <?php endif; ?>

            <?php if(defaultSetting('ticket_allowed', true)): ?>
            <li><a class="btn btn-submit-ticket btn-sm mr-3"
                href="<?php echo e(route("my_account.tickets.create")); ?>"><?php echo e(__('Submit a ticket')); ?></a></li>
            <?php endif; ?>

            <?php if( count(availableLanguages()) > 1 ): ?>
            <li>
            <div class="btn-group dropup d-inline">
              <button type="button" class="btn btn-light dropdown-toggle p-2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php echo e(getLocaleName(App()->getLocale())); ?>

              </button>
              <div class="dropdown-menu">
                <?php $__currentLoopData = availableLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lk => $lv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url($lk)); ?>" class="dropdown-item">
                  <?php echo e($lv); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
            </li>
            <?php endif; ?>

            <?php if(auth()->guest()): ?>
            <li><a href="<?php echo e(route('login')); ?>"><?php echo e(__('Sign in')); ?></a></li>
            <?php else: ?>
            <li class="nav-item">
              <?php if( auth()->user()->isEmployee()): ?>
              <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                <?php else: ?>
                <a class="nav-link" href="<?php echo e(route('my_account')); ?>">
                  <?php endif; ?>
                  <img class="img-profile rounded-circle mr-1" width="24" src="<?php echo e(Auth::user()->avatar()); ?>">
                  <span class="mr-2 text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                </a>
            </li>
            <?php endif; ?>
          </ul>
        </nav>

      </div>
    </header>
    <?php echo $__env->yieldSection(); ?>

    <section id="intro" class="clearfix text-white text-center">
      <div class="container">
        <?php $__env->startSection('sub-header'); ?>
        <?php echo $__env->yieldSection(); ?>
      </div>
    </section>

    <main id="main">
      <?php echo $__env->yieldContent('main_content'); ?>
    </main>

    <footer id="footer" class="bg-white p-3 text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
            <div class="copyright d-inline">
              &copy; <?php echo e(__('Copyright')); ?> <strong><?php echo e(setting('app_name')); ?></strong>. <?php echo e(__('All Rights Reserved')); ?>

            </div>

            <?php if( count(availableLanguages()) > 1 ): ?>
            <div class="btn-group dropup d-inline">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php echo e(getLocaleName(App()->getLocale())); ?>

              </button>
              <div class="dropdown-menu">
                <?php $__currentLoopData = availableLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lk => $lv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url($lk)); ?>" class="dropdown-item">
                  <?php echo e($lv); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
            <?php endif; ?>

          </div>
        </div>

      </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  </div>

  <?php $__env->startSection('footer_js'); ?>
  <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/libs/easing/easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/libs/mobile-nav/mobile-nav.js')); ?>"></script>
  <script src="<?php echo e(route('frontend.lang')); ?>?v=<?php echo e(config('vars.asset_version')); ?>"></script>
  <script src="<?php echo e(asset('assets/frontend/js/frontend.js?v='.config('vars.asset_version'))); ?>"></script>
  <?php echo setting('custom_js'); ?>

  <?php echo $__env->yieldSection(); ?>

</body>

</html><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/frontend/base.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(setting('app_name')); ?></title>
    <link href="<?php echo e(asset('assets/frontend/css/auth.css?v='.config('vars.asset_version'))); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/fontawesome/css/all.css')); ?>" rel="stylesheet">

    <?php echo customStyle('frontend'); ?>

    
</head>

<body>
    <div id="particles-js" class="bg-overly page-bg"></div>
    <div class="container" id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/auth/base.blade.php ENDPATH**/ ?>
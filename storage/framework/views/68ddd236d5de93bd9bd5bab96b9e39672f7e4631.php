<?php ($total_steps = 6) ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ticky installation</title>
        <link href="<?php echo e(asset('assets/install/css/app.css')); ?>" rel="stylesheet">
        <style>
            @media  only screen and (min-width: 600px) {
            .card.mt-5.installer-card {
                    width: 500px;
                }
            }

            .card.mt-5.installer-card {
                margin: auto;
            }

            .list-group-item {
                padding: 5px 15px;
            }

            .installer-card li {
                font-size: 0.8rem;
                padding: 5px;
            }

        </style>
    </head>
    <body class="bg-secondary">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-5 mb-5 installer-card">
                        <div class="card-header">
                            Ticky Installer
                            <a href="https://support.pandisoft.com/search?q=install" target="_blank" class="float-right text-decoration-none">ⓘ</a>
                        </div>
                        <div class="card-body p-2">
                            <?php if($errors->any()): ?>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <form method="POST" action="<?php if(isset($action)): ?><?php echo e($action); ?><?php endif; ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo $__env->yieldContent('content'); ?>
                            <div class="row">
                                <div class="col">
                                    <?php if(isset($previous)): ?>
                                        <a href="<?php echo e($previous); ?>" class="btn btn-sm btn-outline-primary">Previous</a>
                                    <?php endif; ?>
                                </div>
                                <div class="col">
                                    <?php if(isset($next)): ?>
                                        <a href="<?php echo e($next); ?>" class="btn float-right btn-sm btn-outline-primary">Next</a>
                                    <?php endif; ?>
                                    <?php if(isset($finish)): ?>
                                        <a href="<?php echo e($finish); ?>" class="btn float-right btn-sm btn-outline-primary">Finish</a>
                                    <?php endif; ?>
                                    <?php if(isset($action)): ?>
                                        <button type="submit" class="btn float-right btn-sm btn-outline-primary">Next</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div> 
                                <?php if(isset($step)): ?>Step <?php echo e($step); ?>/<?php echo e($total_steps); ?> : <?php endif; ?><?php echo e($step_text); ?>

                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped <?php if($step == $total_steps): ?> bg-success <?php else: ?> bg-success  <?php endif; ?>" role="progressbar" style="width: <?php echo e(number_format( ($step/$total_steps) * 100, 2 )); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/install/layouts/master.blade.php ENDPATH**/ ?>
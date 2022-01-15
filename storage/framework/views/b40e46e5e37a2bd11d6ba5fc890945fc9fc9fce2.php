

<?php $__env->startSection('content'); ?>
    <ul class="list-group mb-3">
        <?php $__currentLoopData = $requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item d-flex p-1 justify-content-between align-items-center">
            <?php echo e($k); ?>

            <?php if($v): ?>
                <span class="badge badge-success badge-pill">OK</span>
            <?php else: ?>
                <span class="badge badge-danger badge-pill">FAIL</span>
            <?php endif; ?>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <p class="d-block p-1 m-0">Recommended settings</p>
    <table class="table table-striped table-sm">
        <tr>
            <td>Name</td>
            <td>Server config</td>
            <td>Status</td>
        </tr>
        <tr>
            <td>Max execution time</td>
            <td><span class="badge badge-secondary"><?php echo e(ini_get("max_execution_time")); ?> seconds</span></td>
            <td>
                <?php if( ini_get("max_execution_time") > 120 ): ?>
                    <span class="bg-success text-white px-1">Ok</span>
                <?php else: ?> 
                    <span class="bg-warning small px-1">+120 Seconds Recommended</span>
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <td>Max input time</td>
            <td><span class="badge badge-secondary"><?php echo e(ini_get("max_input_time")); ?> Seconds</span></td>
            <td>
                <?php if( ini_get("max_input_time") > 120 ): ?>
                    <span class="bg-success text-white px-1">Ok</span>
                <?php else: ?> 
                    <span class="bg-warning small px-1">+120 Seconds Recommended</span>
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <td>Max input vars</td>
            <td><span class="badge badge-secondary"><?php echo e(ini_get("max_input_vars")); ?></span></td>
            <td>
                <?php if( ini_get("max_input_vars") > 2000 ): ?>
                    <span class="bg-success text-white px-1">Ok</span>
                <?php else: ?> 
                    <span class="bg-warning small px-1">+2000 Recommended</span>
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <td>Memory limit</td>
            <td><span class="badge badge-secondary"><?php echo e(ini_get("memory_limit")); ?></span></td>
            <td>
                <?php if( ini_get("memory_limit") > 512 ): ?>
                    <span class="bg-success text-white px-1">Ok</span>
                <?php else: ?> 
                    <span class="bg-warning small px-1">+512M Recommended</span>
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <td>Post max size</td>
            <td><span class="badge badge-secondary"><?php echo e(ini_get("post_max_size")); ?></span></td>
            <td>
                <?php if( ini_get("post_max_size") > 64 ): ?>
                    <span class="bg-success text-white px-1">Ok</span>
                <?php else: ?> 
                    <span class="bg-warning small px-1">+64M Recommended</span>
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <td>Upload max filesize</td>
            <td><span class="badge badge-secondary"><?php echo e(ini_get("upload_max_filesize")); ?></span></td>
            <td>
                <?php if( ini_get("upload_max_filesize") > 64 ): ?>
                    <span class="bg-success text-white px-1">Ok</span>
                <?php else: ?> 
                    <span class="bg-warning small px-1">+64M Recommended</span>
                <?php endif; ?>
            </td>
        </tr>
        
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layouts.master', [
    'step' => 1,
    'step_text' => 'Application requirements',
    'action' => route('install.requirements'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/install/requirements.blade.php ENDPATH**/ ?>
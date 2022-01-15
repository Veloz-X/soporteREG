

<?php $__env->startSection('content'); ?>
<div class="container page-settings mb-3">
  <advanced-settings><div class="preloader"></div></advanced-settings>
  <div class="card">
    <div class="card-header"><?php echo e(__('Server info')); ?></div>
    <div class="card-body p-0 m-0">
      <table class="table table-striped table-sm">

        

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

        <tr>
          <td>Zip extension</td>
          <td><span class="badge badge-secondary"><?php echo e(extension_loaded('zip') ? __('Enabled') : __("Disabled / not installed")); ?></span></td>
          <td>
              <?php if(  extension_loaded('zip') ): ?>
                  <span class="bg-success text-white px-1">Ok</span>
              <?php else: ?> 
                  <span class="bg-warning small px-1">Fail</span>
              <?php endif; ?>
          </td>
        </tr>
        
    </table>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', ['page' => 'settings', 'pageTitle' => __('Advanced settings')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/settings/advanced_settings.blade.php ENDPATH**/ ?>
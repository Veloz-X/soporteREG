<?php $__env->startSection('content'); ?>
<div class="container-fluid content-row" id="modulesManager">

  <div class="card">
    <div class="card-body p-2">
      <div class="upload-module">
        <upload-module><div class="preloader"></div></upload-module>
      </div>
    </div>
  </div>

  <modules-list><div class="preloader"></div></modules-list>
  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base',[
'page' => 'modules_manager',
'pageTitle' => __('Modules')
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/modules_manager/index.blade.php ENDPATH**/ ?>
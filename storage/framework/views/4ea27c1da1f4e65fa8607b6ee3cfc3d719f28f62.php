

<?php $__env->startSection('content'); ?>

<div>
  <div class="row">
    <div class="col">
      <select class="form-control files-select my-1">
        <option value="" disabled selected>Select file</option>
        <?php $__currentLoopData = $folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $folder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="?f=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($folder)); ?>">📁<?php echo e($folder); ?></option>
          <?php $__currentLoopData = $folder_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="?l=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($file)); ?>&f=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($folder)); ?>"
            <?php if($current_file==($folder.'-'.$file) ): ?> selected <?php endif; ?>>
            &nbsp;&boxur;📰 <?php echo e($file); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <optgroup label="📁Main folder">
          <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="?l=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($file)); ?>" <?php if($current_file==$file): ?>
            selected <?php endif; ?>>
            📰 <?php echo e($file); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>

    </div>

    <div class="col">
      <?php if($current_file): ?>
      <a class="btn btn-primary my-1"
        href="?dl=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($current_file)); ?><?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>">
        <span class="fa fa-download"></span> Download file
      </a>
      <a class="btn btn-danger my-1" id="clean-log"
        href="?clean=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($current_file)); ?><?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>">
        <span class="fa fa-sync"></span> Clean file
      </a>
      <a class="btn btn-danger my-1" id="delete-log"
        href="?del=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($current_file)); ?><?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>">
        <span class="fa fa-trash"></span> Delete file
      </a>
      <?php if(count($files) > 1): ?>
      <a class="btn btn-danger my-1" id="delete-all-log"
        href="?delall=true<?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>">
        <span class="fa fa-trash-alt"></span> Delete all files
      </a>
      <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 table-container">
    <?php if($logs === null): ?>
    <div>
      Log file >50M, please download it.
    </div>
    <?php else: ?>
    <div class="table-responsive">
      <table id="table-log" class="table table-striped" data-ordering-index="<?php echo e($standardFormat ? 2 : 0); ?>">
        <thead>
          <tr>
            <?php if($standardFormat): ?>
            <th>Level</th>
            <th>Context</th>
            <th>Date</th>
            <?php else: ?>
            <th>Line number</th>
            <?php endif; ?>
            <th>Content</th>
          </tr>
        </thead>
        <tbody>

          <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr data-display="stack<?php echo e($key); ?>">
            <?php if($standardFormat): ?>
            <td class="text-<?php echo e($log['level_class']); ?>">
              <i class="fa fa-<?php echo e($log['level_img']); ?>" aria-hidden="true"></i><?php echo e($log['level']); ?>

            </td>
            <td class="text"><?php echo e($log['context']); ?></td>
            <?php endif; ?>
            <td class="date"><?php echo e($log['date']); ?></td>
            <td class="text">
              <?php if($log['stack']): ?>
              <button type="button" class="float-right expand btn btn-outline-dark btn-sm mb-2 ml-2"
                data-display="stack<?php echo e($key); ?>">
                <span class="fa fa-search"></span>
              </button>
              <?php endif; ?>
              <?php echo e($log['text']); ?>

              <?php if(isset($log['in_file'])): ?>
              <br /><?php echo e($log['in_file']); ?>

              <?php endif; ?>
              <?php if($log['stack']): ?>
              <div class="stack" id="stack<?php echo e($key); ?>" style="display: none; white-space: pre-wrap;">
                <?php echo e(trim($log['stack'])); ?>

              </div>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_footer'); ?>
##parent-placeholder-87dbaae7a08e17b2d198b71dbe9cdcd5c89f2864##
<script>
document.addEventListener("DOMContentLoaded", function(event) {
  $('.files-select').on('change',  function () {
      location.replace(MYACCOUNT_URL+'error_logs'+this.value);
    });

    $('.table-container tr').on('click', function () {
      $('#' + $(this).data('display')).toggle();
    });
    $('#delete-log, #clean-log, #delete-all-log').click(function () {
      return confirm('Are you sure?');
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', ['page' => 'error_logs', 'pageTitle' => __('Error logs')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/error_logs/index.blade.php ENDPATH**/ ?>
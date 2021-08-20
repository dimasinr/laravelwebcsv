<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-10 row">
        <div class="card">
            <div class="card-body row">
            
            <button type="button" class="btn btn-primary btn-lg">
                <a href="<?php echo e(route('nginx')); ?>" style="color: white; text-decoration: none;">Data Log NginX</a>    
            </button>
            
            <button type="button" class="btn btn-secondary btn-lg">Data Log Uwsgi</button>
            <button type="button" class="btn btn-primary btn-lg">Json NginX</button>
            <button type="button" class="btn btn-secondary btn-lg">Json Uwsgi</button>
            </div>
         </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/garfield/Documents/webcsv/resources/views/home.blade.php ENDPATH**/ ?>
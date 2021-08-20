<?php $__env->startSection('content'); ?>
<div class="container">

            Data Uwsgi
            <hr>

            <div class="col-md-4 mb-3">
        <form class="form d-flex" method="get" action="<?php echo e(route('searchuwsgi')); ?>">
    <div class="form-group w-100 mb-2">
        <input type="text" name="searchuwsgi" class="form-control w-75 d-inline" id="searchuwsgi" placeholder="Search address ...">
        <button type="submit" class="btn btn-outline-primary" style="width: 23%;">Search</button>

        
    </div>
</form>
        </div>
        <div class="col-md-8 mt-4">
          <button class="btn btn-primary mb-4">
                <a href="<?php echo e(route('uwsgi.export')); ?>" style="color: white; text-decoration: none;">Export to CSV File</a>
            </button>
        </div>
       
            <table class="table table-bordered">
  <thead class="text-center">
    <tr>
      <th>no</th>
      <th>Address Space Usage</th>
      <th>Rss Usage</th>
      <th>Pid</th>
    </tr>
  </thead>
  <tbody class="text-center">

    <?php $i=1; ?>
  <?php $__currentLoopData = $uwsgi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($i++); ?></td>
          <td><?php echo e($datalog->address_space_usage); ?></td>
          <td><?php echo e($datalog->rss_usage); ?></td>
          <td><?php echo e($datalog->pid); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

    <?php echo e($uwsgi->links()); ?>


  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/garfield/Documents/webcsv1/resources/views/uwsgi.blade.php ENDPATH**/ ?>
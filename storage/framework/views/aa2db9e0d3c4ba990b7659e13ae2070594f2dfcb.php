<?php $__env->startSection('content'); ?>
<div class="container">
            Data Nginx
            <hr>
           
            <div class="col-md-4 mb-3">
        <form class="form d-flex" method="get" action="<?php echo e(route('searchnginx')); ?>">
    <div class="form-group w-100 mb-2">
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Ip Address ... ">
        <button type="submit" class="btn btn-outline-primary" style="width: 23%;">Search</button>

        
    </div>
</form>
        </div>
        <div class="col-md-8 mt-4">
          <button class="btn btn-primary mb-4">
                <a href="<?php echo e(route('nginx.export')); ?>" style="color: white; text-decoration: none;">Export to CSV File</a>
            </button>
        </div>
       
            <table class="table table-bordered">
  <thead class="text-center">
    <tr>
      <th>No</th>
      <th>Ip Address</th>
      <th>Date</th>
      <th>Method</th>
      <th>Status Server</th>
      <th>Ping Ms</th>
      <th>Site Request</th>
      <th>rt</th>
      <th>uct</th>
      <th>uht</th>
      <th>urt</th>
      <th>gz</th>
    </tr>
  </thead>
  <tbody class="text-center">

    <?php $i=1; ?>
  <?php $__currentLoopData = $nginx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($i++); ?></td>
          <td><?php echo e($datalog->ip_address); ?></td>
          <td><?php echo e($datalog->date); ?></td>
          <td><?php echo e($datalog->method); ?></td>
          <td><?php echo e($datalog->status_server); ?></td>
          <td><?php echo e($datalog->ping_ms); ?></td>
          <td><?php echo e($datalog->site_request); ?></td>
          <td><?php echo e($datalog->rt); ?></td>
          <td><?php echo e($datalog->uct); ?></td>
          <td><?php echo e($datalog->uht); ?></td>
          <td><?php echo e($datalog->urt); ?></td>
          <td><?php echo e($datalog->gz); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php echo e($nginx->links()); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/garfield/Documents/webcsv1/resources/views/nginx.blade.php ENDPATH**/ ?>
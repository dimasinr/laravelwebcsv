<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="car">
        <div class="card-bdy">
            Data Nginx
            <hr>
            <button class="btn btn-primary mb-4">
                <a href="<?php echo e(route('export.excel')); ?>" style="color: white; text-decoration: none;">Export to CSV File</a>
            </button>
  		<!-- <a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>           -->
            <table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Ip Address</th>
      <th>Stat 1</th>
      <th>Stat 2</th>
      <th>Date</th>
      <th>Zone</th>
      <th>Method</th>
      <th>APT GET</th>
      <th>Request</th>
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
  <tbody>

    <?php $i=1; ?>
  <?php $__currentLoopData = $nginx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($i++); ?></td>
          <td><?php echo e($datalog->ip_address); ?></td>
          <td><?php echo e($datalog->status_1); ?></td>
          <td><?php echo e($datalog->status_2); ?></td>
          <td><?php echo e($datalog->date); ?></td>
          <td><?php echo e($datalog->zone); ?></td>
          <td><?php echo e($datalog->method); ?></td>
          <td><?php echo e($datalog->apt_get); ?></td>
          <td><?php echo e($datalog->request); ?></td>
          <td><?php echo e($datalog->status); ?></td>
          <td><?php echo e($datalog->ms); ?></td>
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
        
        </div>
    </div>
    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
    <?php echo e($nginx->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/garfield/Documents/webcsv/resources/views/nginx.blade.php ENDPATH**/ ?>
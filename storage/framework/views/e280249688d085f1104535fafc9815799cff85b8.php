<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo e(route('nginx')); ?>">Data Log NginX</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Data Log Uwsgi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Json
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">NginX</a></li>
            <li><a class="dropdown-item" href="#">Uwsgi</a></li>
          </ul>
        </li>
      </ul>
      <!-- <form class="form d-flex" method="get" action="<?php echo e(route('search')); ?>">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      <form class="form d-flex" method="get" action="<?php echo e(route('search')); ?>">
    <div class="form-group w-100 mb-2">
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-2">Cari</button>
    </div>
</form>
<!-- Start kode untuk form pencarian -->
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
    </div>
  </div>
</nav><?php /**PATH /home/garfield/Documents/webcsv/resources/views/components/navbar.blade.php ENDPATH**/ ?>
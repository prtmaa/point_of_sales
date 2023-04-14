

<?php $__env->startSection('tittle'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('badge'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('badge'); ?>
    <li class="breadcrumb-item active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <div class="row">

      <div class="card col-lg-12">
        <div class="card-body text-center">
            <h1>Selamat Datang</h1>
            <h2>Anda login sebagai KASIR</h2>
            <br><br>
            <a href="<?php echo e(route('transaksi.baru')); ?>" class="btn btn-success btn-lg">Transaksi Baru</a>
            <br><br><br>
        </div>
      </div>

    </div>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir\resources\views/kasir/dashboard.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e($setting->nama_perusahaan); ?> | <?php echo $__env->yieldContent('tittle'); ?></title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <?php echo $__env->yieldPushContent('css'); ?>
  <link rel="shortcut icon" href="<?php echo e($setting->path_logo); ?>" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/daterangepicker/daterangepicker.css')); ?>">


   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo e($setting->path_logo); ?>" alt="Admin" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php if ($__env->exists('layouts.header')) echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php if ($__env->exists('layouts.sidebar')) echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $__env->yieldContent('tittle'); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <?php $__env->startSection('badge'); ?>
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>                 
              <?php echo $__env->yieldSection(); ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('adminlte/plugins/chart.js/Chart.min.js')); ?>"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('adminlte/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/daterangepicker/daterangepicker.js')); ?>"></script>

<!-- overlayScrollbars -->
<script src="<?php echo e(asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('adminlte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('adminlte/dist/js/adminlte.js')); ?>"></script>




<script src="<?php echo e(asset('js/validator.min.js')); ?>"></script>

<script>
  function preview(selector, temporaryFile, width = 200)  {
      $(selector).empty();
      $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
  }
</script>

<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\kasir\resources\views/layouts/master.blade.php ENDPATH**/ ?>
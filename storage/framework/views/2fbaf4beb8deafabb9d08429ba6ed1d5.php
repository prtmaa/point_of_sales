

<?php $__env->startSection('tittle'); ?>
    Laporan Pendapatan <?php echo e(tanggal_indonesia($tanggalAwal, false)); ?> s/d <?php echo e(tanggal_indonesia($tanggalAkhir, false)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/AdminLTE-2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('breadcrumb'); ?>
    <li class="active">Laporan</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <button onclick="updatePeriode()" class="btn btn-info btn-sm btn-flat"><i class="fa fa-plus-circle"></i> Ubah Periode</button>
                <a href="<?php echo e(route('laporan.export_pdf', [$tanggalAwal, $tanggalAkhir])); ?>" target="_blank" class="btn btn-success btn-sm btn-flat"><i class="fa fa-file-excel-o"></i> Export PDF</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-stiped table-bordered">
                    <thead>
                        <th width="5%">No</th>
                        <th>Tanggal</th>
                        <th>Penjualan</th>
                        <th>Pembelian</th>
                        <th>Pengeluaran</th>
                        <th>Pendapatan</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<?php if ($__env->exists('laporan.form')) echo $__env->make('laporan.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('/AdminLTE-2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<script>
    let table;

    $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '<?php echo e(route('laporan.data', [$tanggalAwal, $tanggalAkhir])); ?>',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'tanggal'},
                {data: 'penjualan'},
                {data: 'pembelian'},
                {data: 'pengeluaran'},
                {data: 'pendapatan'}
            ],
            dom: 'Brt',
            bSort: false,
            bPaginate: false,
        });

        // $('.datepicker').datepicker({
        //     format: 'YYYY-MM-DD',
        //     autoclose: true
        // });

        $('.datepicker').datetimepicker({
        format: 'yyyy-mm-DD',
        autoclose: true
    });
    });

    function updatePeriode() {
        $('#modal-form').modal('show');
    }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir\resources\views/laporan/index.blade.php ENDPATH**/ ?>
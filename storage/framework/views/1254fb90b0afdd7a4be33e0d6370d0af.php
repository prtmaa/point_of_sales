

<?php $__env->startSection('tittle'); ?>
    Daftar Pengeluaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('badge'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('badge'); ?>
    <li class="breadcrumb-item active">Daftar Pengeluaran</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
 
    <div class="row">
      
      <section class="col-lg-12 connectedSortable">
        
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">

                    <div class="btn-group">
                        <button onclick="addForm('<?php echo e(route('pengeluaran.store')); ?>')" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                    </div>

                </div>
                 
                <div class="card-body table-responsive">
                    <form action="" class="form-pengeluaran" method="post">
                        <?php echo csrf_field(); ?>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Nominal</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
    
                            </tbody>
                        </table>
                    </form>
                </div>
                
              </div>
        
            </div>

          </div>

      </section>
    </div>

<?php echo $__env->make('pengeluaran.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        let table;

       $(function(){
           table = $('.table').DataTable({
            processing: true,
            autoWidth: false,
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '<?php echo e(route('pengeluaran.data')); ?>',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'created_at'},
                {data: 'deskripsi'},
                {data: 'nominal'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
            });

            $('#modal-form').validator().on('submit', function (e) {
                if (! e.preventDefault()){
                    $.ajax({
                        url: $('#modal-form form').attr('action'),
                        type: 'post',
                        data: $('#modal-form form').serialize()
                    })
                    .done((response) => {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Gagal menyimpan data');
                        return;
                    });
                }
            })

       }); 

       function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Pengeluaran');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=deskripsi]').focus();
       }

       function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Pengeluaran');
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=deskripsi]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=deskripsi]').val(response.deskripsi);
                $('#modal-form [name=nominal]').val(response.nominal);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
         }

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
            }
        }

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir\resources\views/pengeluaran/index.blade.php ENDPATH**/ ?>
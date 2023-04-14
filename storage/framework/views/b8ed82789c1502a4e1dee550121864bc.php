

<?php $__env->startSection('tittle'); ?>
    Member
<?php $__env->stopSection(); ?>

<?php $__env->startSection('badge'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('badge'); ?>
    <li class="breadcrumb-item active">Member</li>
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
                        <button onclick="addForm('<?php echo e(route('member.store')); ?>')" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                        <button onclick="deleteSelected('<?php echo e(route('member.delete_selected')); ?>')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Terpilih</button>
                        <button onclick="cetakMember('<?php echo e(route('member.cetak_member')); ?>')" class="btn btn-info btn-sm"><i class="fa fa-print"></i> Cetak Barcode</button>
                    </div>

                </div>
                 
                <div class="card-body table-responsive">
                    <form action="" class="form-member" method="post">
                        <?php echo csrf_field(); ?>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>
                                   <input type="checkbox" name="select_all" id="select_all"> 
                                </th>
                                <th>No</th>
                                <th>Kode Member</th>
                                <th>Nama Member</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
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

<?php echo $__env->make('member.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                url: '<?php echo e(route('member.data')); ?>',
            },
            columns: [
                {data: 'select_all', searchable: false, sortable: false},
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'kode_member'},
                {data: 'nama_member'},
                {data: 'alamat'},
                {data: 'telepon'},
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

            $('[name=select_all]').on('click', function(){
                $(':checkbox').prop('checked', this.checked);
            });

       }); 

       function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Member');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama_member]').focus();
       }

       function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Member');
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama_member]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_member]').val(response.nama_member);
                $('#modal-form [name=kode_member]').val(response.kode_member);
                $('#modal-form [name=alamat]').val(response.alamat);
                $('#modal-form [name=telepon]').val(response.telepon);
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

        function deleteSelected(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                if ($('input:checked').length > 1) {
                    $.post(url, $('.form-member').serialize())
    
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
    
                }else{
                    alert('Pilih data yang akan dihapus');
                    return;
                }
            }
        }

        function cetakMember(url) {
        if ($('input:checked').length < 1) {
            alert('Pilih data yang akan dicetak');
            return;
        } else {
            $('.form-member')
                .attr('target', '_blank')
                .attr('action', url)
                .submit();
        }
    }

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir\resources\views/member/index.blade.php ENDPATH**/ ?>
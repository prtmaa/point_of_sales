

<?php $__env->startSection('tittle'); ?>
    Transaksi Pembelian
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
    .tampil-bayar {
        font-size: 5em;
        text-align: center;
        height: 150px;
    }
    .tampil-terbilang {
        padding: 10px;
        background: #f0f0f0;
    }
    .table-detail_pembelian tbody tr:last-child {
        display: none;
    }
    @media(max-width: 768px) {
        .tampil-bayar {
            font-size: 3em;
            height: 70px;
            padding-top: 5px;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('badge'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('badge'); ?>
    <li class="breadcrumb-item active">Transaksi Pembelian</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
    <div class="row">
      
      <section class="col-lg-12 connectedSortable">
        
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">

                    <table>
                        <tr>
                            <td>Supplier</td>
                            <td>: <?php echo e($suplier->nama_suplier); ?></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>: <?php echo e($suplier->telepon); ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?php echo e($suplier->alamat); ?></td>
                        </tr>
                    </table>

                </div>
                 
                <div class="card-body table-responsive">

                        <form class="form-produk">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="kode_produk" class="col-lg-1">Kode Produk</label>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <input type="hidden" name="id_produk" id="id_produk">
                                        <input type="hidden" name="id_pembelian" id="id_pembelian" value="<?php echo e($id_pembelian); ?>">
                                        <input type="text" class="form-control" name="kode_produk" id="kode_produk">
                                        <span class="input-group-btn">
                                            <button type="button" onclick="tampilProduk()" class="btn btn-info btn-flat"><i class="fa fa-arrow-right"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <table class="table table-striped table-bordered table-detail_pembelian">
                            <thead>
                                <th width="5%">No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th width="10%">Jumlah</th>
                                <th>Sub Total</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
    
                            </tbody>
                        </table>

                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="tampil-bayar bg-primary"></div>
                                <div class="tampil-terbilang"></div>
                            </div>
                            <div class="col-lg-4">
                                <form action="<?php echo e(route('pembelian.store')); ?>" class="form-pembelian" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id_pembelian" value="<?php echo e($id_pembelian); ?>">
                                    <input type="hidden" name="total" id="total">
                                    <input type="hidden" name="total_item" id="total_item">
                                    <input type="hidden" name="bayar" id="bayar">
        
                                    <div class="form-group row">
                                        <label for="totalrp" class="col-lg-2 control-label">Total</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="totalrp" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="diskon" class="col-lg-2 control-label">Diskon</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="diskon" id="diskon" class="form-control" value="<?php echo e($diskon); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bayar" class="col-lg-2 control-label">Bayar</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="bayarrp" class="form-control">
                                        </div>
                                    </div>
                                </form>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat pull-right btn-simpan"><i class="fa fa-floppy-o"></i> Simpan Transaksi</button>
                            </div>
                        </div>
                    </div>

                </div>
                
              </div>
        
            </div>

        </div>

      </section>
    </div>

<?php echo $__env->make('pembelian_detail.produk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        let table, table2;

       $(function(){

           table = $('.table-detail_pembelian').DataTable({
            processing: true,
            autoWidth: false,
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '<?php echo e(route('pembelian_detail.data', $id_pembelian)); ?>',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'kode_produk'},
                {data: 'nama_produk'},
                {data: 'harga_beli'},
                {data: 'jumlah'},
                {data: 'subtotal'},
                {data: 'aksi', searchable: false, sortable: false},
            ],

            dom: 'Brt',
            bSort: false,
            paginate: false
        })
        
        .on('draw.dt', function(){
            loadForm($('#diskon').val());
        });
            
        table2 = $('.table-produk').DataTable()
            
        $(document).on('input', '.quantity', function () {
            let id = $(this).data('id');
            let jumlah = parseInt($(this).val());
            if (jumlah < 1) {
                $(this).val(1);
                alert('Jumlah tidak boleh kurang dari 1');
                return;
            }
            if (jumlah > 10000) {
                $(this).val(10000);
                alert('Jumlah tidak boleh lebih dari 10000');
                return;
            }
            $.post(`<?php echo e(url('/pembelian_detail')); ?>/${id}`, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'put',
                    'jumlah': jumlah
                })
                .done(response => {
                    $(this).on('mouseout', function () {
                        table.ajax.reload(() => loadForm($('#diskon').val()));
                    });
                })
                .fail(errors => {
                    alert('Tidak dapat menyimpan data');
                    return;
                });
         });

         $(document).on('input', '#diskon', function () {
            if ($(this).val() == "") {
                $(this).val(0).select();
            }
            loadForm($(this).val());
        });

        $('.btn-simpan').on('click', function () {
            $('.form-pembelian').submit();
        });

       }); 

       function tampilProduk() {
            $('#modal-produk').modal('show');
       }

       function hideProduk() {
            $('#modal-produk').modal('hide');
            
       }

       function pilihProduk(id, kode) {
            $('#id_produk').val(id);
            $('#kode_produk').val(kode);
            hideProduk();
            tambahProduk();
             table.ajax.reload(() => loadForm($('#diskon').val()));
       }

       function tambahProduk() {
            $.post('<?php echo e(route('pembelian_detail.store')); ?>', $('.form-produk').serialize())
            .done(response => {
                $('#kode_produk').focus();
            })
            .fail(response => {
                alert('tidak dapat menyimpan data')
            })
       }

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                     table.ajax.reload(() => loadForm($('#diskon').val()));
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
            }
        }

        function loadForm(diskon = 0) {
        $('#total').val($('.total').text());
        $('#total_item').val($('.total_item').text());
        $.get(`<?php echo e(url('/pembelian_detail/loadform')); ?>/${diskon}/${$('.total').text()}`)
            .done(response => {
                $('#totalrp').val('Rp. '+ response.totalrp);
                $('#bayarrp').val('Rp. '+ response.bayarrp);
                $('#bayar').val(response.bayar);
                $('.tampil-bayar').text('Rp. '+ response.bayarrp);
                $('.tampil-terbilang').text(response.terbilang);
            })
            .fail(errors => {
                alert('Tidak dapat menampilkan data');
                return;
            })
    }

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir\resources\views/pembelian_detail/index.blade.php ENDPATH**/ ?>
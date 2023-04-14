

<?php $__env->startSection('tittle'); ?>
    Transaksi Penjualan
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
    .table-detail_penjualan tbody tr:last-child {
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
    <li class="breadcrumb-item active">Transaksi Penjualan</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
    <div class="row">
      
      <section class="col-lg-12 connectedSortable">
        
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                 
                <div class="card-body table-responsive">

                        <form class="form-produk">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="kode_produk" class="col-lg-1">Kode Produk</label>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <input type="hidden" name="id_produk" id="id_produk">
                                        <input type="hidden" name="id_penjualan" id="id_penjualan" value="<?php echo e($id_penjualan); ?>">
                                        <input type="text" class="form-control" name="kode_produk" id="kode_produk">
                                        <span class="input-group-btn">
                                            <button type="button" onclick="tampilProduk()" class="btn btn-info btn-flat"><i class="fa fa-arrow-right"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <table class="table table-striped table-bordered table-detail_penjualan">
                            <thead>
                                <th width="5%">No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th width="10%">Jumlah</th>
                                <th>Diskon</th>
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
                                <form action="<?php echo e(route('transaksi.simpan')); ?>" class="form-penjualan" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id_penjualan" value="<?php echo e($id_penjualan); ?>">
                                    <input type="hidden" name="total" id="total">
                                    <input type="hidden" name="total_item" id="total_item">
                                    <input type="hidden" name="bayar" id="bayar">
                                    <input type="hidden" name="id_member" id="id_member" value="<?php echo e($member_id->id_member); ?>">
        
                                    <div class="form-group row">
                                        <label for="totalrp" class="col-lg-2 control-label">Total</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="totalrp" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kode_member" class="col-lg-2 control-label">Member</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="kode_member" value="<?php echo e($member_id->kode_member); ?>">
                                                <span class="input-group-btn">
                                                    <button type="button" onclick="tampilMember()" class="btn btn-info btn-flat"><i class="fa fa-arrow-right"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="diskon" class="col-lg-2 control-label">Diskon</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="diskon" id="diskon" class="form-control" value="<?php echo e(! empty($member_id->id_member) ? $diskon : 0); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bayar" class="col-lg-2 control-label">Bayar</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="bayarrp" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="diterima" class="col-lg-2 control-label">Diterima</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="diterima" name="diterima" value="<?php echo e($penjualan->diterima ?? 0); ?>" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kembali" class="col-lg-2 control-label">Kembali</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="kembali" name="kembali" class="form-control" value="0" readonly>
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

<?php echo $__env->make('penjualan_detail.produk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('penjualan_detail.member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        let table, table2;

    $(function(){

           table = $('.table-detail_penjualan').DataTable({
            processing: true,
            autoWidth: false,
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '<?php echo e(route('transaksi.data', $id_penjualan)); ?>',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'kode_produk'},
                {data: 'nama_produk'},
                {data: 'harga_jual'},
                {data: 'jumlah'},
                {data: 'diskon'},
                {data: 'subtotal'},
                {data: 'aksi', searchable: false, sortable: false},
            ],

            dom: 'Brt',
            bSort: false,
            paginate: false
        })
        
        .on('draw.dt', function(){
            loadForm($('#diskon').val());

            setTimeout(() => {
                $('#diterima').trigger('input');
            }, 300);
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
            $.post(`<?php echo e(url('/transaksi')); ?>/${id}`, {
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
            loadForm($('#diskon').val());
        });

        $(document).on('input', '#diterima' , function () {
            if ($(this).val() == "") {
                $(this).val(0).select();
            }
            loadForm($('#diskon').val(), $(this).val());
        });

        $('.btn-simpan').on('click', function () {
            $('.form-penjualan').submit();
        });

    }); 

       function tampilProduk() {
            $('#modal-produk').modal('show');
       }
       
       function tampilMember() {
            $('#modal-member').modal('show');
       }

       function hideProduk() {
            $('#modal-produk').modal('hide');
       }

       function hideMember() {
            $('#modal-member').modal('hide');
       }

       function pilihProduk(id, kode) {
            $('#id_produk').val(id);
            $('#kode_produk').val(kode);
            hideProduk();
            tambahProduk();
       }

       function pilihMember(id, kode) {
            $('#id_member').val(id);
            $('#kode_member').val(kode);
            $('#diskon').val('<?php echo e($diskon); ?>');
            loadForm($('#diskon').val());
            $('#diterima').val(0).focus().select();
            hideMember();
       }

       function tambahProduk() {
            $.post('<?php echo e(route('transaksi.store')); ?>', $('.form-produk').serialize())
            .done(response => {
                $('#kode_produk').focus();
                table.ajax.reload(() => loadForm($('#diskon').val()));
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

        function loadForm(diskon = 0, diterima = 0) {
        $('#total').val($('.total').text());
        $('#total_item').val($('.total_item').text());
        $.get(`<?php echo e(url('/transaksi/loadform')); ?>/${diskon}/${$('.total').text()}/${diterima}`)
            .done(response => {
                $('#totalrp').val('Rp. '+ response.totalrp);
                $('#bayarrp').val('Rp. '+ response.bayarrp);
                $('#bayar').val(response.bayar);
                $('.tampil-bayar').text('Bayar: Rp. '+ response.bayarrp);
                $('.tampil-terbilang').text(response.terbilang);

                $('#kembali').val('Rp.' + response.kembalirp);
                if($('#diterima').val() != 0){
                    $('.tampil-bayar').text('Kembali: Rp.' + response.kembalirp);
                    $('.tampil-terbilang').text(response.kembali_terbilang);
                }
            })
            .fail(errors => {
                alert('Tidak dapat menampilkan data');
                return;
            })
        }

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasir\resources\views/penjualan_detail/index.blade.php ENDPATH**/ ?>
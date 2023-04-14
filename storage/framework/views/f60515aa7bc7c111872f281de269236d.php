    <!-- Modal -->
  <div class="modal fade" id="modal-produk" tabindex="-1" role="dialog" aria-labelledby="modal-suplier" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Daftar Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table class="table table-striped table-bordered table-produk">
            <thead>
              <th width="5%">No</th>
              <th>Kode</th>
              <th>Nama</th>
              <th>Harga Beli</th>
              <th>Aksi</th>
            </thead>

            <tbody>
              <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><span class="badge badge-success"><?php echo e($item->kode_produk); ?></span></td>
                    <td><?php echo e($item->nama_produk); ?></td>
                    <td><?php echo e($item->harga_beli); ?></td>
                    <td>
                      <a href="#" class="btn-primary btn-sm btn-flat" onclick="pilihProduk('<?php echo e($item->id_produk); ?>', '<?php echo e($item->kode_produk); ?>')">
                        <i class="fa fa-check-circle"></i>Pilih
                      </a>
                    </td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

        </div>
      </div>

    </div>
  </div>


  <?php /**PATH C:\xampp\htdocs\kasir\resources\views/penjualan_detail/produk.blade.php ENDPATH**/ ?>
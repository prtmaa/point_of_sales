    <!-- Modal -->
  <div class="modal fade" id="modal-suplier" tabindex="-1" role="dialog" aria-labelledby="modal-suplier" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Daftar Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table class="table table-striped table-bordered table-supplier">
            <thead>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </thead>

            <tbody>
              <?php $__currentLoopData = $suplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($item->nama_suplier); ?></td>
                    <td><?php echo e($item->alamat); ?></td>
                    <td><?php echo e($item->telepon); ?></td>
                    <td>
                      <a href="<?php echo e(route('pembelian.create', $item->id_suplier)); ?>" class="btn-primary btn-sm btn-flat">
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


  <?php /**PATH C:\xampp\htdocs\kasir\resources\views/pembelian/suplier.blade.php ENDPATH**/ ?>
    <!-- Modal -->
  <div class="modal fade" id="modal-member" tabindex="-1" role="dialog" aria-labelledby="modal-member" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Daftar Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table class="table table-striped table-bordered table-member">
            <thead>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </thead>

            <tbody>
              <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($item->nama_member); ?></td>
                    <td><?php echo e($item->alamat); ?></td>
                    <td><?php echo e($item->telepon); ?></td>
                    <td>
                      <a href="#" class="btn-primary btn-sm btn-flat" onclick="pilihMember('<?php echo e($item->id_member); ?>', '<?php echo e($item->kode_member); ?>')">
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


  <?php /**PATH C:\xampp\htdocs\kasir\resources\views/penjualan_detail/member.blade.php ENDPATH**/ ?>
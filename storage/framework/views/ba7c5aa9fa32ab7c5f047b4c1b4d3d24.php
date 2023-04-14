

    <!-- Modal -->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog" role="document">
        
        <form action="<?php echo e(route('laporan.index')); ?>" method="get" class="form-horizontal">

          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Priode Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="form-group row">        
                      <div class="col-lg-6">
                        <label for="tanggal_awal" class="col-lg-6 col-lg-offset-1 control-label">Tanggal Awal</label>
                          <input type="text" name="tanggal_awal" id="tanggal_awal" class="form-control datepicker" data-toggle="datetimepicker" required autofocus
                              value="<?php echo e(request('tanggal_awal') ?? date('Y-m-d')); ?>"
                              style="border-radius: 0 !important;">
                          <span class="help-block with-errors"></span>
                      </div>
        
                    <div class="col-lg-6">
                        <label for="tanggal_akhir" class="col-lg-6 col-lg-offset-1 control-label">Tanggal Akhir</label>
                          <input type="text" name="tanggal_akhir" id="tanggal_akhir" class="form-control datepicker" data-toggle="datetimepicker" required
                              value="<?php echo e(request('tanggal_akhir') ?? date('Y-m-d')); ?>"
                              style="border-radius: 0 !important;">
                          <span class="help-block with-errors"></span>
                      </div>
                  </div>
                  
        
              </div>
              <div class="modal-footer">
                  <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
              </div>
          </div>
        </form>
  
      </div>
    </div>
  
  
    <?php /**PATH C:\xampp\htdocs\kasir\resources\views/laporan/form.blade.php ENDPATH**/ ?>
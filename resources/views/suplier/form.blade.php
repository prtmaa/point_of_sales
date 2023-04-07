    <!-- Modal -->
  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog" role="document">
      
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="nama_member" class="col-md-2 col-md-offset-1 control-label">Nama</label>
                        <div class="col-md 6">
                            <input type="text" name="nama_suplier" id="nama_member" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                      <div class="form-group row">
                        <label for="alamat" class="col-md-2 col-md-offset-1 control-label">Alamat</label>
                        <div class="col-md 6">
                            <textarea class="form-control" name="alamat" id="alamat" cols="15" rows="5" required></textarea>
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="telepon" class="col-md-2 col-md-offset-1 control-label">Telepon</label>
                        <div class="col-md 6">
                            <input type="number" name="telepon" id="telepon" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                </div>
                <div class="modal-footer">
                  <button  type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fa fa-xmark"></i> Batal</button>
                  <button class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </div>
        </form>

    </div>
  </div>


  
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
                        <label for="name" class="col-md-2 col-md-offset-1 control-label">Nama</label>
                        <div class="col-md 6">
                          <input type="text" class="form-control" name="name" id="name" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                      <div class="form-group row">
                        <label for="email" class="col-md-2 col-md-offset-1 control-label">Email</label>
                        <div class="col-md 6">
                            <input type="email" name="email" id="email" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="password" class="col-md-2 col-md-offset-1 control-label">Password</label>
                        <div class="col-md 6">
                            <input type="password" name="password" id="password" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="password_confirmation" class="col-md-2 col-md-offset-1 control-label">Konfiramsi Password</label>
                        <div class="col-md 6">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required data-match="#password">
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


  
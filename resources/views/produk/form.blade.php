    <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      
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
                        <label for="nama_produk" class="col-md-2 col-md-offset-1 control-label">Nama</label>
                        <div class="col-md 6">
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="id_kategori" class="col-md-2 col-md-offset-1 control-label">Kategori</label>
                      <div class="col-md 6">
                          <select name="id_kategori" id="id_kategori" class="form-control" required>
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($kategori as $key => $item)
                                <option value="{{$key}}">{{$item}}</option>
                            @endforeach
                          </select>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                      <div class="form-group row">
                        <label for="merk" class="col-md-2 col-md-offset-1 control-label">Merk</label>
                        <div class="col-md 6">
                            <input type="text" name="merk" id="merk" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="harga_beli" class="col-md-2 col-md-offset-1 control-label">Harga Beli</label>
                        <div class="col-md 6">
                            <input type="number" name="harga_beli" id="harga_beli" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="harga_jual" class="col-md-2 col-md-offset-1 control-label">Harga Jual</label>
                        <div class="col-md 6">
                            <input type="number" name="harga_jual" id="harga_jual" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="diskon" class="col-md-2 col-md-offset-1 control-label">Diskon</label>
                        <div class="col-md 6">
                            <input type="number" name="diskon" id="diskon" class="form-control" value="0">
                            <span class="help-block with-errors"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="stok" class="col-md-2 col-md-offset-1 control-label">Stok</label>
                        <div class="col-md 6">
                            <input type="number" name="stok" id="stok" class="form-control" required value="0">
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


  
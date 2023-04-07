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
              @foreach ($produk as $key => $item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td><span class="badge badge-success">{{$item->kode_produk}}</span></td>
                    <td>{{$item->nama_produk}}</td>
                    <td>{{$item->harga_beli}}</td>
                    <td>
                      <a href="#" class="btn-primary btn-sm btn-flat" onclick="pilihProduk('{{$item->id_produk}}', '{{$item->kode_produk}}')">
                        <i class="fa fa-check-circle"></i>Pilih
                      </a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>

    </div>
  </div>


  
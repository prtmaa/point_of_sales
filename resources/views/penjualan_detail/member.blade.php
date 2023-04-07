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
              @foreach ($member as $key => $item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->nama_member}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->telepon}}</td>
                    <td>
                      <a href="#" class="btn-primary btn-sm btn-flat" onclick="pilihMember('{{$item->id_member}}', '{{$item->kode_member}}')">
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


  
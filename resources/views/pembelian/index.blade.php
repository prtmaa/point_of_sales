@extends('layouts.master')

@section('tittle')
    Daftar Pembelian
@endsection

@section('badge')
    @parent
    <li class="breadcrumb-item active">Daftar Pembelian</li>
@endsection

@section('content')
<div class="container-fluid">
 
    <div class="row">
      
      <section class="col-lg-12 connectedSortable">
        
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">

                    <div class="btn-group">
                        <button onclick="addForm()" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Transaksi Baru</button>

                        @empty(! session('id_pembelian'))                          
                        <a href="{{route('pembelian_detail.index')}}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i> Transaksi Aktif</a>
                        @endempty
                    </div>

                </div>
                 
                <div class="card-body table-responsive">
                    <form action="" class="form-suplier" method="post">
                        @csrf
                        <table class="table table-striped table-bordered table-pembelian">
                            <thead>
                                <th width="5%">No</th>
                                <th>Tanggal</th>
                                <th>Supplier</th>
                                <th>Total Item</th>
                                <th>Total Harga</th>
                                <th>Diskon</th>
                                <th>Total Bayar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
    
                            </tbody>
                        </table>
                    </form>
                </div>
                
              </div>
        
            </div>

          </div>

      </section>
    </div>

@include('pembelian.suplier')
@include('pembelian.detail')
@endsection

@push('js')
    <script>
        let table, table1;

       $(function(){
           table = $('.table-pembelian').DataTable({
            processing: true,
            autoWidth: false,
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('pembelian.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'tanggal'},
                {data: 'suplier'},
                {data: 'total_item'},
                {data: 'total_harga'},
                {data: 'diskon'},
                {data: 'bayar'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
            });

            $('.table-supplier').DataTable()

            table1 = $('.table-detail').DataTable({
            processing: true,
            bSort: false,
            dom: 'Brt',
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'kode_produk'},
                {data: 'nama_produk'},
                {data: 'harga_beli'},
                {data: 'jumlah'},
                {data: 'subtotal'},
            ]
        })
       }); 

       function addForm() {
            $('#modal-suplier').modal('show');
       }

       function showDetail(url) {
            $('#modal-detail').modal('show');

            table1.ajax.url(url);
            table1.ajax.reload();
       }

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
            }
        }

    </script>
@endpush
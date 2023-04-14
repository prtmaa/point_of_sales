@extends('layouts.master')

@section('tittle')
    Dashboard
@endsection

@section('badge')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-primary">
          <div class="inner">
              <h3>{{ $kategori }}</h3>

              <p>Total Kategori</p>
          </div>
          <div class="icon">
              <i class="fa fa-cube"></i>
          </div>
          <a href="{{ route('kategori.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
          <div class="inner">
              <h3>{{ $produk }}</h3>

              <p>Total Produk</p>
          </div>
          <div class="icon">
              <i class="fa fa-cubes"></i>
          </div>
          <a href="{{ route('produk.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
          <div class="inner">
              <h3>{{ $member }}</h3>

              <p>Total Member</p>
          </div>
          <div class="icon">
              <i class="fa fa-id-card"></i>
          </div>
          <a href="{{ route('member.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
          <div class="inner">
              <h3>{{ $suplier }}</h3>

              <p>Total Suplier</p>
          </div>
          <div class="icon">
              <i class="fa fa-truck"></i>
          </div>
          <a href="{{ route('suplier.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header with-border">
              <h3 class="card-title">Grafik Pendapatan {{ tanggal_indonesia($tanggal_awal, false) }} s/d {{ tanggal_indonesia($tanggal_akhir, false) }}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="chart">
                          <!-- Sales Chart Canvas -->
                          <canvas id="salesChart" style="height: 180px;"></canvas>
                      </div>
                      <!-- /.chart-responsive -->
                  </div>
              </div>
              <!-- /.row -->
          </div>
      </div>
      <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row (main row) -->
@endsection

@push('js')
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<script>
$(function() {
  var salesChartCanvas = $('#salesChart').get(0).getContext('2d')

  var salesChartData = {
    labels: {{json_encode($data_tanggal)}},
    datasets: [
      {
        label: 'Pendapatan',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: {{json_encode($data_pendapatan)}}
      },
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, {
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  }
  )
});
</script>
@endpush
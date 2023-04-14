@extends('layouts.master')

@section('tittle')
    Dashboard
@endsection

@section('badge')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">

      <div class="card col-lg-12">
        <div class="card-body text-center">
            <h1>Selamat Datang</h1>
            <h2>Anda login sebagai KASIR</h2>
            <br><br>
            <a href="{{ route('transaksi.baru') }}" class="btn btn-success btn-lg">Transaksi Baru</a>
            <br><br><br>
        </div>
      </div>

    </div>

  </div>
@endsection
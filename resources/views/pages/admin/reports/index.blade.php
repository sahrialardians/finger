@extends('layouts.apps')

@section('title', 'Laporan Presensi')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Laporan Presensi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Laporan Presensi</div>
      </div>
    </div>

    <div class="section-body">
      {{-- <h2 class="section-title">Data Presensi</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form class="form-inline">
                <div class="form-group my-2">
                  <label for="start_date" class="form-control-label mr-2">Start date :</label>
                  <input type="date" class="form-control" id="start_date">
                </div>
                <div class="form-group mx-sm-3 my-2">
                  <label for="end_date" class="form-control-label mr-2">End date :</label>
                  <input type="date" class="form-control" id="end_date">
                </div>
                <button type="submit" class="btn btn-primary my-2">Cetak Laporan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
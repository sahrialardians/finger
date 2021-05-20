@extends('layouts.apps')

@section('title', 'Data Ketidakhadiran')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Ketidakhadiran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Ketidakhadiran</div>
      </div>
    </div>

    <div class="section-body">
      {{-- <h2 class="section-title">Data Ketidakhadiran</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ route('absences.create') }}" class="btn btn-lg btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                    </th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Jenis</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>Bedani Pitala</td>
                      <td>
                        15-04-2021
                      </td>
                      <td>Izin</td>
                      <td>Dinas ke luar kota</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>Bayu Sugiranto</td>
                      <td>
                        15-04-2021
                      </td>
                      <td>Izin</td>
                      <td>Dinas ke luar kota</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>Sahrial Ardians</td>
                      <td>
                        15-04-2021
                      </td>
                      <td>Izin</td>
                      <td>Dinas ke luar kota</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>Juanaidi Sitompul</td>
                      <td>
                        15-04-2021
                      </td>
                      <td>Izin</td>
                      <td>Dinas ke luar kota</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
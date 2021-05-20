@extends('layouts.apps')

@section('title', 'Data Jabatan')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Jabatan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Jabatan</div>
      </div>
    </div>

    <div class="section-body">
      {{-- <h2 class="section-title">Data Pegawai</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ route('positions.create') }}" class="btn btn-lg btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                    </th>
                      <th>Jabatan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>Kepala Dinas</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>Kepala Badan</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>Kepala Seksi</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>Sekretaris</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
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
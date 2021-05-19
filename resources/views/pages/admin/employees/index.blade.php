@extends('layouts.apps')

@section('title', 'Data Pegawai')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Pegawai</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Pegawai</div>
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
              <a href="{{ route('employees.create') }}" class="btn btn-lg btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                    </th>
                      <th>Photo</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>OPD</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        <img alt="image" src="{{ asset('backend/img/avatar/avatar-1.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                      </td>
                      <td>12321211</td>
                      <td>Bedani Pitala</td>
                      <td>Kadis. Dinkes</td>
                      <td>Dinas Kesehatan</td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        <img alt="image" src="{{ asset('backend/img/avatar/avatar-2.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                      </td>
                      <td>12321212</td>
                      <td>Bayu Sugiranto</td>
                      <td>Kasi. Dinas Pertanian</td>
                      <td>Dinas Pertanian</td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>
                        <img alt="image" src="{{ asset('backend/img/avatar/avatar-3.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                      </td>
                      <td>12321213</td>
                      <td>Sahrial Ardians</td>
                      <td>Kasi. Kominfo</td>
                      <td>Kominfo</td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>
                        <img alt="image" src="{{ asset('backend/img/avatar/avatar-4.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                      </td>
                      <td>12321215</td>
                      <td>Juanaidi Sitompul</td>
                      <td>Kabid. Kominfo</td>
                      <td>Kominfo</td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
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
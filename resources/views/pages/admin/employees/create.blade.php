@extends('layouts.apps')

@section('title', 'Tambah data Pegawai - Si-Akrab')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Pegawai</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Data Pegawai</a></div>
        <div class="breadcrumb-item">Form Data Pegawai</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Pegawai</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputEmail4">NIP</label>
                            <input type="number" class="form-control" name="nip" id="nip" placeholder="NIP">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                          </div>
                          <div class="form-group col-md-2">
                            <label for="degree">Gelar</label>
                            <input type="text" class="form-control" name="degree" id="degree" placeholder="Nama">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-2">
                            <label for="gender">Jenis Kelamin</label>
                            <select id="gender" class="form-control">
                              <option selected>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group col-md-7">
                            <label for="place_of_birth">Tempat Lahir</label>
                            <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" placeholder="Tempat Lahir">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="birthday">Tgl. Lahir</label>
                            <input type="date" class="form-control" id="birthday" placeholder="Tgl. Lahir">
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                              <label for="inputState">Agama</label>
                              <select id="inputState" class="form-control">
                                <option selected>Islam</option>
                                <option>Kristen</option>
                                <option>Budha</option>
                                <option>Hindu</option>
                                <option>Katolik</option>
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="opd">OPD</label>
                              <input type="text" class="form-control" name="opd" id="opd">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="position">Posisi</label>
                              <input type="text" class="form-control" name="position" id="position">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="phone_number">No. Hp</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="No. Hp">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="start_join">Mulai Bekerja</label>
                                <input type="date" class="form-control" name="start_join" id="start_join">
                            </div>
                            <div class="form-group ml-2">
                              <label for="photo">Upload Photo</label>
                              <input type="file" class="form-control-file" name="photo" id="photo">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('employees.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
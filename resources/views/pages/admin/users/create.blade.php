@extends('layouts.apps')

@section('title', 'Tambah data User')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Pegawai</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Data Users</a></div>
        <div class="breadcrumb-item">Form Data User</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Isi email anda">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="role">Role</label>
                            <select id="role" name="role" class="form-control">
                              @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                              @endforeach
                            </select>
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
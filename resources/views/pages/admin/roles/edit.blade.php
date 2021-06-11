@extends('layouts.apps')

@section('title', 'Tambah data Roles - Si-Akrab')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Roles</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('roles.index') }}">Data Roles</a></div>
        <div class="breadcrumb-item">Form Edit Data Roles</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Roles</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                          <label for="name">Role</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ $role->name }}" id="name" placeholder="Nama Roles">
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <div class="form-group">
                            <label for="guard_name">Guard</label>
                            <input type="text" class="form-control @error('guard_name') is-invalid @enderror" name="guard_name"  value="{{ $role->guard_name }}" id="guard_name" placeholder="Nama Roles">
                          </div>

                        @error('guard_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('roles.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
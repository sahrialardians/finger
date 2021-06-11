@extends('layouts.apps')

@section('title', 'Tambah data Permissions - Si-Akrab')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Permissions</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('permissions.index') }}">Data Permissions</a></div>
        <div class="breadcrumb-item">Form Data Permissions</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Permissions</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('permissions.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                          <label for="name">Permissions</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" placeholder="Nama Permissions">
                        </div>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        
                        <div class="form-group">
                            <label for="guard_name">Guard</label>
                            <input type="text" class="form-control @error('guard_name') is-invalid @enderror" name="guard_name" value="{{ old('guard_name') }}" id="guard_name" placeholder="Nama Guard">
                          </div>
  
                          @error('guard_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('permissions.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
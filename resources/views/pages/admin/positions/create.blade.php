@extends('layouts.apps')

@section('title', 'Tambah data Jabatan - Si-Akrab')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Jabatan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('positions.index') }}">Data Jabatan</a></div>
        <div class="breadcrumb-item">Form Data Jabatan</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Jabatan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('positions.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                          <label for="name">Jabatan</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama Jabatan">

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('positions.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
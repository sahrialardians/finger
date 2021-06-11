@extends('layouts.apps')

@section('title', 'Tambah data OPD - Si-Akrab')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data OPD</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('opd.index') }}">Data OPD</a></div>
        <div class="breadcrumb-item">Form Edit Data OPD</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah OPD</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('opd.update', $item->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                          <label for="name">Nama OPD</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ $item->name }}" id="name" placeholder="Nama OPD">
                        </div>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('opd.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
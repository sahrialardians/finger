@extends('layouts.apps')

@section('title', 'Tambah data Presensi - Si-Akrab')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Presensi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('attendances.index') }}">Data Presensi</a></div>
        <div class="breadcrumb-item">Form Data Presensi</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Presensi</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('attendances.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-5">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputEmail4">Tanggal</label>
                            <input type="date" class="form-control" name="date" id="date">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="check_in">Check In</label>
                            <input type="time" class="form-control" name="check_in" id="check_in">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="check_out">Check Out</label>
                            <input type="time" class="form-control" name="check_out" id="check_out">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="description">Keterangan</label>
                            <input type="text" class="form-control" name="description" id="description">
                          </div>
                        </div>
                                               
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('attendances.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
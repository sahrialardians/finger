@extends('layouts.apps')

@section('title', 'Tambah data Ketidakhadiran - Si-Akrab')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Ketidakhadiran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('absences.index') }}">Data Ketidakhadiran</a></div>
        <div class="breadcrumb-item">Form Data Ketidakhadiran</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Ketidakhadiran</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('absences.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                          <label for="name">Nama</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                          <label for="inputEmail4">Tanggal</label>
                          <input type="date" class="form-control" name="date" id="date">
                        </div>
                        <div class="form-group">
                          <label for="type_absence">Jenis Ketidakhadiran</label>
                          <select id="type_absence" name="type_absence" class="form-control">
                            <option selected>Izin</option>
                            <option>Sakit</option>
                            <option>Cuti</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="description">Keterangan</label>
                          <input type="text" class="form-control" name="description" id="description">
                        </div>
                                               
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('absences.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
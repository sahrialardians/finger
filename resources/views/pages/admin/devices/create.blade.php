@extends('layouts.apps')

@section('title', 'Tambah Perangkat Finger')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Perangkat Finger</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('devices.index') }}">Data Perangkat Finger</a></div>
        <div class="breadcrumb-item">Form Data Perangkat Finger</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Perangkat</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('devices.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                          <label for="name">Mesin</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('') }}" placeholder="Nama mesin finger">

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                          
                        </div>
                        <div class="form-group">
                          <label for="device_number">No. Mesin</label>
                          <input type="int" class="form-control @error('device_number') is-invalid @enderror" name="device_number" id="device_number" value="{{ old('device_number') }}" placeholder="Nomor mesin finger">

                          @error('device_number')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="type_of_communication">Jenis Komunikasi</label>
                          <select id="type_of_communication" value="{{ old('type_of_communication') }}" name="type_of_communication" class="form-control @error('type_of_communication') is-invalid @enderror">
                            <option value="Ethernet">Ethernet</option>
                          </select>

                          @error('type_of_communication')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="ip_address">IP Address</label>
                          <input type="text" class="form-control @error('ip_address') is-invalid @enderror" name="ip_address" id="ip_address" value="{{ old('ip_address') }}" placeholder="IP Address mesin finger">

                          @error('ip_address')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="port">Port</label>
                          <input type="int" class="form-control @error('port') is-invalid @enderror" name="port" id="port" value="{{ old('port') }}" placeholder="Port mesin finger">

                          @error('port')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="location">Lokasi</label>
                          <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" id="location" value="{{ old('location') }}" placeholder="Lokasi mesin finger">

                          @error('location')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                                               
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('devices.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
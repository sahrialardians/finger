@extends('layouts.apps')

@section('title', 'Tambah data User')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Form Data User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('users.index') }}">Data Users</a></div>
        <div class="breadcrumb-item">Form Edit Data User</div>
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
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('password') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" placeholder="Isi email anda">
                          </div>
                          
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          
                          <div class="form-group col-md-5">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name" placeholder="Nama">
                          </div>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                          <div class="form-group col-md-3">
                            <label for="role">Role</label>
                            <select id="role" name="role" class="form-control @error('password') is-invalid @enderror" value="{{ old('role') }}">
                              @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                              @endforeach
                            </select>
                            
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" autocomplete="new-password">
                          </div>
                          
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                          <div class="form-group col-md-5">
                            <label for="password-confirm">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Konfimrasi Password" autocomplete="new-password">
                          </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        <a href="{{ route('users.index') }}" class="btn btn-lg btn-light ml-2">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
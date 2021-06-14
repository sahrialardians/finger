@extends('layouts.apps')

@section('title', 'Data Pegawai')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Roles</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Roles</div>
      </div>
    </div>

    <div class="section-body">
      {{-- <h2 class="section-title">Data Pegawai</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}

      <div class="row">
        <div class="col-12">
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <strong>{{ $message }}</strong>
            </div>
          @endif

          @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
              <strong>{{ $message }}</strong>
            </div>
          @endif

          @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
              <strong>{{ $message }}</strong>
          </div>
          @endif

          @if ($message = Session::get('info'))
            <div class="alert alert-info alert-block">
              <strong>{{ $message }}</strong>
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger">
            Please check the form below for errors
          </div>
          @endif
          <div class="card">
            <div class="card-header">
              <a href="{{ route('roles.index') }}" class="btn btn-lg btn-primary">Back</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                    </th>
                      <th>Roles</th>
                      <th>Guard</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($roles as $role)
                    <tr>
                      <td>
                        {{ $role->id }}
                      </td>
                      <td>{{ $role->name }}</td>
                      <td>{{ $role->guard_name }}</td>
                      <td>
                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-success">
                          <i class="fa fa-search"></i>    
                        </a>     
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>    
                        </a>     
                        <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
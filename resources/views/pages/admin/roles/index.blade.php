@extends('layouts.apps')

@section('title', 'Role & Permissions')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Role & Permissions</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Role & Permissions</div>
      </div>
    </div>

    <div class="section-body">
      {{-- <h2 class="section-title">Data Pegawai</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}
      
    <div class="row">
        <div class="col-12">
          <div class="card">
            @can('add_roles')
            <div class="card-header">
              <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Role</a>
            </div>
            @endcan
            <div class="card-body">
              <div id="accordion-role-permissions">
                <div class="accordion">
                  @forelse ($roles as $role)
                  <div class="row">
                    <div class="col-11">
                      {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update',  $role->id ], 'class' => 'm-b']) !!}
    
                      @if($role->name === 'Superadmin')
                          @include('layouts.partials.permissions', ['title' => $role->name .' Permissions', 'options' => ['disabled'], 'showButton' => true])
                      @else
                          @include('layouts.partials.permissions', ['title' => $role->name .' Permissions', 'model' => $role, 'showButton' => true])
                      @endif

                      {!! Form::close() !!}
                    </div>
                    <div class="col-1 mt-1">
                      @can('delete_roles')
                      <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('delete')
                          <button onclick="confirm('Apakah anda yakin ingin menghapus Role ini?')" class="badge badge-pill badge-danger border-0">
                            <i class="fas fa-times"></i>
                          </button>
                      </form>
                      @endcan
                    </div>
                  </div>
    
                  @empty
                      <p>No Roles defined, please run <code>php artisan db:seed</code> to seed some dummy data.</p>
                  @endforelse
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
    {!! Form::open(['method' => 'post']) !!}
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Role</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- name Form Input -->
            <div class="form-group @if ($errors->has('name')) has-error @endif">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
    
          <!-- Submit Form Button -->
          {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>
    {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection


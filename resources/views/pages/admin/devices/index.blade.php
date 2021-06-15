@extends('layouts.apps')

@section('title', 'Data Perangkat Finger')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Perangkat Finger</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Perangkat Finger</div>
      </div>
    </div>

    <div class="section-body">
      {{-- <h2 class="section-title">Data Perangkat Finger</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ route('devices.create') }}" class="btn btn-lg btn-primary">Tambah Perankat</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                    </th>
                      <th>Mesin</th>
                      <th>Status</th>
                      <th>Jenis Komunikasi</th>
                      <th>IP Address</th>
                      {{-- <th>Com Key</th> --}}
                      <th>Port</th>
                      <th>Lokasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($devices as $device)
                    <tr>
                      <td>{{ $device->id }}</td>
                      <td>{{ $device->name }}</td>
                      <td>
                        {{!!
                        $output=shell_exec('ping -n 1 '. $device->ip_address);

                        // echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

                        if (strpos($output,'out') !== false) {
                            echo "<span class='badge badge-pill badge-danger'>Disconnect</span>";
                        }
                            elseif(strpos($output,'expired') !== false)
                        {
                            echo "Network Error";
                            echo "<span class='badge badge-pill badge-warning'>Network Error</span>";
                        }
                            elseif(strpos($output,'data') !== false)
                        {
                            echo "<span class='badge badge-pill badge-success'>Connected</span>";
                        }
                        else
                        {
                            echo "<span class='badge badge-pill badge-warning'>Unknown Error</span>";
                        }
                        !!}}
                        {{-- <span class='badge badge-pill badge-success'>Connected</span> --}}
                      </td>
                      <td>{{ $device->type_of_communication }}</td>
                      <td>{{ $device->ip_address }}</td>
                      <td>{{ $device->port }}</td>
                      <td>{{ $device->location }}</td>
                      <td>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                          <i class="fa fa-search"></i>   
                        </a> 
                        <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>    
                        </a>     
                        <form action="{{ route('devices.destroy', $device->id) }}" method="post" class="d-inline">
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
                            Tidak ada daftar perangkat.
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
  
    {{-- Modal --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{-- {{!!
              echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it
            !!}} --}}
            <pre>lkdkfjlsjlkfjljl</pre>
          </div>
        </div>
      </div>
    </div>
@endsection
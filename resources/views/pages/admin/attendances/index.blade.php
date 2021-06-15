@extends('layouts.apps')

@section('title', 'Data Presensi')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Presensi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Presensi</div>
      </div>
    </div>

    <div class="section-body">
      {{-- <h2 class="section-title">Data Presensi</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              @foreach ($devices as $device)
              <form action="tarik-data.php">
                Nama Mesin: <input type="Text" name="key" size="5" value="{{ $device->name }}"><BR>
                IP Address: <input type="Text" name="ip" value="{{ $device->ip_address }}" size=15><BR><BR>
                
                <input type="Submit" value="Lihat Presensi" class="btn btn-lg btn-primary">
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <? if($device->ip_address !=""){ ?>                  
                      <tr>
                        <th class="text-center">#</th>
                        <th>User ID</th>
                        <th>Tanggal & Check In</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                      <?
                      $Connect = fsockopen($IP, "80", $errno, $errstr, 1);
                      if($Connect){
                        $soap_request="<GetAttLog><ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg></GetAttLog>";
                        $newLine="\r\n";
                        fputs($Connect, "POST /iWsService HTTP/1.0".$newLine);
                          fputs($Connect, "Content-Type: text/xml".$newLine);
                          fputs($Connect, "Content-Length: ".strlen($soap_request).$newLine.$newLine);
                          fputs($Connect, $soap_request.$newLine);
                        $buffer="";
                        while($Response=fgets($Connect, 1024)){
                          $buffer=$buffer.$Response;
                        }
                      }else echo "Koneksi Gagal";
                      
                      include("pages.admin.attendances.partials.parse.php");
                      $buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
                      $buffer=explode("\r\n",$buffer);
                      for($a=0;$a<count($buffer);$a++){
                        $data=Parse_Data($buffer[$a],"<Row>","</Row>");
                        $PIN=Parse_Data($data,"<PIN>","</PIN>");
                        $DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
                        $Verified=Parse_Data($data,"<Verified>","</Verified>");
                        $Status=Parse_Data($data,"<Status>","</Status>");
                      ?>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>{{ $PIN }}</td>
                      <td>{{ $DateTime }}</td>
                      <td>{{ $Verified }}</td>
                      <td>{{ $Status }}</td>
                      <td>
                        <a href="#" class="btn btn-secondary">Detail</a>
                      </td>
                    </tr>
                    
	                  <?}?>
	                <?}?>
                  </tbody>
                  
              @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">
          {{-- <img class="img-fluid w-50" src="{{ asset('backend/img/logo.png') }}" alt=""> --}}
          Si-Akrab
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">SA</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item">
          <a href="{{ route('admin') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Master Data</li>
        <li class="nav-item">
          <a href="{{ route('employees.index') }}" class="nav-link" data-toggle="dropdown"><i class="fas fa-address-book"></i> <span>Data Pegawai</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-list"></i> <span>Referensi Data</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('opd.index') }}">Ref. Data OPD</a></li>
            <li><a class="nav-link" href="#">Ref. Data Jabatan</a></li>
          </ul>
        </li>
        <li class="menu-header">Presensi</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-bar"></i> <span>Transaksi Presensi</span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Data Presensi</a></li>
            <li><a href="#">Data Ketidakhadiran</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="#"><i class="fas fa-paste"></i> <span>Laporan Presensi</span></a></li>
        
        <li class="menu-header">Users</li>
        <li class="nav-item">
          <a href="#" class="nav-link"><i class="fas fa-key"></i> <span>Role & Permissions</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"><i class="fas fa-users"></i> <span>Management Users</span></a>
        </li>
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Settings
        </a>
      </div>
  </aside>
<nav class="pcoded-navbar">
    <div class="sidebar_toggle">
        <a href="#"><i class="icon-close icons"></i></a>
    </div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img style="width: 50px; height:50px; object-fit:cover;"
                class="img-radius img-fluid rounded-circle" src="{{ asset('ppuser/' . $user->foto) }}" alt="User-Profile-Image" />
                <div class="user-details">
                    <span>{{ $user->nama }}</span>
                    <span id="more-details">{{ $user->role }}</span>
                </div>
            </div>
            <div class="main-menu-content">
              <ul>
                  <li class="more-details">
                      <a class="text-decoration-none" href="/profil"><i class="ti-user"></i>View Profile</a>
                      <a class="text-decoration-none logout" href="#"><i class="ti-layout-sidebar-left"></i>Logout</a>
                  </li>
              </ul>
          </div>
        </div>
        <hr>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">
            Master Data
        </div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="/admin">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="active">
                <a href="/datamasyarakat">
                    <span class="pcoded-micon"><i class="fi-sr-users-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Masyarakat</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @can('admin')
            <li class="active">
                <a href="/datapetugas">
                    <span class="pcoded-micon"><i class="fi-sr-users-gear"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Petugas</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endcan
            <li class="active">
                <a href="/datakategori">
                    <span class="pcoded-micon"><i class="fi fi-sr-layers"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Kategori</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">
            Laporan
        </div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="/laporanpengaduan">
                    <span class="pcoded-micon"><i class="fi-sr-envelope-open-text"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Data Laporan</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
@can('admin')
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">
    Report
</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="active">
        <a href="/generate">
            <span class="pcoded-micon"><i class="fi-sr-print"></i></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Generate</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
@endcan
        
    </div>
</nav>

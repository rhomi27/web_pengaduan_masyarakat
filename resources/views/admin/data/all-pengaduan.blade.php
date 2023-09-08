<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PengaduKu - Semua Pengaduan Masyarakat</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="description"
      content="CodedThemes"
    />
    <meta
      name="keywords"
      content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app"
    />
    <meta
      name="author"
      content="CodedThemes"
    />
    <!-- Favicon icon -->
    @include('admin.template.cssLink')

  <!--<body class="fix-menu dark-layout">-->

  <body>
    <!-- Pre-loader start -->
    @include('admin.template.loader')
    <!-- Pre-loader end -->

    <div
      id="pcoded"
      class="pcoded"
    >
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <!-- nav -->
        @include('admin.template.nav')
        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            <!-- side -->
            @include('admin.template.side')
            <div class="pcoded-content">
              <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                  <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                      <div class="row align-items-end">
                        <div class="col-lg-8">
                          <div class="page-header-title">
                            <i class="icofont icofont-layout bg-c-blue"></i>
                            <div class="d-inline">
                              <h4>Semua Pengaduan</h4>
                              <span>ini adalah semua pengaduan masyarakat</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                              <li class="breadcrumb-item">
                                <a class="text-decoration-none"  href="/admin">
                                  <i class="icofont icofont-home"></i>
                                </a>
                              </li>
                              <li class="breadcrumb-item">
                                <a class="text-decoration-none" href="#!">Semua Pengaduan</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page body start -->
                    <div class="page-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <!-- Material tab card start -->
                          <div class="card">
                            <div class="card-header">
                              <h5>Data Pengaduan</h5>
                            </div>
                            <div class="card-block">
                              <!-- Row start -->
                              <div class="row m-b-30">
                                <div class="col-lg-12 col-xl-12">
                                  <!-- Nav tabs -->
                                  <ul
                                    class="nav nav-tabs md-tabs"
                                    role="tablist"
                                  >
                                    <li class="nav-item">
                                      <a
                                        class="nav-link active"
                                        data-toggle="tab"
                                        href="#home3"
                                        role="tab"
                                        >New</a
                                      >
                                      <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                      <a
                                        class="nav-link"
                                        data-toggle="tab"
                                        href="#profile3"
                                        role="tab"
                                        >Proses</a
                                      >
                                      <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                      <a
                                        class="nav-link"
                                        data-toggle="tab"
                                        href="#messages3"
                                        role="tab"
                                        >Selesai</a
                                      >
                                      <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                      <a
                                        class="nav-link"
                                        data-toggle="tab"
                                        href="#settings3"
                                        role="tab"
                                        >Ditolak</a
                                      >
                                      <div class="slide"></div>
                                    </li>
                                  </ul>
                                  <!-- Tab panes -->
                                  <div class="tab-content card-block">
                                    <div
                                      class="tab-pane active"
                                      id="home3"
                                      role="tabpanel"
                                    >
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Judul Pengaduan</th>
                                                    <th>Nama Pelapor</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($laporanNew as $ln )
                                              <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $ln->created_at->format('d F, Y') }}</td>
                                                <td>{{ $ln->judul }}</td>
                                                <td>{{ $ln->user->nama }}</td>
                                                <td>{{ $ln->kategori->nama_kategori }}</td>
                                                <td><span class="badge bg-primary">{{ $ln->status }}</span></td>
                                                <td><a class="btn btn-info btn-sm" href="/viewdetail/{{ $ln->id }}"><i class="ti-menu-alt"></i></a></td>
                                            </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <div
                                      class="tab-pane"
                                      id="profile3"
                                      role="tabpanel"
                                    >
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Judul Pengaduan</th>
                                                    <th>Nama Pelapor</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($laporanProses as $lp )
                                              <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $lp->updated_at->format('d F, Y') }}</td>
                                                <td>{{ $lp->judul }}</td>
                                                <td>{{ $lp->user->nama }}</td>
                                                <td>{{ $lp->kategori->nama_kategori }}</td>
                                                <td><span class="badge bg-success">{{ $lp->status }}</span></td>
                                                <td><a class="btn btn-info btn-sm" href="/viewdetail/{{ $lp->id }}"><i class="ti-menu-alt"></i></a></td>
                                            </tr>
                                              @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <div
                                      class="tab-pane"
                                      id="messages3"
                                      role="tabpanel"
                                    >
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Judul Pengaduan</th>
                                                    <th>Nama Pelapor</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($laporanSelesai as $ls )
                                              <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $ls->updated_at->format('d F, Y') }}</td>
                                                <td>{{ $ls->judul }}</td>
                                                <td>{{ $ls->user->nama }}</td>
                                                <td>{{ $ls->kategori->nama_kategori }}</td>
                                                <td><span class="badge bg-info">{{ $ls->status }}</span></td>
                                                <td><a class="btn btn-info btn-sm" href="/viewdetail/{{ $ls->id }}"><i class="ti-menu-alt"></i></a></td>
                                            </tr>
                                              @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <div
                                      class="tab-pane"
                                      id="settings3"
                                      role="tabpanel"
                                    >
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Judul Pengaduan</th>
                                                    <th>Nama Pelapor</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($laporanDitolak as $ld )
                                              <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $ld->updated_at->format('d F, Y') }}</td>
                                                <td>{{ $ld->judul }}</td>
                                                <td>{{ $ld->user->nama }}</td>
                                                <td>{{ $ld->kategori->nama_kategori }}</td>
                                                <td><span class="badge bg-danger">{{ $ld->status }}</span></td>
                                                <td><a class="btn btn-info btn-sm" href="/viewdetail/{{ $ld->id }}"><i class="ti-menu-alt"></i></a></td>
                                            </tr>
                                              @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Row end -->
                            </div>
                          </div>
                          <!-- Material tab card end -->
                        </div>
                      </div>
                    </div>
                    <!-- Page body end -->
                  </div>
                </div>
                <!-- Main-body end -->

                <div id="styleSelector"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Required Jquery -->
    @include('admin.template.js')
  </body>
</html>

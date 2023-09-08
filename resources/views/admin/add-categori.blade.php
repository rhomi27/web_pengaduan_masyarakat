<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM - Tambah Data Kategori</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes" />
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="CodedThemes" />
{{-- csslink --}}
@include('admin.template.cssLink')
</head>

<body>
    <!-- Pre-loader start -->
@include('admin.template.loader')
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- navbar top -->
            @include('admin.template.nav')
            <!-- end navbar -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- side bar -->
                    @include('admin.template.side')
                    <!-- end sidebar -->

                    <!-- contentt -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                          <div class="col-lg-8">
                                            <div class="page-header-title">
                                              <i class="icofont icofont-layout bg-c-blue"></i>
                                              <div class="d-inline">
                                                <h4>Tambah Kategori</h4>
                                                <span>ini adalah tambah data kategori</span>
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
                                                    <a class="text-decoration-none" href="/datakategori">Data kategori</a>
                                                  </li>
                                                <li class="breadcrumb-item">
                                                  <a class="text-decoration-none" href="#!">Tambah kategori</a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="page-body">


                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Tambahkan Kategori</h4>
                                            </div>
                                            <div class="card-body">
                                                <form action="/addkategori" method="post">
                                                @csrf
                                                <div class="form-floating mb-3">
                                                    <input name="nama_kategori" type="text" class="form-control" id="floatingInput"
                                                        placeholder="nama kategori" required>
                                                    <label for="floatingInput">Nama Kategori</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input name="deskripsi" type="text" class="form-control" id="floatingPassword"
                                                        placeholder="description" required>
                                                    <label for="floatingPassword">Deskripsi</label>
                                                </div>
                                                <button type="submit" class="btn btn-outline-info mt-5 w-100"><i class="fi-sr-download"></i> Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="styleSelector"></div>
                            </div>
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

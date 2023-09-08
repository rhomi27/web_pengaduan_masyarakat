<!DOCTYPE html>
<html lang="en">
  <head>
    <title>APM | Tambah Data Masyarakat</title>
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
{{-- csslink --}}
@include('admin.template.cssLink')
{{--  --}}
  </head>

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
                              <h4>Tambah Masyarakat</h4>
                              <span>ini adalah tambah data masyarakat</span>
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
                                <a class="text-decoration-none" href="/datamasyarakat">Data masyarakat</a>
                              </li>
                              <li class="breadcrumb-item">
                                <a class="text-decoration-none" href="#!">Tambah masyarakat</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="page-body">
                      <div class="card">
                        <div class="card-header">
                          <h4>Tambah Data Masyarakat</h4>
                        </div>
                        <div class="card-body">
                          <div
                            class="row-cols-md-0 justify-content-center"
                          ></div>
                          <form action="/addmasyarakat" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col-md">
                                <div class="form-floating mb-3">
                                  <input name="nik"
                                    type="text"
                                    class="form-control"
                                    id="floatingNIK"
                                    placeholder="Isi Nomor Induk Kependudukan Anda"
                                  />
                                  <label for="floatingNIK"
                                    >Nomor Induk Kependudukan</label
                                  >
                                </div>
                                <div class="form-floating mb-3">
                                  <input name="nama"
                                    type="text"
                                    class="form-control"
                                    id="floatingName"
                                    placeholder="description"
                                  />
                                  <label for="floatingName">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input name="alamat"
                                    type="text"
                                    class="form-control"
                                    id="floatingAlamat"
                                    placeholder="description"
                                  />
                                  <label for="floatingAlamat">Alamat</label>
                                </div>
                              </div>
                              <div class="col-md">
                                <div class="form-floating mb-3">
                                  <select name="kelamin"
                                    class="form-control"
                                    id="floatingJK"
                                  >
                                    <option selected>
                                      ---Pilih Jenis Kelamin---
                                    </option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                  </select>
                                  <label for="floatingJK">Jenis Kelamin</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input name="email"
                                    type="email"
                                    class="form-control"
                                    id="floatingEmail"
                                    placeholder="description"
                                  />
                                  <label for="floatingEmail">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input name="password"
                                    type="password"
                                    class="form-control"
                                    id="floatingPassword"
                                    placeholder="description"
                                  />
                                  <label for="floatingPassword">Kata Sandi</label>
                                </div>
                              </div>
                              <div class="input-group mb-3">
                                <input name="foto"
                                  type="file"
                                  class="form-control"
                                  aria-describedby="basic-addon2"
                                />
                                <span
                                  class="input-group-text"
                                  id="basic-addon2"
                                  >Opsional</span
                                >
                              </div>
                              <button class="btn btn-outline-info mt-5 w-100">
                                <i class="fi-sr-download"></i> Simpan
                              </button>
                            </div>
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

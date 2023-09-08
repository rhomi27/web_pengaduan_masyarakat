<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM - Update Data User</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes" />
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="CodedThemes" />
    <!-- Favicon icon -->
    @include('admin.template.cssLink')
    <style>
        .cover-photo img {
            max-height: 300px;
            width: 100%;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .profile-picture {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-top: -99px;
            border: 5px solid #ffffff;
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }

        .bio {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Pre-loader start -->
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- navbar -->
            @include('admin.template.nav')
            <!-- navbar end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- sidebar -->
                    @include('admin.template.side')
                    <!-- end side -->

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
                                                <h4>Edit Pengguna</h4>
                                                <span>ini adalah edie pengguna</span>
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
                                                    <a class="text-decoration-none" href="/datamasyarakat">Data pengguna</a>
                                                  </li>
                                                <li class="breadcrumb-item">
                                                  <a class="text-decoration-none" href="#!">Edit pengguna</a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="page-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-5 mb-4">
                                                    <div class="card">
                                                        <div class="cover-photo">
                                                            <img src="{{ asset('ppuser/' . $du->foto) }}" class="w-100"
                                                                alt="Cover Photo" />
                                                        </div>
                                                        <div class="profile-info text-center my-4">
                                                            <img id="profile-picture-preview"
                                                                src="{{ asset('ppuser/' . $du->foto) }}"
                                                                class="profile-picture rounded-circle"
                                                                alt="Profile Picture" />
                                                            <h1 class="name">{{ $du->nama }}</h1>
                                                            <p class="bio">Nomor Induk Kependudukan:
                                                                {{ $du->nik }}</p>
                                                            <p class="bio">
                                                                Alamat: {{ $du->alamat }}
                                                            </p>
                                                            <p class="bio">Jenis Kelamin: {{ $du->kelamin }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Perbarui Data</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row-cols-md-0 justify-content-center">
                                                                <div class="row">
                                                                    <div class="col-md">
                                                                        <!-- Nav tabs -->
                                                                        <ul class="nav nav-tabs tabs" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active"
                                                                                    data-toggle="tab" href="#home1"
                                                                                    role="tab">Ubah Profil</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-toggle="tab"
                                                                                    href="#profile1" role="tab">Ubah
                                                                                    Password</a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content tabs card-block">
                                                                            <div class="tab-pane active" id="home1"
                                                                                role="tabpanel">
                                                                                <form
                                                                                    action="/updateUser/{{ $du->id }}"
                                                                                    method="post"
                                                                                    enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="form-floating mb-3">
                                                                                        <input name="nama"
                                                                                            value="{{ $du->nama }}"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="floatingName"
                                                                                            placeholder="description" />
                                                                                        <label for="floatingName">Nama
                                                                                            Lengkap</label>
                                                                                    </div>
                                                                                    <div class="form-floating mb-3">
                                                                                        <input name="alamat"
                                                                                            value="{{ $du->alamat }}"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="floatingAlamat"
                                                                                            placeholder="description" />
                                                                                        <label
                                                                                            for="floatingAlamat">Alamat</label>
                                                                                    </div>
                                                                                    <div class="form-floating mb-3">
                                                                                        <input name="email"
                                                                                            value="{{ $du->email }}"
                                                                                            type="email"
                                                                                            class="form-control"
                                                                                            id="floatingEmail"
                                                                                            placeholder="description" />
                                                                                        <label
                                                                                            for="floatingEmail">Email</label>
                                                                                    </div>
                                                                                    <div class="input-group mb-3">
                                                                                        <input name="foto"
                                                                                            type="file"
                                                                                            class="form-control"
                                                                                            aria-describedby="basic-addon2" />
                                                                                        <span class="input-group-text"
                                                                                            id="basic-addon2">Opsional</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-grid gap-2 col-10 mx-auto">
                                                                                        <button type="submit"
                                                                                            class="btn btn-outline-info mt-4 mb-md-2 w-100">
                                                                                            Simpan
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="tab-pane" id="profile1"
                                                                                role="tabpanel">
                                                                                <form
                                                                                    action="/updatepassword/{{ $du->id }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    <div
                                                                                        class="form-floating mt-3 mb-3">
                                                                                        <input name="new_password"
                                                                                            type="password"
                                                                                            class="form-control"
                                                                                            id="floatingPassword"
                                                                                            placeholder="description"
                                                                                            required />
                                                                                        <label
                                                                                            for="floatingPassword">Password
                                                                                            Baru</label>
                                                                                    </div>
                                                                                    <div class="form-floating mb-3">
                                                                                        <input
                                                                                            name="new_password_confirmation"
                                                                                            type="password"
                                                                                            class="form-control"
                                                                                            id="floatingPassword1"
                                                                                            placeholder="description"
                                                                                            required />
                                                                                        <label
                                                                                            for="floatingPassword1">Konfirmasi
                                                                                            Password</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-grid gap-2 col-10 mx-auto">
                                                                                        <button
                                                                                            class="btn btn-outline-info mt-4 mb-md-2 w-100">
                                                                                            Simpan
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
@if (session()->has('success'))
<script>
    Swal.fire({
  icon: 'success',
  title: 'Mantapp',
  text: "{{ session('success') }}",
})
   </script>
@endif

</html>

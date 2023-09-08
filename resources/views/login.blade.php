<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk dan Daftar</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url("assets/img/background.jpg") no-repeat center center fixed;
            background-size: cover;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.288);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 5px 10px #000000;
            width: 100%;
            max-width: 600px;
        }

        .input-form {
            border: none;
            border-bottom: 1px solid #00054e;
            color: #000000;
            text-shadow: #00054e;
            background: no-repeat;
            padding: 10px;
            padding-left: 24px;
            font-weight: 100;
            width: 100%;
            transition: 0.2s;
        }

        .input-form::placeholder {
            color: rgb(6, 0, 83);
        }

        .input-form:active,
        .input-form:focus,
        .input-form:hover {
            outline: none;
            border-bottom-color: #ffffff;
        }

        .input-foto {
            border: none;
            background-color: #b8bcf4;
            border-bottom: #000000;
            transition: 0.5s;
        }

        .input-foto:hover {
            background-color: #6f78f9;
        }
    </style>
</head>

<body>
    {{-- login register --}}
    <div class="login-box">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active text-dark" id="login-tab" data-toggle="tab" href="#login" role="tab"
                    aria-controls="login" aria-selected="true">Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" id="register-tab" data-toggle="tab" href="#register" role="tab"
                    aria-controls="register" aria-selected="false">Daftar</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <h2 class="text-center mb-5">Masuk</h2>
                {{-- login form --}}
                <form action="/login" method="POST">
                    @csrf
                    <div class="row-cols-1">
                        <div class="form-group mb-3 mt-4">
                            <label for="email">Email</label>
                            <input name="textEmail"
                                class="form-control input-form @error('textEmail')is-invalid @enderror" type="text"
                                id="email" placeholder="Email" required />
                            @error('textEmail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-5">
                            <label for="password">Kata Sandi</label>
                            <input name="textPassword"
                                class="form-control input-form @error('textPassword') is-invalid @enderror"
                                type="password" id="password" placeholder="Kata Sandi" required />
                            @error('textPassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="mt-2">
                                <input type="checkbox" name="cek" id="showPassword" />
                                <span>Lihat Kata Sandi</span>
                            </p>
                        </div>
                        <button class="btn btn-outline-light" type="submit">
                            Masuk
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <h2 class="text-center mb-4">Daftar</h2>
                {{-- registrasi form --}}
                <form action="/regis" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row-cols-md-0 justify-content-center">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group mb-2">
                                    <label for="nik">NIK</label>
                                    <input name="textNik"
                                        class="form-control input-form @error('textNik')is-invalid @enderror"
                                        type="text" id="nik" placeholder="NIK" required />
                                    @error('textNik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group mb-2">
                                    <label for="nama">Nama Lengkap</label>
                                    <input name="textNama" class="form-control input-form" type="text" id="nama"
                                        placeholder="Nama Lengkap" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group mb-2">
                                    <label for="alamat">Alamat</label>
                                    <input name="textAlamat" class="form-control input-form" type="text"
                                        id="alamat" placeholder="Alamat" required />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="form-control input-form" name="JK" id="jk" required>
                                        <option selected>--Pilih Jenis Kelamin--</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">Email</label>
                            <input name="textEmail"
                                class="form-control input-form @error('textEmail')is-invalid @enderror" type="text"
                                id="email" placeholder="Email" required />
                            @error('textEmail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Kata Sandi</label>
                            <input name="textPassword"
                                class="form-control input-form @error('textPassword')is-invalid @enderror"
                                type="password" id="password" placeholder="Kata Sandi" required />
                            @error('textPassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <input name="fotoProfil" type="file" class="form-control input-foto"
                                id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">opsional photo</label>
                        </div>
                        <button class="btn btn-outline-light w-100" type="submit">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
    <script src="
        https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js
        "></script>
    {{-- notifikasi --}}
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '',
                text: "{{ session('success') }}",
            })
        </script>
    @endif
    @if (session()->has('gagal'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '',
                text: "{{ session('gagal') }}",
            })
        </script>
    @endif
    {{-- end notif --}}
</body>

</html>

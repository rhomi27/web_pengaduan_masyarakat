<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>
    <!-- Include Bootstrap CSS -->
    @include('user.template.link')
    <!-- Include your custom CSS -->
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            width: 100%;
        }

        .kartu {
            box-shadow: 0 10px 5px rgba(13, 12, 12, 0.555);
            max-width: 800px;
            width: 100%;
        }

        .cover-photo img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border: 1px solid rgba(183, 114, 248, 0.662);
        }

        .profile-picture {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-top: -99px;
            border: 5px solid #b79ff8;
        }

        .profile-info {
            max-width: 100%;
            max-height: 100%;

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

        /* Responsive styles */
        @media (max-width: 576px) {
            .cover-photo img {
                max-height: 200px;
            }

            .profile-picture {
                width: 100px;
                height: 100px;
                margin-top: -50px;
            }
        }
    </style>
</head>

<body>
    @include('user.template.nav')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Profile</h3>
            </div>
        </div>
    </section>
    <div class="container d-flex justify-content-center">
        <div class="card kartu">
            <div class="row justify-content-center">
                <div class="col-md">
                    <div class="cover-photo">
                        <img src="{{ asset('ppuser/' . $user->foto) }}" class="w-100" alt="Cover Photo" />
                    </div>
                    <div class="profile-info text-center my-4">
                        <img src="{{ asset('ppuser/' . $user->foto) }}" class="profile-picture rounded-circle"
                            alt="Profile Picture" />
                        <h1 class="name">{{ $user->nama }}</h1>
                    </div>
                </div>
                <div class="container mt-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1">Bio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2">Ubah Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3">Ubah Password</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div id="tab1" class="tab-pane fade show active">
                            <div class="profile-info text-center my-4">
                                <h4>Info Saya</h4>
                                <p class="bio">NIK: {{ $user->nik }}</p>
                                <p class="bio">Alamat: {{ $user->alamat }}</p>
                                <p class="bio">Jenis Kelamin: {{ $user->kelamin }}</p>
                                <p class="bio">Saya Sebagai: {{ $user->role }}</p>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="profile-info text-center my-4">
                                <h4>Perbarui Data</h4>
                                <form action="/updateprofil" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row justify-content-evenly">
                                        <div class="col m-4">
                                            <div class="form-floating mb-3">
                                                <input name="nama" value="{{ $user->nama }}" type="text"
                                                    class="form-control regis-input" id="floatingName"
                                                    placeholder="description" />
                                                <label for="floatingName">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="alamat" value="{{ $user->alamat }}" type="text"
                                                    class="form-control regis-input" id="floatingAlamat"
                                                    placeholder="description" />
                                                <label for="floatingAlamat">Alamat</label>
                                            </div>
                                        </div>
                                        <div class="col m-4">
                                            <div class="form-floating mb-3">
                                                <input name="email" value="{{ $user->email }}" type="email"
                                                    class="form-control regis-input" id="floatingEmail"
                                                    placeholder="description" />
                                                <label for="floatingEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select name="kelamin" class="form-control regis-input" id="floatingJK">
                                                    <option value="{{ $user->kelamin }}">{{ $user->kelamin }}</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                                <label for="floatingJK">Kelamin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-11 mx-auto">
                                        <div class="input-group mb-3">
                                            <input name="profile_picture" type="file"
                                                class="form-control regis-input" aria-describedby="basic-addon2" />
                                            <span class="input-group-text" id="basic-addon2">Foto Profil</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-10 mx-auto">
                                        <button type="submit" class="btn btn-outline-info mt-4 mb-md-2 w-100">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="profile-info text-center my-4">
                                <h4>Perbarui Password</h4>
                                <form action="/updatedPassword" method="post">
                                    @csrf
                                    <div class="d-grid gap-2 col-10 mx-auto">
                                        <div class="form-floating mb-2">
                                            <input name="new_password" type="password" class="form-control regis-input"
                                                placeholder="kata sandi" id="pw" required><label
                                                for="pw">Password Baru</label>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-10 mx-auto">
                                        <div class="form-floating mb-2">
                                            <input name="password_confirm" type="password"
                                                class="form-control regis-input" placeholder="kata sandi"
                                                id="pw1"><label for="pw1" required>Konfirmasi Password</label>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-10 mx-auto">
                                        <button type="submit" class="btn btn-outline-info mt-4 mb-md-2 w-100">
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

    @include('user.template.footer')

    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Mantapp',
                text: "{{ session('success') }}",
            })
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Etsss Salah ',
                text: "{{ session('error') }}",
            })
        </script>
    @endif
</body>

</html>

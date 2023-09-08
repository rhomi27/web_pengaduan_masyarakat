<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM | Data Kategori</title>
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
                                                <h4>Data Kategori</h4>
                                                <span>ini adalah semua data kategori</span>
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
                                                  <a class="text-decoration-none" href="#!">Data kategori</a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row justify-content-between">
                                                    <div class="col-md-auto">
                                                        <h4 class="card-title mb-2">Data Kategori</h4>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <div class="input-group mt-2">
                                                            <a href="/viewaddkategori"
                                                                class="btn btn-outline-success w-100"><i
                                                                    class="fi-sr-add-document"></i>Tambah Data</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row justify-content-end">
                                                    <div class="col-md-6">
                                                        {{-- <div class="input-group mt-2">
                                                            <button class="btn btn-grd-info" type="button"
                                                                id="button-addon2">
                                                                Search
                                                                <i class="ti-search" aria-hidden="true"></i>
                                                            </button>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search" aria-label="Search"
                                                                aria-describedby="button-addon2" />
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    @if (count($dataKategori) > 0)
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama Kategori</th>
                                                                    <th>Deskripsi</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($dataKategori as $dk)
                                                                    <tr>
                                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                                        <td>{{ $dk->nama_kategori }}</td>
                                                                        <td style="width: 800px;" class="text-wrap">
                                                                            {{ Str::limit($dk->deskripsi, 100) }}</td>
                                                                        <td>
                                                                            <a class="btn btn-action"
                                                                                href="/viewUpdateKategori/{{ $dk->id }}"><i
                                                                                    class="ti-menu-alt"></i></a>
                                                                            <a class="btn btn-action delete"
                                                                                data-id="{{ $dk->id }}"
                                                                                data-nama="{{ $dk->nama_kategori }}"
                                                                                href="#"><i
                                                                                    class="fi-sr-delete-document"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                                <tr>
                                                                    <td colspan="5" class="text-center">Data masih
                                                                        kosong. Silahkan tambahkan data.</td>
                                                                </tr>
                                                    @endif
                                                    </tbody>
                                                    </table>
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

    @if (session()->has('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: "{{ Session::get('success') }}"
            })
        </script>
    @endif

    <script>
        $('.delete').click(function() {
            var idkategori = $(this).attr('data-id');
            var namakategori = $(this).attr('data-nama');
            Swal.fire({
                title: 'Benerann?',
                text: "Anda akan menghapus data " + namakategori + "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus ini'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/deleteKategori/" + idkategori + ""
                    Swal.fire(
                        'Berhasil',
                        "Data " + namakategori + " telah dihapus",
                        'success'
                    )
                }
            })
        });
    </script>
</body>

</html>

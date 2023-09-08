<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM | Data Masyarakat</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes" />
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="CodedThemes" />
    <!-- css link -->
    @include('admin.template.cssLink')
</head>

<body>
    <!-- Pre-loader start -->
    @include('admin.template.loader')
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
                                                        <h4>Data Masyarakat</h4>
                                                        <span>ini adalah semua data masyarakat</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a class="text-decoration-none" href="/admin">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item">
                                                            <a class="text-decoration-none" href="#!">Data
                                                                masyarakat</a>
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
                                                        <h4 class="card-title mb-2">Data Masyarakat</h4>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <div class="input-group mt-2">
                                                            <a href="/viewaddmasyarakat"
                                                                class="btn btn-outline-success w-100"><i
                                                                    class="fi-sr-user-add"></i>Tambah Data</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row justify-content-end">
                                                    <div class="col-md-6">
                                                        {{-- <form action="/datamasyarakat" method="get">
                                                            @csrf
                                                            <div class="input-group mt-2">
                                                                <button class="btn btn-grd-info" type="submit"
                                                                    id="button-addon2">
                                                                    Search
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </button>
                                                                <input type="text" name="query" class="form-control"
                                                                    placeholder="Search" aria-label="Search"
                                                                    aria-describedby="button-addon2" />
                                                            </div>
                                                        </form> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nomor Induk Kependudukan</th>
                                                                <th>Nama Lengkap</th>
                                                                <th>Alamat</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (count($dataMasyarakat) > 0)
                                                                @foreach ($dataMasyarakat as $dm)
                                                                    <tr>
                                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                                        <td>{{ $dm->nik }}</td>
                                                                        <td>{{ $dm->nama }}</td>
                                                                        <td>{{ $dm->alamat }}</td>
                                                                        <td>
                                                                            <a class="btn btn-action"
                                                                                title="pengaduan user"
                                                                                href="/viewPengaduan/{{ $dm->id }}"><i
                                                                                    class="fi-sr-file-circle-info"></i></a>
                                                                            @can('admin')
                                                                                <a class="btn btn-action" title="edit user"
                                                                                    href="/viewUpdateUser/{{ $dm->id }}"><i
                                                                                        class="fi-sr-edit"></i></a>
                                                                                <a class="btn btn-action delete"
                                                                                    data-id="{{ $dm->id }}"
                                                                                    data-nama="{{ $dm->nama }}"
                                                                                    href="#"><i
                                                                                        class="fi-sr-delete-user"></i></a>
                                                                            @endcan
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

    <script>
        $('.delete').click(function() {
            var iduser = $(this).attr('data-id');
            var namauser = $(this).attr('data-nama');
            Swal.fire({
                title: 'Benerann?',
                text: "Anda akan menghapus data dengan nama " + namauser + "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus ini'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/deleteuser/" + iduser + ""
                    Swal.fire(
                        'Berhasil',
                        "Data " + namauser + " telah dihapus",
                        'success'
                    )
                }
            })
        });
    </script>
</body>

</html>

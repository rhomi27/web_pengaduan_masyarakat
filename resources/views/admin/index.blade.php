<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM ADMIN | Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes" />
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="CodedThemes" />
    {{-- css --}}
    @include('admin.template.cssLink')
    {{-- end --}}
</head>

<body>
    @include('admin.template.loader')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            {{-- navbar --}}
            @include('admin.template.nav')
            {{-- end navbar --}}
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    {{-- sidebar --}}
                    @include('admin.template.side')
                    {{-- endSidebar --}}
                    <!-- contentt -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont fi-sr-users-alt bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Masyarakat</span>
                                                        <h4>{{ $totalMasyarakat }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont fi fi-sr-layers bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Kategori</span>
                                                        <h4>{{ $totalKategori }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont  fi-sr-books bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Laporan</span>
                                                        <h4>{{ $totalPengaduan }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont fi-sr-users-gear bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Petugas</span>
                                                        <h4>{{ $totalPetugas }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Data Laporan Pengaduan</h5>

                                                {{-- <div class="input-group mt-4 mb-1">
                                                    <input type="text" class="form-control" placeholder="Search"
                                                        aria-label="Search" aria-describedby="button-addon2" />
                                                    <button class="btn btn-grd-info" type="button" id="button-addon2">
                                                        Search
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </button>
                                                </div> --}}
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li>
                                                            <i class="icofont icofont-simple-left"></i>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-maximize full-card"></i>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-minus minimize-card"></i>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-refresh reload-card"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal</th>
                                                                <th>Judul Pengaduan</th>
                                                                <th>Kategori</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (count($datalaporan) > 0)
                                                                @foreach ($datalaporan as $d)
                                                                    <tr>
                                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                                        <td>{{ $d->created_at->format('d F, Y') }}</td>
                                                                        <td>{{ $d->judul }}</td>
                                                                        <td>{{ $d->kategori->nama_kategori }}</td>
                                                                        <td>
                                                                            <small><a
                                                                                    class="btn btn-action"
                                                                                    href="/viewdetail/{{ $d->id }}"><i
                                                                                        class="ti-menu-alt"></i></a></small>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                                <tr>
                                                                    <td colspan="5" class="text-center">Data masih
                                                                        kosong.</td>
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="card-footer">

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
    {{-- script js --}}
    @include('admin.template.js')
    {{-- end --}}
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '',
                text: "{{ session('success') }}",
            })
        </script>
    @endif
</body>

</html>

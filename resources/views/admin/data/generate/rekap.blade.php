<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM | Tambah Data Masyarakat</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes" />
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="CodedThemes" />
    {{-- csslink --}}
    @include('admin.template.cssLink')
    {{--  --}}
</head>

<body>
    <!-- Pre-loader start -->
    @include('admin.template.loader')
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- navbar top -->

            <!-- end navbar -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- side bar -->

                    <!-- end sidebar -->

                    <!-- contentt -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="content-wrapper">
                                            <!-- Content Header (Page header) -->
                                            <div class="container mt-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <button class="btn btn-secondary" id="cetakButton">
                                                            <i class="fa fa-print"></i> Cetak Laporan
                                                        </button>
                                                        <a href="/generate"
                                                            class="btn btn-warning float-sm-right">
                                                            <i class="fa fa-undo"></i> Kembali
                                                        </a>
                                                    </div>
                                                    <div class="card-body report">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12">
                                                                <h3 class="h-report text-center"> APM Masyarakat Seluruh Indonesia
                                                                </h3>
                                                                <div class="h-report-detail text-center">
                                                                    <i class="fa fa-bars"></i> Jl. Banyu Mengalir No.
                                                                    123 Jawa Barat KP. 12345 <i class="fa fa-phone">
                                                                    </i> +1 1233456788
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12">
                                                                Laporan Pengaduan Bulan : {{ $time }}
                                                            </div>
                                                        </div>
                                                        <!-- <div class="row"> -->
                                                        <div class="container-responsive mt-3">

                                                            <table
                                                                class="table table-bordered table-hover table-report">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Kategori Pengaduan</th>
                                                                        <th>Jumlah Pengaduan</th>
                                                                        <th>Keterangan</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($kategoriCounts as $index => $kategoriCount)
                                                                        <tr>
                                                                            <td>{{ $index + 1 }}</td>
                                                                            <td>{{ $kategoriCount->kategori->nama_kategori }}
                                                                            </td>
                                                                            <td>{{ $kategoriCount->count }}</td>
                                                                            <td></td> <!-- Keterangan jika ada -->
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8"></div>
                                                            <div class="col-md-4">
                                                                Banjar, {{ $time }} <br>
                                                                {{ Auth::user()->role }}
                                                                <br><br><br>
                                                                <b>{{ Auth::user()->nama }}</b>
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.content -->
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
        // Fungsi untuk menangani pencetakan saat tombol diklik
        function cetakLaporan() {
            window.print(); // Memanggil fungsi pencetakan bawaan browser
        }
    
        // Menambahkan event listener untuk tombol cetak
        document.getElementById("cetakButton").addEventListener("click", cetakLaporan);
    </script>
</body>

</html>

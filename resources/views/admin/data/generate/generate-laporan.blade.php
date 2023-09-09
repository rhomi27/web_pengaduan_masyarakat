<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM | Generate Laporan</title>
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
                                                        <h4>Generate Laporan</h4>
                                                        <span>ini adalah generate laporan</span>
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
                                                            <a class="text-decoration-none" href="#!">Generate</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="container">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    Laporan Periode
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="/generatePeriode" method="post">
                                                                    @csrf
                                                                    <div class="form form-group">
                                                                        <label for="selectBulan">
                                                                            Pilih Bulan
                                                                        </label>
                                                                        <select name="selectBulan" id="selectBulan"
                                                                            class="form form-control">
                                                                            <option selected>-- Pilih Bulan --</option>
                                                                            <option value="01">Januari</option>
                                                                            <option value="02">Februari</option>
                                                                            <option value="03">Maret</option>
                                                                            <option value="04">April</option>
                                                                            <option value="05">Mei</option>
                                                                            <option value="06">Juni</option>
                                                                            <option value="07">Juli</option>
                                                                            <option value="08">Agustus</option>
                                                                            <option value="09">September</option>
                                                                            <option value="10">Oktober</option>
                                                                            <option value="11">November</option>
                                                                            <option value="12">Desember</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form form-group">
                                                                        <label for="selectTahun">Pilih Tahun</label>
                                                                        <select name="selectTahun" id="selectTahun"
                                                                            class="form form-control">
                                                                            <option value="">-- Pilih Tahun --
                                                                            </option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form form-group">
                                                                        <label for="selectStatus">Pilih Status</label>
                                                                        <select name="selectStatus" id="selectStatus"
                                                                            class="form form-control">
                                                                            <option value="">ALL</option>
                                                                            <option value="proses">Process</option>
                                                                            <option value="selesai">Selesai</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form form-group">
                                                                        <button type="submit"
                                                                            class="btn btn-primary"><i
                                                                                class="fi-sr-print-magnifying-glass"></i>
                                                                            Cetak </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="container">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    Laporan Rekap Periode
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="/generateRekap" method="post">
                                                                    @csrf
                                                                <div class="form form-group">
                                                                    <label for="selectBulan">
                                                                        Pilih Bulan
                                                                    </label>
                                                                    <select name="selectBulan" id="selectBulan"
                                                                        class="form form-control">
                                                                        <option value="">-- Pilih Bulan --
                                                                        </option>
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form form-group">
                                                                    <label for="selectTahun">Pilih Tahun</label>
                                                                    <select name="selectTahun" id="selectTahun"
                                                                        class="form form-control">
                                                                        <option value="">-- Pilih Tahun --
                                                                        </option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2023">2023</option>
                                                                    </select>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary"><i
                                                                        class="fi-sr-print-magnifying-glass"></i> Cetak
                                                                </button>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- /.row -->
                                        </section>
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

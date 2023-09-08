<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM | Detail Laporan Masyarakat</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes" />
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="CodedThemes" />
    <!-- link css -->
    @include('admin.template.cssLink')
    <!-- cdn bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    {{-- end --}}
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class="contain">
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
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
                                                        <h4>Detail Pengaduan</h4>
                                                        <span>ini adalah detail pengaduan masyarakat</span>
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
                                                            <a class="text-decoration-none" href="#!">Detail
                                                                pengaduan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <!-- ======= Pengaduan Details Section ======= -->
                                        <section id="portfolio-details" class="portfolio-details">
                                            <div class="container">
                                                <div class="card bg-secondary bg-opacity-10">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h4 class="card-title">Detail Laporan</h4>
                                                        </div>
                                                        <hr />
                                                        <div class="row-cols-md-0 d-flex justify-content-between">
                                                            <div class="col-md">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p><strong>Judul</strong></p>
                                                                        <p><strong>Kategori</strong></p>
                                                                        <p>
                                                                            <strong>Tanggal</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p>: {{ $detail->judul }}</p>
                                                                        <p>: {{ $detail->kategori->nama_kategori }}</p>
                                                                        <p>: {{ $detail->created_at->format('d F, Y H:i') }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p>
                                                                            <strong>Nama Pelapor</strong>
                                                                        </p>
                                                                        <p>
                                                                            <strong>Alamat Pelapor</strong>
                                                                        </p>
                                                                        <p><strong>Status</strong> :</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p>: {{ $detail->user->nama }}</p>
                                                                        <p>: {{ $detail->user->alamat }}</< /p>
                                                                        <form action="/updatestatus/{{ $detail->id }}"
                                                                            method="post"> @csrf
                                                                            <p>:
                                                                                <select class="form-bg-info"
                                                                                    name="status" id="status">
                                                                                    <option
                                                                                        value="{{ $detail->status }}">
                                                                                        {{ $detail->status }}</option>
                                                                                    <option value="proses">Proses
                                                                                    </option>
                                                                                    <option value="selesai">Selesai
                                                                                    </option>
                                                                                    <option value="ditolak">
                                                                                        Ditolak
                                                                                    </option>
                                                                                </select>
                                                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-grd-info btn-outline-dark w-100">
                                                            Update Status
                                                        </button>
                                                        </form>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-md-8">
                                                                <div class="swiper-slide">
                                                                    @if (strpos($detail->foto, '.mp4') !== false)
                                                                        <video controls
                                                                            style="max-width: 800px; max-height:600px; width:100%; height:100%;">
                                                                            <source
                                                                                src="{{ asset('media/videos/' . $detail->foto) }}"
                                                                                type="video/mp4">
                                                                            Browser Anda tidak mendukung tag video.
                                                                        </video>
                                                                    @else
                                                                        <img class="img-fluid"
                                                                            style="max-width: 800px; width:100%; max-height:500px; height:100%; object-fit:contain;"
                                                                            src="{{ asset('media/' . $detail->foto) }}"
                                                                            alt="" />
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="portfolio-description">
                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header mt-0">
                                                                                <button class="accordion-button"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne">
                                                                                    Deskripsi
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne"
                                                                                class="accordion-collapse collapse show"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <p>
                                                                                        {{ $detail->isi }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="/admin"
                                                                        class="btn btn-outline-info mt-4"><i
                                                                            class="fi fi-ts-left"></i> Kembali</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @include('admin.tanggapan')
                                                </div>
                                            </div>
                                    </div>
                                    </section>
                                    <!-- End Pengaduan Details Section -->
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
            Swal.fire(
                "",
                "{{ Session::get('success') }}",
                "success"
            )
        </script>
    @endif
    {{-- end --}}
</body>

</html>

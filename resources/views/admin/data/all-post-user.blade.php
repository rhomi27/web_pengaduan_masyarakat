<!DOCTYPE html>
<html lang="en">

<head>
    <title>APM - All Post User</title>
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

        .foto img {
            width: 365px;
            height: 250px;
            object-fit: cover;
            border: 3px solid rgb(89, 89, 200);
        }
        .foto video {
            width: 365px;
            height: 250px;
            object-fit: cover;
            border: 3px solid rgb(89, 89, 200);
        }
    </style>
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
                                                <h4>Semua Pengaduan</h4>
                                                <span>ini adalah semua pengaduan {{ $userid->nama }}</span>
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
                                                    <a class="text-decoration-none" href="/datamasyarakat">Masyarakat</a>
                                                  </li>
                                                <li class="breadcrumb-item">
                                                  <a class="text-decoration-none" href="#!">Semua Pengaduan</a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="page-body">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-4 mb-4">
                                                    <div class="card mt-5">
                                                        <div class="cover-photo"></div>
                                                        <div class="profile-info text-center my-4">
                                                            <img id="profile-picture-preview"
                                                                src="{{ asset('ppuser/' . $userid->foto) }}"
                                                                class="profile-picture rounded-circle"
                                                                alt="Profile Picture" />
                                                            <h1 class="name">{{ $userid->nama }}</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <section>
                                                <div class="row justify-content-start">
                                                    @if (count($allpost) > 0)
                                                        <h2 class="text-capitalize text-center mb-lg-5">
                                                            Semua Pengaduan {{ $userid->nama }}
                                                        </h2>
                                                        @foreach ($allpost as $ap)
                                                            <div class="col-md-4 mb-3">
                                                                <a class="text-decoration-none"
                                                                    href="/viewdetail/{{ $ap->id }}">
                                                                    <div class="card">
                                                                        <div class="foto">
                                                                            @if (strpos($ap->foto, '.mp4') !== false)
                                                                        <video controls>
                                                                            <source
                                                                                src="{{ asset('media/videos/' . $ap->foto) }}"
                                                                                type="video/mp4">
                                                                            Browser Anda tidak mendukung tag video.
                                                                        </video>
                                                                    @else
                                                                        <img class="card-img"
                                                                            src="{{ asset('media/' . $ap->foto) }}"
                                                                            alt="" />
                                                                    @endif
                                                                        </div>
                                                                        <div class="card-img-overlay text-white bg-dark bg-opacity-50">
                                                                            <h5 class="card-title">{{ $ap->judul }}
                                                                            </h5>
                                                                            <p class="card-text">
                                                                                {{ Str::limit($ap->isi ,60) }}
                                                                            </p>
                                                                            <p class="card-text">
                                                                                <small>{{ $ap->created_at->format('d F ,Y') }}</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <h4 class="text-capitalize text-center mb-lg-5">
                                                            Pengaduan milik {{ $userid->nama }} masi kosong.
                                                        </h4>
                                                    @endif
                                                </div>
                                            </section>
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

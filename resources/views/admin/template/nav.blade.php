<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo" style="background-color: rgba(125, 56, 189, 0.758);">
            <a class="mobile-menu text-decoration-none" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="text-decoration-none" href="#">
                <img class="img-fluid" src="{{ asset('assetsAdmin/images/logo1.png') }}" alt="Theme-Logo" />
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle">
                        <a href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <a class="text-decoration-none" href="#!">
                        <i class="ti-bell"></i>
                        @if (count($laporanNew) > 0)
                            <span class="badge bg-c-pink"></span>
                        @endif
                    </a>
                    <ul class="show-notification">
                        <li>
                            <h6>Notifications</h6>
                            @if (count($laporanNew) > 0)
                            <label class="label label-danger">New</label>
                            @endif
                        </li>
                        @php $count = 0; @endphp
                        @foreach ($laporanNew as $ln)
                            @if ($count < 3)
                                <li>
                                    <a class="text-decoration-none" href="/viewdetail/{{ $ln->id }}">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ asset('ppuser/' . $ln->user->foto) }}"
                                                alt="Generic placeholder image" />
                                            <div class="media-body">
                                                <h5 class="notification-user">{{ $ln->user->nama }}</h5>
                                                <p class="notification-msg">
                                                    {{ $ln->judul }}
                                                </p>
                                                <span
                                                    class="notification-time">{{ $ln->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @php $count++; @endphp
                            @endif
                        @endforeach

                        @if (count($laporanNew) > 3)
                            <li>
                                <a class="text-decoration-none" href="/laporanpengaduan">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="notification-msg">Tampilkan Semua Laporan Baru</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endif
                    </ul>

                </li>
                <li class="user-profile header-notification">
                    <a class="text-decoration-none" href="#!">
                        <img src="{{ asset('ppuser/' . $user->foto) }}"
                            style="width: 50px; height:50px; object-fit:cover;"
                            class="img-radius img-fluid rounded-circle" alt="User-Profile-Image" />
                        <span>{{ $user->nama }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a class="text-decoration-none" href="/profil"> <i class="ti-user"></i> Profile </a>
                        </li>
                        <li>
                            <a class="text-decoration-none logout" href="#">
                                <i class="ti-layout-sidebar-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

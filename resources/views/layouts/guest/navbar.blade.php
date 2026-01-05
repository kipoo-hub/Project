<style>
    /* NAVBAR MODERN */
    .navbar-custom {
        background: linear-gradient(120deg, rgba(255, 255, 255, .92), rgba(245, 247, 255, .9));
        backdrop-filter: blur(14px);
        border-bottom: 1px solid rgba(255, 255, 255, .5);
        box-shadow: 0 10px 40px rgba(0, 0, 0, .05);
        padding: 12px 0;
        transition: .25s ease;
    }

    .navbar-custom.scrolled {
        padding: 8px 0;
        box-shadow: 0 18px 45px rgba(0, 0, 0, .10);
    }

    /* MENU LINKS */
    .navbar-nav .nav-link {
        position: relative;
        color: #334155;
        font-weight: 600;
        font-size: .95rem;
        padding: 10px 18px !important;
        border-radius: 12px;
        transition: .25s;
    }

    .navbar-nav .nav-link:hover {
        color: #0d6efd;
        background: rgba(13, 110, 253, .05);
    }

    .navbar-nav .nav-link.active {
        color: #0d6efd;
    }

    /* underline animasi */
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        left: 14px;
        bottom: 6px;
        width: 0;
        height: 2px;
        background: #0d6efd;
        border-radius: 2px;
        transition: .25s;
    }

    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
        width: calc(100% - 28px);
    }

    /* DROPDOWN */
    .dropdown-menu {
        border: none;
        border-radius: 16px;
        padding: 12px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, .12);
        animation: dropdown .18s ease forwards;
    }

    @keyframes dropdown {
        from {
            opacity: 0;
            transform: translateY(6px) scale(.98);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .dropdown-item {
        border-radius: 10px;
        padding: 10px 14px;
        font-weight: 500;
    }

    .dropdown-item:hover {
        background: #f3f4f6;
        color: #0d6efd;
    }

    /* AVATAR */
    .user-avatar {
        border: 2px solid #eef2ff;
        box-shadow: 0 6px 18px rgba(0, 0, 0, .06);
        transition: .25s;
    }

    .nav-link:hover .user-avatar {
        transform: scale(1.07);
        border-color: #0d6efd;
    }

    /* MOBILE */
    @media (max-width:991px) {
        .navbar-nav .nav-link {
            margin-bottom: 4px;
            border-radius: 10px;
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" height="40" alt="Logo">
            <span class="d-none d-sm-inline">Suara Rakyat</span>
        </a>

        {{-- Toggle --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            {{-- CENTER MENU --}}
            <div class="navbar-nav mx-auto align-items-center">

                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    href="{{ route('home') }}">Beranda</a>

                <a class="nav-link {{ request()->routeIs('pengaduan.*') ? 'active' : '' }}"
                    href="{{ route('pengaduan.index') }}">Pengaduan</a>

                <a class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}"
                    href="{{ route('kategori.index') }}">Kategori</a>

                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    href="{{ route('about') }}">Tentang</a>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
                        {{ request()->routeIs('tindak.*') || request()->routeIs('penilaian.*') ? 'active' : '' }}"
                        data-bs-toggle="dropdown">
                        Status
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('tindak.*') ? 'active' : '' }}"
                                href="{{ route('tindak.index') }}">
                                <i class="fas fa-tasks me-2 text-muted"></i> Tindak Lanjut
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('penilaian.*') ? 'active' : '' }}"
                                href="{{ route('penilaian.index') }}">
                                <i class="fas fa-star me-2 text-muted"></i> Penilaian
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            {{-- RIGHT SECTION --}}
            <div class="d-flex align-items-center ms-lg-4 mt-3 mt-lg-0">

                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 fw-semibold shadow-sm">
                        Login <i class="fas fa-arrow-right ms-2 small"></i>
                    </a>
                @else
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 p-0" data-bs-toggle="dropdown">

                            <div class="text-end d-none d-lg-block me-1">
                                <small class="text-muted"></small>
                                <span class="fw-bold text-dark">{{ Auth::user()->name }}</span>
                            </div>

                            {{-- FOTO PROFIL (PAKAI profile_picture) --}}
                            <img src="{{ Auth::user()->profile_picture
                                ? asset('uploads/profile/' . Auth::user()->profile_picture)
                                : asset('assets/img/avatar-default.png') }}"
                                class="rounded-circle user-avatar" width="40" height="40" style="object-fit:cover">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end mt-3">

                            <li class="px-3 py-2 border-bottom d-block d-lg-none">
                                <span class="fw-bold">{{ Auth::user()->name }}</span>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fas fa-user-circle me-2 text-primary"></i> Profil Saya
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger fw-semibold">
                                        <i class="fas fa-sign-out-alt me-2"></i> Keluar
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </div>
                @endguest
            </div>

        </div>
    </div>
</nav>

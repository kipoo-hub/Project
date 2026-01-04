<style>
/* NAVBAR */
.navbar-custom{
    background: rgba(255,255,255,.96);
    backdrop-filter: blur(12px);
    box-shadow: 0 6px 24px rgba(0,0,0,.05);
    padding: 12px 0;
    transition: .25s ease;
}
.navbar-custom.scrolled{
    padding: 8px 0;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

/* MENU ITEMS */
.navbar-nav .nav-link{
    color:#4b5563;
    font-weight:500;
    font-size:.95rem;
    padding:8px 16px!important;
    border-radius:50px;
    margin:0 4px;
    transition:.25s;
}
.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active{
    color:#0d6efd;
    background:rgba(13,110,253,.06);
}

/* DROPDOWN */
.dropdown-menu{
    border:none;
    border-radius:14px;
    box-shadow:0 15px 35px rgba(0,0,0,.12);
    padding:10px;
}
.dropdown-item{
    border-radius:8px;
    padding:10px 14px;
}
.dropdown-item:hover{
    background:#f3f4f6;
    color:#0d6efd;
    transform:translateX(4px);
}

/* AVATAR */
.user-avatar{
    border:2px solid #e5e7eb;
    transition:border-color .25s, transform .25s;
}
.nav-link:hover .user-avatar{
    border-color:#0d6efd;
    transform:scale(1.05);
}

/* MOBILE */
@media (max-width:991px){
    .navbar-nav .nav-link{
        text-align:center;
        margin-bottom:4px;
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
                    <a href="{{ route('login') }}"
                       class="btn btn-primary rounded-pill px-4 fw-semibold shadow-sm">
                        Login <i class="fas fa-arrow-right ms-2 small"></i>
                    </a>

                @else
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 p-0"
                           data-bs-toggle="dropdown">

                            <div class="text-end d-none d-lg-block me-1">
                                <small class="text-muted"></small>
                                <span class="fw-bold text-dark">{{ Auth::user()->name }}</span>
                            </div>

                            {{-- FOTO PROFIL (PAKAI profile_picture) --}}
                            <img
                                src="{{ Auth::user()->profile_picture
                                        ? asset('uploads/profile/' . Auth::user()->profile_picture)
                                        : asset('assets/img/avatar-default.png') }}"
                                class="rounded-circle user-avatar"
                                width="40" height="40" style="object-fit:cover">
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

                            <li><hr class="dropdown-divider"></li>

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



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Suara Rakyat - Pengaduan & Aspirasi Rakyat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Inter:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet (load from public/assets) -->
    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Small page-specific tweaks -->
    <style>
        .carousel-caption h1 {
            font-size: calc(1.5rem + 2.5vw);
            line-height: 1.05;
        }

        .feature-item {
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .feature-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .back-to-top {
            right: 20px;
            bottom: 90px;
            position: fixed;
            z-index: 1080;
            display: none;
        }

        @media (max-width: 767px) {
            .display-1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <header>
        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light py-1 d-none d-lg-block">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Umban+Sari+Publik+No.12,+Pekanbaru"
                        target="_blank" class="text-muted small">
                        <i class="fas fa-map-marker-alt text-primary me-1"></i>
                        Jl. Umban Sari Publik No.12, Pekanbaru
                    </a>
                    <a href="mailto:SuaraRakyat@gmail.com" class="text-muted small">
                        <i class="fas fa-envelope text-primary me-1"></i>
                        SuaraRakyat@gmail.com
                    </a>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <!-- Sosial Media -->
                    <a href="https://facebook.com/SuaraRakyat" target="_blank" class="text-primary"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/SuaraRakyat" target="_blank" class="text-primary"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/SuaraRakyat" target="_blank" class="text-primary"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/company/SuaraRakyat" target="_blank" class="text-primary"><i
                            class="fab fa-linkedin-in"></i></a>

                    <!-- Bahasa Dropdown -->
                    <div class="dropdown">
                        <a href="#" class="text-dark dropdown-toggle small" data-bs-toggle="dropdown">
                            <i class="fas fa-globe-europe text-primary me-1"></i>{{ strtoupper(app()->getLocale()) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="{{ url('/lang/en') }}" class="dropdown-item">English</a></li>
                            <li><a href="{{ url('/lang/id') }}" class="dropdown-item">Indonesia</a></li>
                            <li><a href="{{ url('/lang/fr') }}" class="dropdown-item">French</a></li>
                            <li><a href="{{ url('/lang/es') }}" class="dropdown-item">Spanish</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <style>
            /* NAVBAR */
            .navbar-custom {
                background: rgba(255, 255, 255, .96);
                backdrop-filter: blur(12px);
                box-shadow: 0 6px 24px rgba(0, 0, 0, .05);
                padding: 12px 0;
                transition: .25s ease;
            }

            .navbar-custom.scrolled {
                padding: 8px 0;
                box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            }

            /* MENU ITEMS */
            .navbar-nav .nav-link {
                color: #4b5563;
                font-weight: 500;
                font-size: .95rem;
                padding: 8px 16px !important;
                border-radius: 50px;
                margin: 0 4px;
                transition: .25s;
            }

            .navbar-nav .nav-link:hover,
            .navbar-nav .nav-link.active {
                color: #0d6efd;
                background: rgba(13, 110, 253, .06);
            }

            /* DROPDOWN */
            .dropdown-menu {
                border: none;
                border-radius: 14px;
                box-shadow: 0 15px 35px rgba(0, 0, 0, .12);
                padding: 10px;
            }

            .dropdown-item {
                border-radius: 8px;
                padding: 10px 14px;
            }

            .dropdown-item:hover {
                background: #f3f4f6;
                color: #0d6efd;
                transform: translateX(4px);
            }

            /* AVATAR */
            .user-avatar {
                border: 2px solid #e5e7eb;
                transition: border-color .25s, transform .25s;
            }

            .nav-link:hover .user-avatar {
                border-color: #0d6efd;
                transform: scale(1.05);
            }

            /* MOBILE */
            @media (max-width:991px) {
                .navbar-nav .nav-link {
                    text-align: center;
                    margin-bottom: 4px;
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
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
                                    <img src="{{ Auth::user()->profile_picture
                                        ? asset('uploads/profile/' . Auth::user()->profile_picture)
                                        : asset('assets/img/avatar-default.png') }}"
                                        class="rounded-circle user-avatar" width="40" height="40"
                                        style="object-fit:cover">
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
    </header>



    <main>
        <!-- Modal Search (kehilangan aria-labelledby diganti) -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title">Cari</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="kata kunci"
                                aria-describedby="search-icon-1">
                            <button id="search-icon-1" class="btn bg-light border input-group-text p-3"
                                type="button" aria-label="Search">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">

            <!-- ITEM 1 -->
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption py-5">
                    <div class="container">
                        <div class="row align-items-center g-5">

                            <!-- TEXT SECTION -->
                            <div class="col-lg-6 animated fadeInLeft">
                                <h4 class="text-white text-uppercase fw-bold mb-3">
                                    Welcome To Suara Rakyat
                                </h4>
                                <h1 class="display-3 text-white fw-semibold mb-4">
                                    Sampaikan Pengaduan & Aspirasi Anda
                                </h1>
                                <p class="text-white-50 fs-5 mb-4">
                                    Suara Rakyat menyediakan layanan resmi untuk masyarakat
                                    melaporkan keluhan, memberikan masukan, dan menyampaikan aspirasi
                                    demi pelayanan publik yang lebih transparan dan responsif.
                                </p>
                            </div>

                            <!-- IMAGE -->
                            <div class="col-lg-6 animated fadeInRight text-center">
                                <img src="{{ asset('assets/img/carousel-2.png') }}" class="img-fluid carousel-image"
                                    alt="Ilustrasi carousel">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption py-5">
                    <div class="container">
                        <div class="row align-items-center g-5 flex-lg-row-reverse">

                            <!-- TEXT SECTION -->
                            <div class="col-lg-6 animated fadeInRight text-lg-end">
                                <h4 class="text-white text-uppercase fw-bold mb-3">
                                    Welcome To Suara Rakyat
                                </h4>
                                <h1 class="display-3 text-white fw-semibold mb-4">
                                    Suarakan Pendapat Anda Untuk Kemajuan Desa
                                </h1>
                                <p class="text-white-50 fs-5 mb-4">
                                    Kami hadir sebagai wadah aspirasi masyarakat agar setiap suara
                                    dapat disampaikan secara mudah, cepat, dan terstruktur.
                                </p>
                            </div>

                            <!-- IMAGE -->
                            <div class="col-lg-6 animated fadeInLeft text-center">
                                <img src="{{ asset('assets/img/carousel-2.png') }}" class="img-fluid carousel-image"
                                    alt="Ilustrasi carousel">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Carousel End -->


        <!-- Feature Start -->
        <section class="container-fluid feature bg-light py-5">
            <div class="container py-5">

                <!-- Section Header -->
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary mb-2">Layanan Kami</h4>
                    <h1 class="display-5 fw-bold mb-3">Sampaikan Aspirasi & Pengaduan Anda</h1>
                    <p class="text-muted mb-0">
                        Suara Rakyat menyediakan layanan pelaporan yang aman, transparan, dan mudah digunakan untuk
                        membantu meningkatkan kualitas pelayanan publik.
                    </p>
                </div>

                <div class="row g-4">

                    <!-- Fitur 1 -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <article class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded h-100">
                            <div
                                class="feature-icon p-4 mb-4 bg-primary text-white rounded-circle d-inline-flex justify-content-center align-items-center">
                                <i class="fas fa-exclamation-triangle fa-3x" aria-hidden="true"></i>
                            </div>

                            <h4 class="mb-3">Pengaduan Masyarakat</h4>
                            <p class="text-muted mb-4">
                                Laporkan berbagai permasalahan pelayanan publik secara cepat dan terstruktur.
                            </p>

                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/pengaduan') }}"
                                title="Ajukan pengaduan baru">
                                Buat Pengaduan
                            </a>
                        </article>
                    </div>

                    <!-- Fitur 2 -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <article class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded h-100">
                            <div
                                class="feature-icon p-4 mb-4 bg-success text-white rounded-circle d-inline-flex justify-content-center align-items-center">
                                <i class="fas fa-clipboard-list fa-3x" aria-hidden="true"></i>
                            </div>

                            <h4 class="mb-3">Kategori Pengaduan</h4>
                            <p class="text-muted mb-4">
                                Temukan kategori pengaduan yang sesuai untuk mempermudah proses penanganan.
                            </p>

                            <a class="btn btn-success rounded-pill py-2 px-4" href="{{ route('kategori.index') }}"
                                title="Lihat kategori pengaduan">
                                Lihat Kategori
                            </a>
                        </article>
                    </div>

                    <!-- Fitur 3 -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <article class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded h-100">
                            <div
                                class="feature-icon p-4 mb-4 bg-warning text-white rounded-circle d-inline-flex justify-content-center align-items-center">
                                <i class="fas fa-star-half-alt fa-3x" aria-hidden="true"></i>
                            </div>
                            <h4 class="mb-3">Penilaian Layanan</h4>
                            <p class="text-muted mb-4"> Berikan penilaian objektif terhadap kualitas pelayanan publik
                                guna meningkatkan mutu layanan. </p> <a
                                class="btn btn-warning rounded-pill py-2 px-4 text-white"
                                href="{{ route('penilaian.create') }}" title="Beri penilaian terhadap pelayanan">
                                Beri Penilaian </a>
                        </article>
                    </div>

                    <!-- Fitur 4 -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <article class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded h-100">
                            <div
                                class="feature-icon p-4 mb-4 bg-info text-white rounded-circle d-inline-flex justify-content-center align-items-center">
                                <i class="fas fa-tasks fa-3x" aria-hidden="true"></i>
                            </div>
                            <h4 class="mb-3">Tindak Lanjut Pengaduan</h4>
                            <p class="text-muted mb-4"> Pantau proses penanganan laporan Anda secara transparan dan
                                tepat waktu. </p> <a class="btn btn-info rounded-pill py-2 px-4 text-white"
                                href="{{ route('tindak.index') }}" title="Lihat status tindak lanjut pengaduan">
                                Lihat Tindak Lanjut </a>
                        </article>
                    </div>


                </div>
            </div>
        </section>

        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-fluid py-5" style="background: #f8f9fa;">
            <div class="container py-5">
                <div class="row align-items-center g-5">

                    <!-- Left Content -->
                    <div class="col-lg-6">
                        <div class="p-4 p-lg-5 bg-white rounded-4 shadow-sm h-100">
                            <h5 class="text-primary fw-bold mb-2">Tentang Pengaduan & Aspirasi</h5>
                            <h2 class="display-6 mb-4">Sampaikan Pengaduan dan Aspirasi Anda dengan Mudah</h2>
                            <p class="mb-3">Saluran resmi untuk menerima pengaduan dan aspirasi masyarakat. Setiap
                                laporan akan ditindaklanjuti secara profesional untuk perbaikan layanan publik.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Penanganan cepat &
                                    terstruktur</li>
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Transparansi tindak
                                    lanjut laporan</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Opsi pelaporan anonim & privasi
                                    terjaga</li>
                            </ul>
                            <a href="{{ route('pengaduan.create') }}" class="btn btn-primary rounded-pill py-2 px-4">
                                Laporkan Sekarang
                            </a>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('assets/img/about-1.png') }}" alt="Ilustrasi Pengaduan dan Aspirasi"
                            class="img-fluid rounded-4 shadow-sm">
                    </div>

                </div>
            </div>
        </div>

        <!-- FAQs Start -->
        <div class="container-fluid faq-section bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary">FAQ Penting</h4>
                                <h1 class="display-4 mb-0">Pertanyaan Umum Tentang Pengaduan & Aspirasi</h1>
                            </div>

                            <div class="accordion" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqOne">
                                        <button class="accordion-button border-0" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFaqOne"
                                            aria-expanded="true" aria-controls="collapseFaqOne">
                                            Bagaimana cara mengirimkan pengaduan atau aspirasi?
                                        </button>
                                    </h2>
                                    <div id="collapseFaqOne" class="accordion-collapse collapse show"
                                        aria-labelledby="faqOne" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body rounded">
                                            Anda bisa mengirim pengaduan atau aspirasi melalui menu "Laporkan" atau
                                            "Kirim
                                            Aspirasi". Isi formulir dengan detail kejadian, lokasi, tanggal, dan
                                            lampirkan
                                            bukti jika ada.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFaqTwo"
                                            aria-expanded="false" aria-controls="collapseFaqTwo">
                                            Apakah saya bisa melapor secara anonim?
                                        </button>
                                    </h2>
                                    <div id="collapseFaqTwo" class="accordion-collapse collapse"
                                        aria-labelledby="faqTwo" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Ya. Pilih opsi "Pelaporan Anonim" saat mengisi form untuk mengirim
                                            laporan
                                            tanpa
                                            mengungkap identitas Anda. Namun apabila perlu klarifikasi, tim tidak
                                            dapat
                                            menghubungi pelapor anonim.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFaqThree"
                                            aria-expanded="false" aria-controls="collapseFaqThree">
                                            Berapa lama waktu penanganan laporan?
                                        </button>
                                    </h2>
                                    <div id="collapseFaqThree" class="accordion-collapse collapse"
                                        aria-labelledby="faqThree" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Waktu penanganan bergantung pada kompleksitas kasus. Setelah laporan
                                            diterima,
                                            Anda dapat memantau status melalui fitur "Cek Status". Tim kami akan
                                            memberikan
                                            tindak lanjut sesuai prioritas.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFaqFour"
                                            aria-expanded="false" aria-controls="collapseFaqFour">
                                            Informasi apa saja yang sebaiknya saya sertakan dalam laporan?
                                        </button>
                                    </h2>
                                    <div id="collapseFaqFour" class="accordion-collapse collapse"
                                        aria-labelledby="faqFour" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Sertakan uraian kejadian, tanggal, lokasi, pihak terkait, bukti (foto/
                                            dokumen),
                                            dan kontak jika Anda ingin dihubungi. Semakin lengkap informasi, semakin
                                            cepat
                                            tindak lanjut.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="{{ asset('assets/img/carousel-2.png') }}" class="img-fluid w-100"
                            alt="Ilustrasi Pengaduan dan Aspirasi" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

        <!-- ===== IDENTITAS PENGEMBANG ===== -->
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6">Identitas Pengembang</h2>
                <p class="text-muted fs-6">Informasi lengkap pengembang sistem Pengaduan & Aspirasi</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div
                        class="card shadow-lg border-0 rounded-4 text-center p-4 position-relative overflow-hidden hover-card">

                        <!-- Decorative Gradient -->
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                            style="background: linear-gradient(135deg, #0d6efd33, #6f42c133); z-index: 0;"></div>

                        <!-- FOTO -->
                        <div class="position-relative z-1">
                            <img src="{{ asset('assets/img/owner.jpg') }}"
                                class="rounded-circle shadow-lg mx-auto mb-3 border border-4 border-white"
                                width="140" height="140" style="object-fit: cover;" alt="Foto Pengembang">
                        </div>

                        <!-- NAMA -->
                        <h4 class="fw-bold mb-1 z-1 position-relative">Muhammad Taufiq</h4>
                        <p class="text-muted mb-3 z-1 position-relative">Mahasiswa Sistem Informasi</p>

                        <!-- DATA -->
                        <table class="table table-borderless text-start w-75 mx-auto z-1 position-relative">
                            <tr>
                                <th width="120">NIM</th>
                                <td>: 2457301099</td>
                            </tr>
                            <tr>
                                <th>Prodi</th>
                                <td>: Sistem Informasi</td>
                            </tr>
                            <tr>
                                <th>Kampus</th>
                                <td>: Politeknik Caltex Riau</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: taufiq24si@mahasiswa.pcr.ac.id</td>
                            </tr>
                        </table>

                        <!-- SOSIAL MEDIA -->
                        <div class="d-flex justify-content-center gap-3 mt-3 z-1 position-relative">
                            <a href="https://linkedin.com/in/username" target="_blank"
                                class="btn btn-outline-primary rounded-circle social-btn"
                                style="width: 45px; height: 45px;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/username" target="_blank"
                                class="btn btn-outline-dark rounded-circle social-btn"
                                style="width: 45px; height: 45px;">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://instagram.com/username" target="_blank"
                                class="btn btn-outline-danger rounded-circle social-btn"
                                style="width: 45px; height: 45px;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional Hover & Shadow Effects -->
        <style>
            .hover-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: default;
            }

            .hover-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            }

            .social-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.1rem;
                transition: all 0.3s ease;
            }

            .social-btn:hover {
                transform: translateY(-3px) scale(1.1);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            }
        </style>



        <!-- Footer Start -->
        <footer class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">

            <style>
                .footer-contact-card {
                    display: flex;
                    align-items: center;
                    gap: 18px;
                    padding: 18px 22px;
                    background: rgba(255, 255, 255, 0.05);
                    border-radius: 14px;
                    border: 1px solid rgba(255, 255, 255, 0.06);
                    backdrop-filter: blur(6px);
                    transition: .25s ease;
                }

                .footer-contact-card:hover {
                    background: rgba(255, 255, 255, 0.08);
                    transform: translateY(-2px);
                }

                .footer-contact-icon {
                    width: 48px;
                    height: 48px;
                    border-radius: 12px;
                    background: rgba(255, 255, 255, 0.12);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .footer-contact-icon i {
                    font-size: 1.35rem;
                }
            </style>

            <div class="container py-5">
                <div class="row g-5">

                    <!-- LEFT SIDE -->
                    <div class="col-xl-9">
                        <div class="mb-5">
                            <div class="row g-4">

                                <!-- LOGO + ABOUT -->
                                <div class="col-md-6 col-lg-6 col-xl-5">
                                    <div class="footer-item">

                                        <a href="{{ url('/') }}"
                                            class="navbar-brand p-0 d-flex align-items-center gap-3 mb-3">
                                            <img src="{{ asset('assets/img/logo2.png') }}" alt="Logo Suara Rakyat"
                                                style="height: 60px; object-fit: contain;">

                                            <div class="d-flex flex-column">
                                                <span class="fw-bold text-primary" style="font-size: 20px;">Suara
                                                    Rakyat</span>
                                                <span class="text-muted" style="font-size: 13px;">Pengaduan &
                                                    Aspirasi</span>
                                            </div>
                                        </a>

                                        <p class="text-white mb-4">
                                            Suara Rakyat adalah saluran resmi untuk menerima pengaduan dan aspirasi
                                            masyarakat.
                                            Kirim laporan, pantau status, dan dapatkan informasi tindak lanjut dari
                                            tim
                                            kami.
                                        </p>

                                        <div class="d-flex gap-2">
                                            <a class="btn btn-md-square rounded-circle" href="#"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square rounded-circle" href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square rounded-circle"
                                                href="https://www.instagram.com/pikpuks_"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square rounded-circle" href="#"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- QUICK LINKS -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="footer-item">
                                        <h4 class="text-white mb-4">Tautan Cepat</h4>

                                        <a href="{{ route('home') }}"><i class="fas fa-angle-right me-2"></i>
                                            Beranda</a><br>
                                        <a href="{{ route('pengaduan.index') }}"><i
                                                class="fas fa-angle-right me-2"></i> Pengaduan</a><br>
                                        <a href="{{ route('kategori.index') }}"><i
                                                class="fas fa-angle-right me-2"></i> Kategori</a><br>
                                        <a href="{{ route('tindak.index') }}"><i class="fas fa-angle-right me-2"></i>
                                            Tindak Lanjut</a><br>
                                        <a href="{{ route('penilaian.index') }}"><i
                                                class="fas fa-angle-right me-2"></i> Penilaian Layanan</a>
                                    </div>
                                </div>

                                <!-- GALLERY -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="footer-item">
                                        <h4 class="text-white mb-4">Galeri & Ilustrasi</h4>

                                        <div class="row g-3">
                                            @foreach ([1, 2, 3] as $i)
                                                <div class="col-4">
                                                    <div class="footer-instagram rounded position-relative">
                                                        <img src="{{ asset('assets/img/instagram-footer-' . $i . '.jpg') }}"
                                                            class="img-fluid w-100 rounded"
                                                            alt="galeri-{{ $i }}">
                                                        <div class="footer-search-icon">
                                                            <a href="{{ asset('assets/img/instagram-footer-' . $i . '.jpg') }}"
                                                                data-lightbox="footer-gallery"
                                                                aria-label="lihat gambar">
                                                                <i class="fas fa-link text-white"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="pt-5" style="border-top:1px solid rgba(255,255,255,0.08);">
                            <div class="row g-4 justify-content-center">

                                <div class="col-lg-4 col-md-6">
                                    <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Umban+Sari+Publik+No.12,+Pekanbaru"
                                        target="_blank" class="text-white text-decoration-none">
                                        <div class="footer-contact-card d-flex align-items-center p-3 h-100 rounded-3">
                                            <div class="footer-contact-icon me-3">
                                                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold fs-6">Alamat</div>
                                                <small class="text-white-50">Jl. Umban Sari Publik No.12,
                                                    Pekanbaru</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <a href="mailto:suararakyat@gmail.com" class="text-white text-decoration-none">
                                        <div class="footer-contact-card d-flex align-items-center p-3 h-100 rounded-3">
                                            <div class="footer-contact-icon me-3">
                                                <i class="fas fa-envelope fa-2x text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold fs-6">Email</div>
                                                <small class="text-white-50">suararakyat@gmail.com</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <a href="tel:+6282292707434" class="text-white text-decoration-none">
                                        <div class="footer-contact-card d-flex align-items-center p-3 h-100 rounded-3">
                                            <div class="footer-contact-icon me-3">
                                                <i class="fa fa-phone-alt fa-2x text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold fs-6">Hotline</div>
                                                <small class="text-white-50">(+62) 822-9270-7434 (Lapor & Info)</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- RIGHT SIDE: SUBSCRIBE -->
                    <div class="col-xl-3">
                        <div class="footer-item">

                            <h4 class="text-white mb-4">Berlangganan Update</h4>
                            <p class="text-white mb-3">
                                Dapatkan pemberitahuan tentang status laporan & informasi penting.
                            </p>

                            <form class="position-relative rounded-pill mb-4" onsubmit="return false;">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="email"
                                    placeholder="Masukkan email Anda">
                                <button type="button"
                                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">
                                    Daftar
                                </button>
                            </form>

                            <div class="d-flex">
                                <a href="tel:+6282292707434"
                                    class="btn btn-lg-square rounded-circle position-relative wow tada"
                                    data-wow-delay=".9s">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                    <div class="position-absolute" style="top:2px; right:12px;">
                                        <i class="fa fa-comment-dots text-secondary"></i>
                                    </div>
                                </a>
                                <div class="d-flex flex-column ms-3">
                                    <span class="text-white">Butuh Bantuan?</span>
                                    <a href="tel:+6282292707434" class="text-white">
                                        Hotline: (+62) 822-9270-7434
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Floating WhatsApp Button -->
        <div id="whatsapp-float" class="whatsapp-float">
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20Anda."
                target="_blank" class="whatsapp-btn" title="Hubungi via WhatsApp" aria-label="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <!-- Back to Top -->
        <a href="#" class="back-to-top" id="backToTop" aria-label="Kembali ke atas">
            <i class="fas fa-arrow-up"></i>
        </a>

        <style>
            /* ===== Floating WhatsApp Button ===== */
            .whatsapp-float {
                position: fixed;
                bottom: 25px;
                right: 25px;
                z-index: 1000;
                animation: floatAnim 3s ease-in-out infinite;
            }

            /* WhatsApp Button */
            .whatsapp-btn {
                width: 60px;
                height: 60px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                font-size: 28px;
                color: #fff;
                background: linear-gradient(135deg, #25d366, #1eb257);
                box-shadow: 0 6px 15px rgba(0, 0, 0, .25), 0 0 10px rgba(0, 0, 0, .1);
                transition: .3s ease-in-out;
            }

            .whatsapp-btn:hover {
                transform: scale(1.12) translateY(-3px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35), 0 0 15px rgba(37, 211, 102, 0.6);
            }

            /* Floating animation */
            @keyframes floatAnim {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-6px);
                }
            }

            /* ===== Back To Top ===== */
            .back-to-top {
                position: fixed;
                right: 20px;
                bottom: 25px;
                width: 55px;
                height: 55px;

                display: flex;
                align-items: center;
                justify-content: center;


                border-radius: 50%;
                background: linear-gradient(135deg, #0d6efd, #6f42c1);
                color: #fff;
                font-size: 20px;

                box-shadow: 0 8px 25px rgba(0, 0, 0, .15);
                cursor: pointer;
            }
        </style>

        <script>
            // Element references
            const backToTop = document.getElementById('backToTop');
            const whatsapp = document.getElementById('whatsapp-float');

            // Show/hide back to top
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) backToTop.classList.add('show');
                else backToTop.classList.remove('show');
            });

            // Smooth scroll
            backToTop.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Back to Top mengikuti posisi WA
            function updateBackToTopPosition() {
                const whatsappHeight = whatsapp.offsetHeight || 65;
                backToTop.style.bottom = (whatsappHeight + 40) + 'px'; // jarak 40px di atas WA
            }

            window.addEventListener('resize', updateBackToTopPosition);
            window.addEventListener('load', updateBackToTopPosition);
        </script>


        <!-- Copyright -->
        <div class="container-fluid copyright py-4 bg-dark">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                    class="fas fa-copyright text-light me-2"></i>Suara Rakyat</a>, All right
                            reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-start text-body">
                        Designed By <a class="border-bottom text-white"
                            href="https://www.instagram.com/pikpuks_">Muhammad Taufiq</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    

</body>

</html>

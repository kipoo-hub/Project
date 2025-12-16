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

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-white shadow-sm">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-3">

                    <!-- Logo / Brand -->
                    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center gap-3">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Suara Rakyat"
                            style="height: 130px; width: auto; object-fit: contain;">

                        <div class="d-flex flex-column justify-content-center">
                            <span class="fw-bold text-primary" style="font-size: 22px; line-height: 1.2;">Suara
                                Rakyat</span>
                            <span class="text-muted" style="font-size: 14px; line-height: 1.2;">Pengaduan &
                                Aspirasi</span>
                        </div>
                    </a>

                    <!-- Toggler Button -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- Navbar Links -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a href="{{ route('home') }}"
                                    class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                            <li class="nav-item"><a href="{{ route('pengaduan.index') }}"
                                    class="nav-link {{ request()->routeIs('pengaduan.*') ? 'active' : '' }}">Pengaduan</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('kategori.index') }}"
                                    class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}">Kategori</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('about') }}"
                                    class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"><i
                                        class="fas fa-info-circle me-1"></i> Tentang</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown">Status</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('tindak.index') }}" class="dropdown-item">Tindak Lanjut</a>
                                    </li>
                                    <li><a href="{{ route('penilaian.index') }}" class="dropdown-item">Penilaian</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Login / Profile -->
                        <div class="d-flex">
                            @auth
                                <div class="dropdown">
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profil</a></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">
                                    <i class="fas fa-sign-in-alt me-1"></i> Login
                                </a>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
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
                                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Suara Rakyat"
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

                        <!-- CONTACT SECTION PREMIUM -->
                        <div class="pt-5" style="border-top:1px solid rgba(255,255,255,0.08);">
                            <div class="row g-4">

                                <!-- Address -->
                                <div class="col-lg-4">
                                    <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Umban+Sari+Publik+No.12,+Pekanbaru"
                                        target="_blank" class="text-white text-decoration-none">
                                        <div class="footer-contact-card">
                                            <div class="footer-contact-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Alamat</div>
                                                <small class="text-white-50">Jl. Umban Sari Publik No.12,
                                                    Pekanbaru</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-4">
                                    <a href="mailto:suararakyat@gmail.com" class="text-white text-decoration-none">
                                        <div class="footer-contact-card">
                                            <div class="footer-contact-icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Email</div>
                                                <small class="text-white-50">suararakyat@gmail.com</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Phone -->
                                <div class="col-lg-4">
                                    <a href="tel:+6282292707434" class="text-white text-decoration-none">
                                        <div class="footer-contact-card">
                                            <div class="footer-contact-icon">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Hotline</div>
                                                <small class="text-white-50">(+62) 822-9270-7434 (Lapor &
                                                    Info)</small>
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

            .whatsapp-btn,
            .back-to-top {
                /* ukuran disamakan */
                width: 60px;
                height: 60px;

                display: flex;
                justify-content: center;
                align-items: center;

                border-radius: 50%;
                font-size: 28px;
                color: #fff;

                box-shadow:
                    0 6px 15px rgba(0, 0, 0, 0.25),
                    0 0 10px rgba(0, 0, 0, 0.1);

                transition: .3s ease-in-out;
            }

            /* WhatsApp Button */
            .whatsapp-btn {
                background: linear-gradient(135deg, #25d366, #1eb257);
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
                background: linear-gradient(135deg, #0d6efd, #6610f2);
                right: 25px;
                /* Biar sama dengan WA */
                opacity: 0;
                visibility: hidden;
                z-index: 999;
            }

            .back-to-top:hover {
                transform: scale(1.12) translateY(-3px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35), 0 0 15px rgba(13, 110, 253, 0.6);
            }

            /* Show state */
            .back-to-top.show {
                opacity: 1;
                visibility: visible;
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

    <script>
        // Better UX: hide spinner and show back-to-top after scroll
        document.addEventListener('DOMContentLoaded', function() {
            const spinner = document.getElementById('spinner');
            if (spinner) {
                spinner.classList.remove('show');
                spinner.style.display = 'none';
            }

            // Back to top visibility
            const backToTop = document.getElementById('backToTop');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTop.style.display = 'inline-block';
                } else {
                    backToTop.style.display = 'none';
                }
            });
            backToTop.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });

        // Optional: initialize wow.js if present
        if (typeof WOW !== 'undefined') {
            new WOW().init();
        }
    </script>

</body>

</html>

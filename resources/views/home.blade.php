<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bina Desa - Pengaduan & Aspirasi Rakya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
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
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-primary pe-3">
                            <a href="#" class="text-muted small"><i
                                    class="fas fa-map-marker-alt text-primary me-2"></i>Jl. Umban Sari Publik No.12,
                                Pekanbaru</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:example@gmail.com" class="text-muted small"><i
                                    class="fas fa-envelope text-primary me-2"></i>Bina Desa@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-primary pe-3">
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="dropdown ms-3">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                        class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item">English</a>
                                <a href="#" class="dropdown-item">French</a>
                                <a href="#" class="dropdown-item">Spanish</a>
                                <a href="#" class="dropdown-item">Arabic</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> Bina Desa</h1>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ route('pengaduan.index') }}" class="nav-item nav-link">Pengaduan</a>
                        <a href="{{ route('kategori.index') }}" class="nav-item nav-link">Kategori</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Status</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('tindak.index') }}" class="dropdown-item">Tindak Lanjut</a>
                                <a href="{{ route('penilaian.index') }}" class="dropdown-item">Penilaian</a>
                            </div>
                        </div>
                    </div>

                    <div class="nav-btn px-3">
                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </div>

                </div>
        </div>
        </nav>
    </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border input-group-text p-3"><i
                                class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Bina Desa</h4>
                                <h1 class="display-1 text-white mb-4">Kami butuh pengaduan dan aspirasi dari kalian!
                                </h1>
                                <p class="mb-5 fs-5">Apapun masalah kalian, sampaikan saja di Bina Desa. Kami siap
                                    membantu menyelesaikan masalah kalian dengan cepat dan tepat.
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Bina Desa</h4>
                                <h1 class="display-1 text-white mb-4">Kami butuh pengaduan dan aspirasi dari kalian!
                                </h1>
                                <p class="mb-5 fs-5">Apapun masalah kalian, sampaikan saja di Bina Desa. Kami siap
                                    membantu menyelesaikan masalah kalian dengan cepat dan tepat.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Layanan Kami</h4>
                <h1 class="display-4 mb-4">Sampaikan Aspirasi & Pengaduan Anda dengan Mudah!</h1>
                <p class="mb-0">Kami hadir untuk mendengarkan setiap suara rakyat. Laporkan permasalahan atau berikan
                    aspirasi Anda secara transparan dan aman.</p>
            </div>

            <div class="row g-4">
                <!-- Fitur 1: Pengaduan -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded">
                        <div class="feature-icon p-4 mb-4 bg-primary text-white rounded-circle d-inline-block">
                            <i class="fas fa-exclamation-triangle fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Pengaduan Masyarakat</h4>
                        <p class="mb-4">Laporkan masalah pelayanan publik, kebijakan, atau pelanggaran dengan cepat
                            dan mudah.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/pengaduan') }}">
                            Buat Pengaduan
                        </a>
                    </div>
                </div>

                <!-- Fitur 2: Aspirasi -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded">
                        <div class="feature-icon p-4 mb-4 bg-success text-white rounded-circle d-inline-block">
                            <i class="fas fa-clipboard-list fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Kategori Pengaduan</h4>
                        <p class="mb-4">
                            Pilih jenis pengaduan sesuai kategori agar laporan Anda dapat ditangani dengan tepat dan
                            cepat.
                        </p>
                        <a class="btn btn-success rounded-pill py-2 px-4" href="{{ route('kategori.index') }}">
                            Lihat Kategori
                        </a>
                    </div>
                </div>

                <!-- Fitur 3: Laporan Anonim -->
                <!-- Fitur 3: Penilaian Layanan -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded">
                        <div class="feature-icon p-4 mb-4 bg-warning text-white rounded-circle d-inline-block">
                            <i class="fas fa-star-half-alt fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Penilaian Layanan</h4>
                        <p class="mb-4">
                            Berikan penilaian terhadap kualitas pelayanan publik kami.
                            Masukan Anda sangat berharga untuk peningkatan mutu layanan.
                        </p>
                        <a class="btn btn-warning rounded-pill py-2 px-4 text-white"
                            href="{{ route('penilaian.create') }}">
                            Beri Penilaian
                        </a>
                    </div>
                </div>

                <!-- Fitur 4: Tindak Lanjut Pengaduan -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4 pt-0 text-center shadow-sm bg-white rounded">
                        <div class="feature-icon p-4 mb-4 bg-info text-white rounded-circle d-inline-block">
                            <i class="fas fa-tasks fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Tindak Lanjut Pengaduan</h4>
                        <p class="mb-4">
                            Lihat dan pantau bagaimana laporan Anda ditindaklanjuti oleh pihak berwenang secara
                            transparan dan cepat.
                        </p>
                        <a class="btn btn-info rounded-pill py-2 px-4 text-white" href="{{ route('tindak.index') }}">
                            Lihat Tindak Lanjut
                        </a>
                    </div>
                </div>

                <!-- Feature End -->


                <!-- About Start -->
                <div class="container-fluid bg-light about pb-5">
                    <div class="container pb-5">
                        <div class="row g-5">
                            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="about-item-content bg-white rounded p-5 h-100">
                                    <h4 class="text-primary">Tentang Pengaduan & Aspirasi</h4>
                                    <h1 class="display-4 mb-4">Sampaikan Pengaduan dan Aspirasi Anda</h1>
                                    <p>Kami menyediakan saluran resmi untuk menerima pengaduan dan aspirasi masyarakat.
                                        Setiap
                                        laporan akan ditindaklanjuti secara profesional dengan tujuan menyelesaikan
                                        masalah dan
                                        meningkatkan layanan publik.</p>
                                    <p>Anda dapat mengirimkan pengaduan terkait layanan, kebijakan, atau hal lain yang
                                        perlu
                                        perbaikan. Aspirasi juga sangat kami hargai untuk perbaikan bersama.</p>
                                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Penanganan cepat
                                        dan
                                        terstruktur</p>
                                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Transparansi
                                        tindak lanjut
                                        dan status laporan</p>
                                    <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Privasi dan
                                        opsi
                                        pelaporan anonim</p>
                                    <a class="btn btn-primary rounded-pill py-3 px-5"
                                        href="{{ route('pengaduan.create') }}">
                                        Laporkan Sekarang
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                                <div class="bg-white rounded p-5 h-100">
                                    <div class="row g-4 justify-content-center">
                                        <div class="col-12">
                                            <div class="rounded bg-light">
                                                <img src="{{ asset('assets/img/about-1.png') }}"
                                                    class="img-fluid rounded w-100"
                                                    alt="Ilustrasi Pengaduan dan Aspirasi">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold"
                                                        data-toggle="counter-up">1.254</span>
                                                    <span class="h1 fw-bold text-primary">+</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Pengaduan Ditangani</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold"
                                                        data-toggle="counter-up">3.842</span>
                                                    <span class="h1 fw-bold text-primary">+</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Aspirasi Diterima</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold"
                                                        data-toggle="counter-up">45</span>
                                                    <span class="h1 fw-bold text-primary">+</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Tim Penanganan</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold"
                                                        data-toggle="counter-up">91</span>
                                                    <span class="h1 fw-bold text-primary">%</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Tingkat Penyelesaian</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->


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
                                                    Anda bisa mengirim pengaduan atau aspirasi melalui menu "Laporkan"
                                                    atau "Kirim
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
                                                    laporan tanpa
                                                    mengungkap identitas Anda. Namun apabila perlu klarifikasi, tim
                                                    tidak dapat
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
                                                    Sertakan uraian kejadian, tanggal, lokasi, pihak terkait, bukti
                                                    (foto/ dokumen),
                                                    dan kontak jika Anda ingin dihubungi. Semakin lengkap informasi,
                                                    semakin cepat
                                                    tindak lanjut.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                                <img src="{{ asset('assets/img/carousel-2.png') }}" class="img-fluid w-100"
                                    alt="Ilustrasi Pengaduan dan Aspirasi">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQs End -->





                <!-- Footer Start -->
                <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-xl-9">
                                <div class="mb-5">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-6 col-xl-5">
                                            <div class="footer-item">
                                                <a href="{{ url('/') }}" class="p-0">
                                                    <h3 class="text-white"><i class="fab fa-slack me-3"></i> Bina Desa
                                                    </h3>
                                                </a>
                                                <p class="text-white mb-4">Bina Desa adalah saluran resmi untuk
                                                    menerima
                                                    pengaduan dan
                                                    aspirasi masyarakat. Kirim laporan, pantau status, dan dapatkan
                                                    informasi tindak
                                                    lanjut dari tim kami.</p>
                                                <div class="footer-btn d-flex">
                                                    <a class="btn btn-md-square rounded-circle me-3" href="#"
                                                        aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
                                                    <a class="btn btn-md-square rounded-circle me-3" href="#"
                                                        aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                                    <a class="btn btn-md-square rounded-circle me-3" href="#"
                                                        aria-label="instagram"><i class="fab fa-instagram"></i></a>
                                                    <a class="btn btn-md-square rounded-circle me-0" href="#"
                                                        aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-3">
                                            <div class="footer-item">
                                                <h4 class="text-white mb-4">Tautan Cepat</h4>

                                                <a href="{{ route('home') }}">
                                                    <i class="fas fa-angle-right me-2"></i>Beranda
                                                </a>

                                                <a href="{{ route('pengaduan.index') }}">
                                                    <i class="fas fa-angle-right me-2"></i>Pengaduan
                                                </a>

                                                <a href="{{ route('kategori.index') }}">
                                                    <i class="fas fa-angle-right me-2"></i>Kategori Pengaduan
                                                </a>

                                                <a href="{{ route('tindak.index') }}">
                                                    <i class="fas fa-angle-right me-2"></i>Tindak Lanjut
                                                </a>

                                                <a href="{{ route('penilaian.index') }}">
                                                    <i class="fas fa-angle-right me-2"></i>Penilaian Layanan
                                                </a>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="footer-item">
                                                <h4 class="mb-4 text-white">Galeri & Ilustrasi</h4>
                                                <div class="row g-3">
                                                    <div class="col-4">
                                                        <div class="footer-instagram rounded">
                                                            <img src="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                                class="img-fluid w-100" alt="">
                                                            <div class="footer-search-icon">
                                                                <a href="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                                    data-lightbox="footerInstagram-1"
                                                                    class="my-auto"><i
                                                                        class="fas fa-link text-white"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="footer-instagram rounded">
                                                            <img src="{{ asset('assets/img/instagram-footer-2.jpg') }}"
                                                                class="img-fluid w-100" alt="">
                                                            <div class="footer-search-icon">
                                                                <a href="{{ asset('assets/img/instagram-footer-2.jpg') }}"
                                                                    data-lightbox="footerInstagram-2"
                                                                    class="my-auto"><i
                                                                        class="fas fa-link text-white"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="footer-instagram rounded">
                                                            <img src="{{ asset('assets/img/instagram-footer-3.jpg') }}"
                                                                class="img-fluid w-100" alt="">
                                                            <div class="footer-search-icon">
                                                                <a href="{{ asset('assets/img/instagram-footer-3.jpg') }}"
                                                                    data-lightbox="footerInstagram-3"
                                                                    class="my-auto"><i
                                                                        class="fas fa-link text-white"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                                    <div class="row g-0">
                                        <div class="col-12">
                                            <div class="row g-4">
                                                <div class="col-lg-6 col-xl-4">
                                                    <div class="d-flex">
                                                        <div
                                                            class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                                        </div>
                                                        <div>
                                                            <h4 class="text-white">Alamat</h4>
                                                            <p class="mb-0">Jl. Umban Sari Publik No.12, Pekanbaru
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-xl-4">
                                                    <div class="d-flex">
                                                        <div
                                                            class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                            <i class="fas fa-envelope fa-2x"></i>
                                                        </div>
                                                        <div>
                                                            <h4 class="text-white">Email</h4>
                                                            <p class="mb-0">Bina Desa@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-xl-4">
                                                    <div class="d-flex">
                                                        <div
                                                            class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                            <i class="fa fa-phone-alt fa-2x"></i>
                                                        </div>
                                                        <div>
                                                            <h4 class="text-white">Hotline</h4>
                                                            <p class="mb-0">(+62) 822-9270-7434 (Lapor & Info)</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-3">
                                <div class="footer-item">
                                    <h4 class="text-white mb-4">Berlangganan Update</h4>
                                    <p class="text-white mb-3">Dapatkan pemberitahuan tentang status laporan, panduan
                                        pelaporan,
                                        dan pengumuman penting.</p>
                                    <div class="position-relative rounded-pill mb-4">
                                        <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="email"
                                            placeholder="Masukkan email Anda">
                                        <button type="button"
                                            class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Daftar</button>
                                    </div>

                                    <div class="d-flex flex-shrink-0">
                                        <div class="footer-btn">
                                            <a href="#"
                                                class="btn btn-lg-square rounded-circle position-relative wow tada"
                                                data-wow-delay=".9s" aria-label="call">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                                <div class="position-absolute" style="top: 2px; right: 12px;">
                                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column ms-3 flex-shrink-0">
                                            <span>Butuh Bantuan?</span>
                                            <a href="tel:+6281234567890"><span class="text-white">Hubungi Hotline:
                                                    (+62)
                                                    822-9270-7434</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer End -->

                <!-- Copyright Start -->
                <div class="container-fluid copyright py-4">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6 text-center text-md-end mb-md-0">
                                <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                            class="fas fa-copyright text-light me-2"></i>Bina Desa</a>, All right
                                    reserved.</span>
                            </div>
                            <div class="col-md-6 text-center text-md-start text-body">
                                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                                Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML
                                    Codex</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
                        class="fa fa-arrow-up"></i></a>


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

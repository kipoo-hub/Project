<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sicepu - Pengaduan & Aspirasi Rakya</title>
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

    @include('partials.navbar')

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Sicepu</h4>
                                <h1 class="display-1 text-white mb-4">Kami butuh pengaduan dan aspirasi dari kalian!</h1>
                                <p class="mb-5 fs-5">Apapun masalah kalian, sampaikan saja di Sicepu. Kami siap
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
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Sicepu</h4>
                                <h1 class="display-1 text-white mb-4">Kami butuh pengaduan dan aspirasi dari kalian!</h1>
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
                <h4 class="text-primary">Our Features</h4>
                <h1 class="display-4 mb-4">Aspirasi & Pengaduan anda pasti akan didengar!</h1>
                <p class="mb-0">Semuanya akan lebih baik jika ada keluhan dan juga aspirasi kalian!</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Aspirasi</h4>
                        <p class="mb-4">Sampaikan ide dan rekomendasi Anda untuk perbaikan layanan dan kebijakan publik.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/aspirasi') }}">Kirim Aspirasi</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-exclamation-circle fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Pengaduan</h4>
                        <p class="mb-4">Laporkan masalah layanan, kebijakan atau pelanggaran yang Anda temui. Kami akan menindaklanjuti.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/lapor') }}">Laporkan Sekarang</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-user-secret fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Pelaporan Anonim</h4>
                        <p class="mb-4">Ingin melapor tanpa mengungkap identitas? Gunakan opsi pelaporan anonim kami.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-info-circle fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Cek Status</h4>
                        <p class="mb-4">Pantau perkembangan laporan dan lihat tindak lanjut yang diberikan tim kami.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('/status-laporan') }}">Cek Status</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    @include('partials.footer')

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
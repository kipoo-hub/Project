<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog - Sicepu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Blog, Sicepu, Pengaduan, Aspirasi" name="keywords">
    <meta content="Blog page for Sicepu application" name="description">

    <!-- Include stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')

    <div class="container py-5">
        <h1 class="text-center mb-4">Blog</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/blog/berita-1.png') }}" class="card-img-top" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title">Cara Mengisi Form Pengaduan yang Lengkap</h5>
                        <p class="card-text">Tips dan langkah praktis agar laporan Anda diproses cepat: informasi yang perlu disertakan dan format bukti yang dianjurkan.</p>
                        <a href="{{ url('/panduan-lapor') }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/blog/berita-2.png') }}" class="card-img-top" alt="Blog Post 2">
                    <div class="card-body">
                        <h5 class="card-title">Perubahan SOP Penanganan Laporan</h5>
                        <p class="card-text">Kami memperbarui alur penanganan untuk meningkatkan kecepatan dan transparansi. Pelajari perubahan dan dampaknya bagi pelapor.</p>
                        <a href="{{ url('/berita') }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/blog/berita-3.png') }}" class="card-img-top" alt="Blog Post 3">
                    <div class="card-body">
                        <h5 class="card-title">Contoh Kasus: Penyelesaian Pengaduan</h5>
                        <p class="card-text">Ringkasan langkah penanganan kasus nyata yang berhasil diselesaikan — pelajaran dan hasil yang dicapai.</p>
                        <a href="{{ url('/kisah-sukses') }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
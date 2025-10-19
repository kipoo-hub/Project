<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Services - Sicepu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="services, sicepu, pengaduan, aspirasi" name="keywords">
    <meta content="Halaman layanan Sicepu untuk pengaduan dan aspirasi." name="description">

    <!-- Include CSS and JS files -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')

    <div class="container py-5">
        <h1 class="display-4 mb-4">Layanan Kami</h1>
        <p class="mb-4">Kami menyediakan berbagai layanan untuk membantu Anda menyampaikan pengaduan dan aspirasi.</p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <h4>Aspirasi</h4>
                    <p>Sampaikan ide dan rekomendasi Anda untuk perbaikan layanan dan kebijakan publik.</p>
                    <a class="btn btn-primary" href="{{ url('/aspirasi') }}">Kirim Aspirasi</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <h4>Pengaduan</h4>
                    <p>Laporkan masalah layanan, kebijakan atau pelanggaran yang Anda temui.</p>
                    <a class="btn btn-primary" href="{{ url('/lapor') }}">Laporkan Sekarang</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <h4>Pelaporan Anonim</h4>
                    <p>Ingin melapor tanpa mengungkap identitas? Gunakan opsi pelaporan anonim kami.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <h4>Cek Status</h4>
                    <p>Pantau perkembangan laporan dan lihat tindak lanjut yang diberikan tim kami.</p>
                    <a class="btn btn-primary" href="{{ url('/status-laporan') }}">Cek Status</a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.app')

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
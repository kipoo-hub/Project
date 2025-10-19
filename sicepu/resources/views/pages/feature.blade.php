<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Features - Sicepu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container py-5">
        <h1 class="display-4 mb-4">Our Features</h1>
        <p class="mb-4">Discover the various features we offer to enhance your experience with Sicepu.</p>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item">
                    <h4>Aspirasi</h4>
                    <p>Sampaikan ide dan rekomendasi Anda untuk perbaikan layanan dan kebijakan publik.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item">
                    <h4>Pengaduan</h4>
                    <p>Laporkan masalah layanan, kebijakan atau pelanggaran yang Anda temui. Kami akan menindaklanjuti.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item">
                    <h4>Pelaporan Anonim</h4>
                    <p>Ingin melapor tanpa mengungkap identitas? Gunakan opsi pelaporan anonim kami.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item">
                    <h4>Cek Status</h4>
                    <p>Pantau perkembangan laporan dan lihat tindak lanjut yang diberikan tim kami.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
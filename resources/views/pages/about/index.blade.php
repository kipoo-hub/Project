@extends('layouts.guest.app')

@section('title', 'about')

@section('content')

<!-- ABOUT SECTION -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">

        <div class="row align-items-center g-5">

            <!-- LEFT SIDE -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <h6 class="text-primary fw-bold">Tentang Pengaduan & Aspirasi</h6>
                <h1 class="display-5 fw-bold mb-4">
                    Wadah Resmi untuk Menyampaikan Laporan, Keluhan, dan Aspirasi
                </h1>

                <p class="text-muted mb-3">
                    Layanan Pengaduan & Aspirasi ini disediakan untuk memastikan setiap suara masyarakat didengar
                    dan ditindaklanjuti secara profesional. Kami berkomitmen memberikan solusi cepat dan transparan
                    untuk menciptakan pelayanan publik yang lebih baik.
                </p>

                <div class="d-flex flex-column gap-2 mt-3">
                    <div class="d-flex">
                        <i class="fa fa-shield-alt text-primary fs-4 me-3"></i>
                        <p class="fw-semibold mb-0">Proses penanganan aman, terstruktur, dan terdokumentasi.</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-sync-alt text-primary fs-4 me-3"></i>
                        <p class="fw-semibold mb-0">Pemantauan status laporan secara real-time.</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-user-secret text-primary fs-4 me-3"></i>
                        <p class="fw-semibold mb-0">Privasi terjamin & tersedia opsi laporan anonim.</p>
                    </div>
                </div>

                <a href="{{ route('pengaduan.create') }}" class="btn btn-primary rounded-pill px-5 py-3 mt-4 shadow">
                    Sampaikan Pengaduan Anda
                </a>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow p-4">
                    <img src="{{ asset('assets/img/about-1.png') }}" class="img-fluid rounded w-100 mb-4"
                        alt="Pengaduan & Aspirasi">
                </div>

                <!-- NEW STATISTIC SECTION -->
                <div class="row g-4 mt-2">
                    <div class="col-6">
                        <div class="stat-card text-center p-4 rounded bg-white shadow-sm h-100">
                            <h2 class="text-primary fw-bold" data-toggle="counter-up">1,254+</h2>
                            <p class="fw-semibold mb-0 text-muted">Pengaduan Ditangani</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="stat-card text-center p-4 rounded bg-white shadow-sm h-100">
                            <h2 class="text-primary fw-bold" data-toggle="counter-up">3,842+</h2>
                            <p class="fw-semibold mb-0 text-muted">Aspirasi Masuk</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="stat-card text-center p-4 rounded bg-white shadow-sm h-100">
                            <h2 class="text-primary fw-bold" data-toggle="counter-up">45</h2>
                            <p class="fw-semibold mb-0 text-muted">Tim Penanganan</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="stat-card text-center p-4 rounded bg-white shadow-sm h-100">
                            <h2 class="text-primary fw-bold" data-toggle="counter-up">91%</h2>
                            <p class="fw-semibold mb-0 text-muted">Tingkat Penyelesaian</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- ===== EXTRA SECTION: ALUR PROSES ===== -->
        <div class="mt-5 pt-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Bagaimana Proses Pengaduan Berjalan?</h2>
                <p class="text-muted">
                    Kami memastikan alur penanganan jelas, cepat, dan mudah dipahami.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="process-box p-4 text-center bg-white rounded shadow-sm h-100">
                        <div class="icon-box mb-3">
                            <i class="fa fa-edit text-primary fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">1. Kirim Laporan</h4>
                        <p class="text-muted">Masyarakat mengirimkan laporan atau aspirasi melalui sistem ini.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-box p-4 text-center bg-white rounded shadow-sm h-100">
                        <div class="icon-box mb-3">
                            <i class="fa fa-search text-primary fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">2. Verifikasi & Tindak Lanjut</h4>
                        <p class="text-muted">Tim terkait memverifikasi dan menindaklanjuti laporan secara profesional.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-box p-4 text-center bg-white rounded shadow-sm h-100">
                        <div class="icon-box mb-3">
                            <i class="fa fa-check-circle text-primary fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">3. Penyelesaian & Feedback</h4>
                        <p class="text-muted">Hasil penanganan disampaikan kembali kepada pelapor dengan transparan.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<style>
    .stat-card {
        border-left: 4px solid #0d6efd;
        transition: .3s;
    }

    .stat-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
    }

    .process-box {
        transition: 0.3s;
        border-bottom: 4px solid transparent;
    }

    .process-box:hover {
        transform: translateY(-6px);
        border-bottom: 4px solid #0d6efd;
    }
</style>

@endsection

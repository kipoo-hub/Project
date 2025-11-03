@extends('layouts.guest.app')

@section('title', 'about')

@section('content')

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

            @endsection
            <!-- About End -->

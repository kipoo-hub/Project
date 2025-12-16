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

                                <a href="{{ url('/') }}" class="navbar-brand p-0 d-flex align-items-center gap-3 mb-3">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Suara Rakyat"
                                        style="height: 60px; object-fit: contain;">

                                    <div class="d-flex flex-column">
                                        <span class="fw-bold text-primary" style="font-size: 20px;">Suara Rakyat</span>
                                        <span class="text-muted" style="font-size: 13px;">Pengaduan & Aspirasi</span>
                                    </div>
                                </a>

                                <p class="text-white mb-4">
                                    Suara Rakyat adalah saluran resmi untuk menerima pengaduan dan aspirasi masyarakat.
                                    Kirim laporan, pantau status, dan dapatkan informasi tindak lanjut dari tim kami.
                                </p>

                                <div class="d-flex gap-2">
                                    <a class="btn btn-md-square rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square rounded-circle" href="https://www.instagram.com/pikpuks_"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>

                            </div>
                        </div>

                        <!-- QUICK LINKS -->
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Tautan Cepat</h4>

                                <a href="{{ route('home') }}"><i class="fas fa-angle-right me-2"></i> Beranda</a><br>
                                <a href="{{ route('pengaduan.index') }}"><i class="fas fa-angle-right me-2"></i> Pengaduan</a><br>
                                <a href="{{ route('kategori.index') }}"><i class="fas fa-angle-right me-2"></i> Kategori</a><br>
                                <a href="{{ route('tindak.index') }}"><i class="fas fa-angle-right me-2"></i> Tindak Lanjut</a><br>
                                <a href="{{ route('penilaian.index') }}"><i class="fas fa-angle-right me-2"></i> Penilaian Layanan</a>
                            </div>
                        </div>

                        <!-- GALLERY -->
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Galeri & Ilustrasi</h4>

                                <div class="row g-3">
                                    @foreach([1,2,3] as $i)
                                        <div class="col-4">
                                            <div class="footer-instagram rounded position-relative">
                                                <img src="{{ asset('assets/img/instagram-footer-'.$i.'.jpg') }}"
                                                     class="img-fluid w-100 rounded" alt="galeri-{{ $i }}">
                                                <div class="footer-search-icon">
                                                    <a href="{{ asset('assets/img/instagram-footer-'.$i.'.jpg') }}"
                                                       data-lightbox="footer-gallery" aria-label="lihat gambar">
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
                                        <small class="text-white-50">Jl. Umban Sari Publik No.12, Pekanbaru</small>
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
                           class="btn btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
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

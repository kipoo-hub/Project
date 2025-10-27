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
                                                    data-lightbox="footerInstagram-1" class="my-auto"><i
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
                                                    data-lightbox="footerInstagram-2" class="my-auto"><i
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
                                                    data-lightbox="footerInstagram-3" class="my-auto"><i
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
                                        <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
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
                                        <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
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
                                        <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
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
                            <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada"
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

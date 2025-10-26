
<footer class="footer mt-5 py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5><i class="fas fa-comments me-2"></i>Sicepu</h5>
                <p class="text-muted">Sistem Pengaduan & Aspirasi Masyarakat</p>
            </div>
            <div class="col-md-3">
                <h5>Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-decoration-none">Beranda</a></li>
                    <li><a href="{{ route('pengaduan.create') }}" class="text-decoration-none">Buat Pengaduan</a></li>
                    <li><a href="{{ route('pengaduan.index') }}" class="text-decoration-none">Lihat Pengaduan</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Kontak</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope me-2"></i>info@sicepu.com</li>
                    <li><i class="fas fa-phone me-2"></i>+62 822 9270 7434</li>
                    <li><i class="fas fa-map-marker-alt me-2"></i>Jl. Umban Sari No.12</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="text-center text-muted">
            <small>&copy; {{ date('Y') }} Sicepu - Sistem Pengaduan & Aspirasi Masyarakat</small>
        </div>
    </div>
</footer>

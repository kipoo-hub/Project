<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Logo / Brand -->
            <a href="#" class="navbar-brand p-0">
                <h1 class="text-primary mb-0">
                    <i class="fab fa-slack me-2"></i> Bina Desa
                </h1>
            </a>

            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Beranda</a>
                    <a href="{{ route('pengaduan.index') }}" class="nav-item nav-link">Pengaduan</a>
                    <a href="{{ route('kategori.index') }}" class="nav-item nav-link">Kategori</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">
                        <i class="fas fa-info-circle"></i> Tentang
                    </a>

                    <!-- Dropdown Menu -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Status</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('tindak.index') }}" class="dropdown-item">Tindak Lanjut</a>
                            <a href="{{ route('penilaian.index') }}" class="dropdown-item">Penilaian</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->

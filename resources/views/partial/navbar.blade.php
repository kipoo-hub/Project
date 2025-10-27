    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> Bina Desa</h1>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ route('pengaduan.index') }}" class="nav-item nav-link">Pengaduan</a>
                        <a href="{{ route('kategori.index') }}" class="nav-item nav-link">Kategori</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Status</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('tindak.index') }}" class="dropdown-item">Tindak Lanjut</a>
                                <a href="{{ route('penilaian.index') }}" class="dropdown-item">Penilaian</a>
                            </div>
                        </div>
                    </div>

                    <div class="nav-btn px-3">
                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </div>

                </div>
        </div>
        </nav>
    </div>
    </div>
    <!-- Navbar & Hero End -->

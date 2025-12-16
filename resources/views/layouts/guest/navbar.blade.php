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
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">Status</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('tindak.index') }}" class="dropdown-item">Tindak Lanjut</a>
                                    </li>
                                    <li><a href="{{ route('penilaian.index') }}" class="dropdown-item">Penilaian</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-btn px-3">
                            <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

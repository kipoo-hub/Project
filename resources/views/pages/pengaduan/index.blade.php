@extends('layouts.guest.app')

@section('title', 'Daftar Pengaduan')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary">Daftar Pengaduan & Aspirasi</h2>
            <a href="{{ route('pengaduan.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Buat Pengaduan
            </a>
        </div>

        {{-- Notifikasi --}}
        @include('layouts.guest.alert')

        {{-- Filter --}}
        <div class="card shadow-sm border-0 p-3 mb-4 rounded-4">
            <form method="GET" action="">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Cari Judul / Tiket</label>
                        <input type="text" name="search" class="form-control" value="{{ request('search') }}"
                            placeholder="Cari pengaduan...">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Kategori</label>
                        <select name="kategori_id" class="form-select">
                            <option value="">Semua Kategori</option>
                            @foreach ($kategoris as $kat)
                                <option value="{{ $kat->kategori_id }}"
                                    {{ request('kategori_id') == $kat->kategori_id ? 'selected' : '' }}>
                                    {{ $kat->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="">Semua Status</option>
                            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="baru" {{ request('status') == 'baru' ? 'selected' : '' }}>Baru</option>
                            <option value="proses" {{ request('status') == 'proses' ? 'selected' : '' }}>Diproses</option>
                            <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-filter me-1"></i> Filter
                        </button>
                    </div>
                </div>
            </form>
        </div>

        {{-- Slideshow Carousel --}}
        @php
            $slides = [
                ['img' => 'slide2.jpg', 'judul' => 'Jalan Berlubang', 'ket' => 'Membahayakan pengendara'],
                ['img' => 'slide3.jpg', 'judul' => 'Fasilitas Umum', 'ket' => 'Bangku dan taman rusak'],
                ['img' => 'slide4.jpg', 'judul' => 'Sampah Menumpuk', 'ket' => 'Lingkungan tercemar'],
                ['img' => 'slide5.jpg', 'judul' => 'Lampu Jalan Mati', 'ket' => 'Rawan tindak kriminal'],
                ['img' => 'slide1.jpg', 'judul' => 'Aspirasi Pembangunan', 'ket' => 'Infrastruktur untuk warga'],
            ];
        @endphp

        <div class="row mb-5">
            <div class="col-12">
                <div class="card shadow border-0 overflow-hidden rounded-4">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="mb-0">
                            <i class="fas fa-images me-2"></i> Galeri & Contoh Pengaduan Indonesia
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div id="carouselPengaduan" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4500"
                            data-bs-touch="true" data-bs-pause="hover">


                            {{-- Indicators --}}
                            <div class="carousel-indicators">
                                @for ($i = 0; $i < count($slides); $i++)
                                    <button type="button" data-bs-target="#carouselPengaduan"
                                        data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}">
                                    </button>
                                @endfor
                            </div>

                            {{-- Slides --}}
                            <div class="carousel-inner">
                                @foreach ($slides as $i => $slide)
                                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                        <img src="{{ file_exists(public_path('assets/img/slideshow/' . $slide['img']))
                                            ? asset('assets/img/slideshow/' . $slide['img'])
                                            : asset('assets/img/placeholder.png') }}"
                                            class="d-block w-100" style="height: 360px; object-fit: cover;"
                                            alt="{{ $slide['judul'] }}">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="bg-dark bg-opacity-75 p-3 rounded-3">
                                                <h4 class="fw-bold">📍 {{ $slide['judul'] }}</h4>
                                                <p class="mb-1">{{ $slide['ket'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- Controls --}}
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPengaduan"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselPengaduan"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Grid Pengaduan --}}
        <div class="row g-4">
            @forelse($pengaduans as $pengaduan)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow-sm rounded-4 text-center p-3 hover-card h-100">
                        <div class="mb-3">
                            @if (!empty($pengaduan->lampiran))
                                <img src="{{ asset('storage/' . $pengaduan->lampiran) }}" alt="Foto Pengaduan"
                                    class="rounded-circle border border-3 border-primary mx-auto"
                                    style="width: 90px; height: 90px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/img/placeholder.png') }}" alt="No Image"
                                    class="rounded-circle border border-3 border-secondary mx-auto"
                                    style="width: 90px; height: 90px; object-fit: cover;">
                            @endif
                        </div>
                        <h5 class="fw-bold mb-1 text-dark">{{ Str::limit($pengaduan->judul, 30) }}</h5>
                        <p class="text-muted small mb-2"><i
                                class="fas fa-folder-open me-1"></i>{{ $pengaduan->kategori->nama ?? 'Tanpa Kategori' }}
                        </p>
                        <div class="mb-3">
                            @include('pages.pengaduan._status')
                            <div class="small text-secondary mt-1"><i
                                    class="far fa-calendar-alt me-1"></i>{{ $pengaduan->created_at->format('d M Y') }}
                            </div>
                        </div>
                        @if ($pengaduan->lokasi ?? false)
                            <div class="mb-3"><span class="badge bg-light text-secondary border"><i
                                        class="fas fa-map-marker-alt me-1"></i>{{ $pengaduan->lokasi }}</span></div>
                        @endif
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('pengaduan.show', $pengaduan) }}" class="btn btn-sm btn-outline-info"><i
                                    class="fas fa-eye"></i></a>
                            @if ($pengaduan->status == 'draft')
                                <a href="{{ route('pengaduan.edit', $pengaduan) }}"
                                    class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('pengaduan.destroy', $pengaduan) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus pengaduan ini?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted py-5">
                    <i class="fas fa-folder-open fa-3x mb-3"></i>
                    <p>Belum ada pengaduan yang dikirim.</p>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $pengaduans->links('pagination::bootstrap-5') }}
        </div>

    </div>

    {{-- Hover Card Effect --}}
    <style>
        .hover-card {
            transition: all 0.3s ease-in-out;
        }

        .hover-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .hover-card img {
            transition: transform 0.3s ease;
        }

        .hover-card:hover img {
            transform: scale(1.05);
        }
    </style>
@endsection

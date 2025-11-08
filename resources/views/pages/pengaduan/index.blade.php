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

    {{-- Grid Card Pengaduan --}}
    <div class="row g-4">
        @forelse($pengaduans as $pengaduan)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3 hover-card h-100">
                {{-- Foto Pengaduan atau Icon Default --}}
                <div class="mb-3">
                    @if($pengaduan->foto ?? false)
                    <img src="{{ asset('storage/'.$pengaduan->foto) }}"
                        alt="Foto Pengaduan"
                        class="rounded-circle border border-3 border-primary mx-auto"
                        style="width: 90px; height: 90px; object-fit: cover;">
                    @else
                    <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center mx-auto"
                        style="width: 90px; height: 90px; font-size: 32px;">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    @endif
                </div>

                {{-- Judul Pengaduan --}}
                <h5 class="fw-bold mb-1 text-dark">{{ Str::limit($pengaduan->judul, 30) }}</h5>
                <p class="text-muted small mb-2">
                    <i class="fas fa-folder-open me-1"></i>
                    {{ $pengaduan->kategori->nama ?? 'Tanpa Kategori' }}
                </p>

                {{-- Status dan Tanggal --}}
                <div class="mb-3">
                    @include('pages.pengaduan._status')
                    <div class="small text-secondary mt-1">
                        <i class="far fa-calendar-alt me-1"></i>
                        {{ $pengaduan->created_at->format('d M Y') }}
                    </div>
                </div>

                {{-- Tag / Lokasi / Atribut Tambahan --}}
                @if($pengaduan->lokasi ?? false)
                <div class="mb-3">
                    <span class="badge bg-light text-secondary border">
                        <i class="fas fa-map-marker-alt me-1"></i>{{ $pengaduan->lokasi }}
                    </span>
                </div>
                @endif

                {{-- Tombol Aksi --}}
                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('pengaduan.show', $pengaduan) }}" class="btn btn-sm btn-outline-info">
                        <i class="fas fa-eye"></i>
                    </a>

                    @if($pengaduan->status == 'draft')
                    <a href="{{ route('pengaduan.edit', $pengaduan) }}" class="btn btn-sm btn-outline-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('pengaduan.destroy', $pengaduan) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus pengaduan ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-trash"></i>
                        </button>
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
</div>

{{-- Efek Hover & Transisi --}}
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
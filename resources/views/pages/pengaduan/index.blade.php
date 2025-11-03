@extends('layouts.guest.app')

@section('title', 'Daftar Pengaduan')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Daftar Pengaduan & Aspirasi</h2>
        <a href="{{ route('pengaduan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Buat Pengaduan
        </a>
    </div>

    @include('layouts.guest.alert')

    <div class="row g-4">
        @forelse($pengaduans as $pengaduan)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card shadow-sm border-0 h-100 rounded-4 text-center">
                <div class="card-body">
                    {{-- Foto Pengaduan atau Icon Default --}}
                    <div class="mb-3">
                        @if($pengaduan->foto ?? false)
                            <img src="{{ asset('storage/'.$pengaduan->foto) }}"
                                 alt="Foto Pengaduan"
                                 class="rounded-circle border border-3 border-primary"
                                 style="width: 90px; height: 90px; object-fit: cover;">
                        @else
                            <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center mx-auto"
                                 style="width: 90px; height: 90px; font-size: 32px;">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                        @endif
                    </div>

                    {{-- Informasi Pengaduan --}}
                    <h5 class="fw-bold">{{ $pengaduan->judul }}</h5>
                    <p class="text-muted small mb-2">
                        <i class="fas fa-folder-open me-1"></i> {{ $pengaduan->kategori->nama }}
                    </p>

                    {{-- Status dan Tanggal --}}
                    <div class="mb-3">
                        @include('pengaduan._status')
                        <div class="small text-secondary mt-1">
                            <i class="far fa-calendar-alt me-1"></i>
                            {{ $pengaduan->created_at->format('d M Y') }}
                        </div>
                    </div>

                    {{-- Aksi --}}
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('pengaduan.show', $pengaduan) }}"
                           class="btn btn-sm btn-outline-info">
                            <i class="fas fa-eye"></i>
                        </a>
                        @if($pengaduan->status == 'draft')
                        <a href="{{ route('pengaduan.edit', $pengaduan) }}"
                           class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('pengaduan.destroy', $pengaduan) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Yakin hapus?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="text-center py-5">
            <p class="text-muted">Belum ada pengaduan yang dikirim.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection

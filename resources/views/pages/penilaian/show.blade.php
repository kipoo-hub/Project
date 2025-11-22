@extends('layouts.guest.app')

@section('title', 'Detail Penilaian')

@section('content')
<div class="container py-4">

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient-primary text-white rounded-top-4 py-3">
            <h4 class="mb-0">
                <i class="fas fa-star-half-alt me-2"></i>
                Detail Penilaian
            </h4>
        </div>

        <div class="card-body p-4">

            {{-- Pengaduan --}}
            <div class="mb-4">
                <label class="form-label fw-bold text-secondary">
                    <i class="fas fa-file-alt me-2"></i> Judul Pengaduan
                </label>
                <div class="p-3 bg-light rounded">
                    {{ $penilaian->pengaduan->judul ?? 'Tidak ada data pengaduan' }}
                </div>
            </div>

            {{-- Rating --}}
            <div class="mb-4">
                <label class="form-label fw-bold text-secondary">
                    <i class="fas fa-star me-2"></i> Rating
                </label>
                <div class="p-3 bg-light rounded fs-5">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star {{ $i <= $penilaian->rating ? 'text-warning' : 'text-muted' }}"></i>
                    @endfor
                </div>
            </div>

            {{-- Komentar --}}
            <div class="mb-4">
                <label class="form-label fw-bold text-secondary">
                    <i class="fas fa-comment-dots me-2"></i> Komentar
                </label>
                <div class="p-3 bg-light rounded">
                    {{ $penilaian->komentar ?? '-' }}
                </div>
            </div>

            {{-- Tanggal --}}
            <div class="mb-4">
                <label class="form-label fw-bold text-secondary">
                    <i class="fas fa-calendar-alt me-2"></i> Tanggal Penilaian
                </label>
                <div class="p-3 bg-light rounded">
                    {{ $penilaian->created_at->format('d F Y, H:i') }}
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('penilaian.index') }}" class="btn btn-secondary px-4">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>

                <a href="{{ route('penilaian.edit', $penilaian) }}" class="btn btn-warning px-4">
                    <i class="fas fa-edit me-1"></i> Edit
                </a>
            </div>

        </div>
    </div>

</div>
@endsection

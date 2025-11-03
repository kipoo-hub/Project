@extends('layouts.guest.app')

@section('title', 'Detail Penilaian')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Detail Penilaian</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label fw-bold">Judul Pengaduan</label>
                <p>{{ $penilaian->pengaduan->judul ?? 'Tidak ada data pengaduan' }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Rating</label>
                <p>
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star {{ $i <= $penilaian->rating ? 'text-warning' : 'text-muted' }}"></i>
                    @endfor
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Komentar</label>
                <p>{{ $penilaian->komentar ?? '-' }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Tanggal Penilaian</label>
                <p>{{ $penilaian->created_at->format('d F Y, H:i') }}</p>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('penilaian.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <a href="{{ route('penilaian.edit', $penilaian) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

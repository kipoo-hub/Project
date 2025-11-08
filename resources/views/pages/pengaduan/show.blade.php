@extends('layouts.guest.app')

@section('title', 'Detail Pengaduan')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h4 class="mb-0">Detail Pengaduan</h4>
                </div>

                <div class="card-body p-4">

                    {{-- Tombol Kembali --}}
                    <div class="mb-3">
                        <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar
                        </a>
                    </div>

                    {{-- Nomor Tiket dan Status --}}
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-info text-dark fs-6">
                            Nomor Tiket: <strong>{{ $pengaduan->nomor_tiket }}</strong>
                        </span>
                        {{-- Memanggil partial view status yang sudah ada --}}
                        @include('pages.pengaduan._status', ['status' => $pengaduan->status])
                    </div>

                    {{-- Judul Pengaduan --}}
                    <h2 class="fw-bold mb-3">{{ $pengaduan->judul }}</h2>

                    {{-- Info Pelapor dan Tanggal --}}
                    <p class="text-muted mb-3">
                        <i class="fas fa-user me-1"></i>
                        Dikirim oleh:
                        <strong>
                            {{-- Cek jika anonim atau warga tidak ada --}}
                            @if($pengaduan->is_anonim || !$pengaduan->warga)
                            Anonim
                            @else
                            {{ $pengaduan->warga->name }} {{-- Asumsi kolom nama di tabel user adalah 'name' --}}
                            @endif
                        </strong>
                        <br>
                        <i class="far fa-calendar-alt me-1"></i>
                        Tanggal: {{ $pengaduan->created_at->format('d M Y, H:i') }}
                        <br>
                        <i class="fas fa-folder-open me-1"></i>
                        Kategori: <strong>{{ $pengaduan->kategori->nama ?? 'Tanpa Kategori' }}</strong>
                    </p>

                    <hr>

                    {{-- Isi Pengaduan --}}
                    <div class="mb-4">
                        <h5 class="fw-semibold">Isi Pengaduan:</h5>
                        <p style="white-space: pre-wrap;">{{ $pengaduan->deskripsi }}</p>
                    </div>

                    {{-- Lampiran jika ada --}}
                    @if($pengaduan->lampiran)
                    <div class="mb-4">
                        <h5 class="fw-semibold">Lampiran:</h5>
                        <a href="{{ asset('storage/' . $pengaduan->lampiran) }}" target="_blank" class="btn btn-outline-primary">
                            <i class="fas fa-paperclip me-1"></i> Lihat Lampiran
                        </a>
                    </div>
                    @endif

                    <hr>

                    {{-- Bagian Tindak Lanjut (Kosong untuk saat ini) --}}
                    <div class="mt-4">
                        <h4 class="fw-bold mb-3">Tindak Lanjut</h4>

                        @forelse($pengaduan->tindakLanjuts as $tindak)
                        <div class="alert alert-success">
                            <h5 class="alert-heading">Jawaban Petugas ({{ $tindak->petugas->name ?? 'Petugas' }})</h5>
                            <p>{{ $tindak->isi_tindak_lanjut }}</p>
                            <hr>
                            <p class="mb-0 small text-muted">{{ $tindak->created_at->format('d M Y, H:i') }}</p>
                        </div>
                        @empty
                        <div class="alert alert-secondary text-center">
                            Belum ada tindak lanjut dari petugas.
                        </div>
                        @endforelse
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
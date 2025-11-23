@extends('layouts.guest.app')

@section('title', 'Tindak Lanjut Pengaduan')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Daftar Tindak Lanjut</h2>
        </div>

        @include('layouts.guest.alert')
        {{-- Filter Form --}}
        <form method="GET" class="row g-3 mb-4 p-3 bg-light rounded-3 shadow-sm">

            <div class="col-md-3">
                <label class="form-label">Petugas</label>
                <input type="text" name="petugas" value="{{ request('petugas') }}" class="form-control"
                    placeholder="Nama petugas">
            </div>

            <div class="col-md-3">
                <label class="form-label">Aksi</label>
                <input type="text" name="aksi" value="{{ request('aksi') }}" class="form-control"
                    placeholder="Aksi tindak lanjut">
            </div>

            <div class="col-md-3">
                <label class="form-label">Catatan</label>
                <input type="text" name="catatan" value="{{ request('catatan') }}" class="form-control"
                    placeholder="Cari catatan">
            </div>

            <div class="col-md-3">
                <label class="form-label">Judul Pengaduan</label>
                <input type="text" name="pengaduan" value="{{ request('pengaduan') }}" class="form-control"
                    placeholder="Cari pengaduan">
            </div>

            <div class="col-md-3">
                <label class="form-label">Dari Tanggal</label>
                <input type="date" name="date_from" value="{{ request('date_from') }}" class="form-control">
            </div>

            <div class="col-md-3">
                <label class="form-label">Sampai Tanggal</label>
                <input type="date" name="date_to" value="{{ request('date_to') }}" class="form-control">
            </div>

            <div class="col-md-3 d-flex align-items-end gap-2">
                <button class="btn btn-primary w-100">
                    <i class="fas fa-search"></i> Cari
                </button>
            </div>

            <div class="col-md-3 d-flex align-items-end gap-2">
                <a href="{{ route('tindak.index') }}" class="btn btn-secondary w-100">
                    <i class="fas fa-sync"></i> Reset
                </a>
            </div>

        </form>

        <div class="row g-4">

            @forelse($tindak as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">

                            {{-- Judul Pengaduan --}}
                            <h5 class="card-title fw-bold">
                                @if ($item->pengaduan)
                                    <a href="{{ route('pengaduan.show', $item->pengaduan) }}"
                                        class="text-dark text-decoration-none">
                                        {{ Str::limit($item->pengaduan->judul, 40) }}
                                    </a>
                                @else
                                    <span class="text-danger">Pengaduan tidak ditemukan</span>
                                @endif
                            </h5>

                            {{-- Status --}}
                            <span class="badge bg-{{ $item->status_color ?? 'secondary' }} mb-2">
                                {{ $item->status ?? 'Tidak diketahui' }}
                            </span>

                            {{-- Catatan --}}
                            <p class="text-muted mb-3">
                                {{ Str::limit($item->catatan, 80) }}
                            </p>

                            {{-- Informasi Petugas & Tanggal --}}
                            <div class="small text-muted mb-3">
                                <i class="fas fa-user"></i> {{ $item->petugas ?? '-' }} <br>
                                <i class="fas fa-calendar"></i> {{ $item->created_at->format('d/m/Y') }}
                            </div>

                            <div class="d-flex gap-2">
                                <a href="{{ route('tindak.show', $item) }}" class="btn btn-info btn-sm text-white w-100">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a href="{{ route('tindak.edit', $item) }}"
                                    class="btn btn-warning btn-sm text-white w-100">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @empty

                {{-- Jika kosong --}}
                <div class="col-12 text-center py-5">
                    <h5 class="text-muted">Belum ada tindak lanjut</h5>
                </div>
            @endforelse

        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $tindak->links('pagination::bootstrap-5') }}
        </div>
    @endsection

@extends('layouts.guest.app')

@section('title', 'Tindak Lanjut Pengaduan')

@section('content')

<div class="container py-4">

    {{-- Header --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Tindak Lanjut Pengaduan</h2>
        <p class="text-muted">Lihat progres setiap laporan dan langkah tindak lanjut yang sudah dilakukan.</p>
    </div>

    @include('layouts.guest.alert')

    {{-- Filter --}}
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body">
            <form method="GET" class="row g-3">

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Petugas</label>
                    <input type="text" class="form-control" name="petugas" value="{{ request('petugas') }}"
                        placeholder="Nama petugas">
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Aksi</label>
                    <input type="text" class="form-control" name="aksi" value="{{ request('aksi') }}"
                        placeholder="Aksi tindak lanjut">
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Catatan</label>
                    <input type="text" class="form-control" name="catatan" value="{{ request('catatan') }}"
                        placeholder="Cari catatan">
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Judul Pengaduan</label>
                    <input type="text" class="form-control" name="pengaduan" value="{{ request('pengaduan') }}"
                        placeholder="Cari pengaduan">
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Dari Tanggal</label>
                    <input type="date" class="form-control" name="date_from" value="{{ request('date_from') }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sampai Tanggal</label>
                    <input type="date" class="form-control" name="date_to" value="{{ request('date_to') }}">
                </div>

                <div class="col-md-3 d-flex align-items-end">
                    <button class="btn btn-primary w-100 rounded-3">
                        <i class="fas fa-search"></i> Cari
                    </button>
                </div>

                <div class="col-md-3 d-flex align-items-end">
                    <a href="{{ route('tindak.index') }}" class="btn btn-light border w-100 rounded-3">
                        <i class="fas fa-sync"></i> Reset
                    </a>
                </div>

            </form>
        </div>
    </div>

    {{-- Cards --}}
    <div class="row g-4">

        @forelse($tindak as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body">

                        {{-- Judul --}}
                        <h5 class="fw-semibold mb-1">
                            @if ($item->pengaduan)
                                <a href="{{ route('pengaduan.show', $item->pengaduan) }}"
                                   class="text-decoration-none text-dark">
                                    {{ Str::limit($item->pengaduan->judul, 50) }}
                                </a>
                            @else
                                <span class="text-danger">Pengaduan tidak ditemukan</span>
                            @endif
                        </h5>

                        {{-- Status --}}
                        <span class="badge rounded-pill px-3 py-2 bg-{{ $item->status_color ?? 'secondary' }}">
                            {{ $item->status ?? 'Tidak diketahui' }}
                        </span>

                        {{-- Catatan --}}
                        <p class="text-muted mt-3">
                            {{ Str::limit($item->catatan, 100) }}
                        </p>

                        {{-- Info --}}
                        <div class="d-flex justify-content-between small text-muted mt-2">
                            <span><i class="fas fa-user"></i> {{ $item->petugas ?? '-' }}</span>
                            <span><i class="fas fa-calendar"></i> {{ $item->created_at->format('d/m/Y') }}</span>
                        </div>

                        <hr>

                        {{-- Actions --}}
                        <div class="d-flex gap-2">
                            <a href="{{ route('tindak.show', $item) }}" class="btn btn-outline-primary w-100 rounded-3">
                                <i class="fas fa-eye"></i> Detail
                            </a>

                            <a href="{{ route('tindak.edit', $item) }}" class="btn btn-outline-warning w-100 rounded-3">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        @empty

            <div class="col-12 text-center py-5">
                <h5 class="text-muted mb-1">Belum ada tindak lanjut</h5>
                <small class="text-secondary">Data akan tampil setelah ada proses tindak lanjut.</small>
            </div>

        @endforelse

    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $tindak->links('pagination::bootstrap-5') }}
    </div>

</div>
@endsection

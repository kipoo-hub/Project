@extends('layouts.guest.app')

@section('title', 'Kategori Pengaduan')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary">Kategori Pengaduan</h2>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Tambah Kategori
            </a>
        </div>

        {{-- Notifikasi --}}
        @include('layouts.guest.alert')

        {{-- Dropdown Pilihan Kategori --}}


        {{-- filter form --}}
        <div class="card mb-4 p-3 shadow-sm">
            <form method="GET" action="">
                <div class="row g-3 align-items-end">

                    <div class="col-md-4">
                        <label class="form-label">Cari Nama</label>
                        <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                            placeholder="Cari kategori...">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Prioritas</label>
                        <select name="prioritas" class="form-select">
                            <option value="">Semua</option>
                            <option value="1" {{ request('prioritas') == 1 ? 'selected' : '' }}>Prioritas 1</option>
                            <option value="2" {{ request('prioritas') == 2 ? 'selected' : '' }}>Prioritas 2</option>
                            <option value="3" {{ request('prioritas') == 3 ? 'selected' : '' }}>Prioritas 3</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Status</label>
                        <select name="is_aktif" class="form-select">
                            <option value="">Semua</option>
                            <option value="1" {{ request('is_aktif') == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ request('is_aktif') == '0' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-success w-100">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>

                </div>
            </form>
        </div>

        {{-- Grid Card Kategori --}}
        <div class="row g-4">
            @forelse($kategoris as $kategori)
                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 rounded-4 text-center p-3 hover-shadow">
                        {{-- Gambar kategori (opsional) --}}
                        <img src="{{ $kategori->gambar ? asset('storage/' . $kategori->gambar) : asset('assets/img/placeholder.png') }}"
                            class="rounded-circle mx-auto mb-3" width="90" height="90">


                        {{-- Nama kategori --}}
                        <h5 class="fw-bold text-dark mb-0">{{ $kategori->nama }}</h5>
                        <p class="text-muted small mb-2">{{ Str::limit($kategori->deskripsi, 60) }}</p>

                        {{-- Jumlah pengaduan --}}
                        <span class="badge bg-info text-dark mb-3">
                            {{ $kategori->pengaduans_count ?? 0 }} Pengaduan
                        </span>

                        {{-- Tag (contoh dummy jika belum ada data tag di DB) --}}
                        <div class="d-flex flex-wrap justify-content-center gap-1 mb-3">
                            <span class="badge bg-light text-secondary border">umum</span>
                            <span class="badge bg-light text-secondary border">publik</span>
                        </div>

                        {{-- Tombol aksi --}}
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('kategori.show', $kategori->kategori_id) }}"
                                class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('kategori.edit', $kategori->kategori_id) }}"
                                class="btn btn-sm btn-outline-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('kategori.destroy', $kategori->kategori_id) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted py-5">
                    <i class="fas fa-folder-open fa-3x mb-3"></i>
                    <p>Belum ada kategori pengaduan</p>
                </div>
            @endforelse
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $kategoris->links('pagination::bootstrap-5') }}
        </div>

        {{-- Tambahan efek hover --}}
        <style>
            .hover-shadow:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease-in-out;
            }
        </style>
    @endsection

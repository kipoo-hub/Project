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
    <div class="mb-4">
        <label for="kategori_id" class="form-label">Pilih Kategori Pengaduan</label>
        <select id="kategori_id" class="form-select" onchange="if(this.value) window.location.href=this.value">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategoris as $item)
                <option value="{{ route('kategori.show', $item->kategori_id) }}">
                    {{ $item->nama }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Grid Card Kategori --}}
    <div class="row g-4">
        @forelse($kategoris as $kategori)
            <div class="col-md-4 col-lg-3">
                <div class="card border-0 shadow-sm h-100 rounded-4 text-center p-3 hover-shadow">
                    {{-- Gambar kategori (opsional) --}}
                    <img src="{{ $kategori->gambar ? asset('storage/'.$kategori->gambar) : 'https://via.placeholder.com/100' }}"
                        class="rounded-circle mx-auto mb-3"
                        width="90" height="90" alt="Foto kategori">

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
                        <a href="{{ route('kategori.show', $kategori->kategori_id) }}" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('kategori.edit', $kategori->kategori_id) }}" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('kategori.destroy', $kategori->kategori_id) }}" method="POST" onsubmit="return confirm('Yakin hapus kategori ini?')">
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

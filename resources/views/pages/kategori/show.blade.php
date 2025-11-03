
@extends('layouts.guest.app')

@section('title', 'Detail Kategori')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail Kategori Pengaduan</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6 class="fw-bold">Nama Kategori:</h6>
                        <p class="lead">{{ $kategoris->nama }}</p>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Deskripsi:</h6>
                        <p>{{ $kategoris->deskripsi }}</p>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Statistik:</h6>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h3 class="mb-0">{{ $kategoris->pengaduans_count }}</h3>
                                        <small class="text-muted">Total Pengaduan</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h3 class="mb-0">{{ $kategoris->pengaduans->where('status', 'selesai')->count() }}</h3>
                                        <small class="text-muted">Selesai</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h3 class="mb-0">{{ $kategoris->pengaduans->where('status', 'proses')->count() }}</h3>
                                        <small class="text-muted">Dalam Proses</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Pengaduan Terbaru:</h6>
                        @if($kategori->pengaduans->count() > 0)
                            <div class="list-group">
                                @foreach($kategori->pengaduans->take(5) as $pengaduan)
                                    <a href="{{ route('pengaduan.show', $pengaduan) }}"
                                        class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">{{ $pengaduan->judul }}</h6>
                                            <small>{{ $pengaduan->created_at->diffForHumans() }}</small>
                                        </div>
                                        <p class="mb-1">{{ Str::limit($pengaduan->isi, 100) }}</p>
                                        <small>Status: @include('pengaduan._status')</small>
                                    </a>
                                @endforeach
                            </div>
                            @if($kategori->pengaduans->count() > 5)
                                <div class="text-center mt-3">
                                    <a href="{{ route('pengaduan.index', ['kategori' => $kategori->id]) }}"
                                        class="btn btn-sm btn-outline-primary">
                                        Lihat Semua Pengaduan
                                    </a>
                                </div>
                            @endif
                        @else
                            <p class="text-muted">Belum ada pengaduan dalam kategori ini.</p>
                        @endif
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                        <div>
                            <a href="{{ route('kategori.edit', $kategori) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('kategori.destroy', $kategori) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

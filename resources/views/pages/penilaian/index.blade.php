@extends('layouts.guest.app')

@section('title', 'Penilaian Layanan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Penilaian Layanan</h2>
        <a href="{{ route('penilaian.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Penilaian
        </a>
    </div>

    @include('layouts.guest.alert')

    <div class="row">
        @forelse($penilaian as $item)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm h-100 rounded-4 border-0">
                <div class="card-body">

                    {{-- Judul Pengaduan --}}
                    <h5 class="card-title mb-2">
                        @if($item->pengaduan)
                        <a href="{{ route('pengaduan.show', $item->pengaduan) }}" class="text-decoration-none text-dark">
                            {{ Str::limit($item->pengaduan->judul, 40) }}
                        </a>
                        @else
                            <span class="text-muted">Tidak ada pengaduan</span>
                        @endif
                    </h5>

                    {{-- Rating Bintang --}}
                    <div class="mb-2">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $item->rating ? 'text-warning' : 'text-muted' }}"></i>
                        @endfor
                    </div>

                    {{-- Komentar --}}
                    <p class="text-muted mb-3">
                        {{ Str::limit($item->komentar, 70) }}
                    </p>

                    {{-- Tanggal --}}
                    <small class="text-secondary d-block mb-3">
                        <i class="far fa-calendar-alt"></i>
                        {{ $item->created_at->format('d M Y') }}
                    </small>

                    {{-- Aksi --}}
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('penilaian.show', $item) }}" class="btn btn-sm btn-outline-info">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('penilaian.edit', $item) }}" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('penilaian.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus penilaian ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <h5 class="text-muted">Belum ada penilaian layanan</h5>
        </div>
        @endforelse
    </div>
</div>
@endsection

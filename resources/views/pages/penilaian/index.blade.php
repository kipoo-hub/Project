@extends('layouts.guest.app')

@section('title', 'Penilaian Layanan')

@section('content')

<style>
    body { background:#f5f7fb; }

    .page-hero{
        background:linear-gradient(135deg,#4f7cff,#6f9dff);
        padding:28px 0 70px;
        border-radius:0 0 28px 28px;
        box-shadow:0 12px 30px rgba(0,0,0,.08);
        color:#fff;
    }

    .page-hero h2{
        font-weight:700;
        letter-spacing:.4px;
    }

    .section-wrapper{
        margin-top:-50px;
    }

    .filter-card{
        border-radius:18px;
        box-shadow:0 16px 40px rgba(0,0,0,.05);
    }

    .rating-pill{
        border-radius:10px;
        padding:6px 10px;
    }

    .review-card{
        border-radius:18px;
        transition:.18s ease;
    }

    .review-card:hover{
        transform:translateY(-3px);
        box-shadow:0 18px 40px rgba(0,0,0,.08);
    }

    .actions button,
    .actions a{
        border-radius:10px !important;
    }
</style>

<div class="page-hero">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <h2 class="mb-1">Penilaian Layanan</h2>
            <p class="mb-0 opacity-75">Lihat kualitas layanan berdasarkan masukan pengguna</p>
        </div>

        <a href="{{ route('penilaian.create') }}" class="btn btn-light fw-semibold rounded-3 shadow-sm">
            <i class="fas fa-plus me-1"></i> Tambah Penilaian
        </a>
    </div>
</div>

<div class="container section-wrapper">

    @include('layouts.guest.alert')

    {{-- FILTER --}}
    <div class="card filter-card mb-4">
        <div class="card-body">

            <form method="GET" action="{{ route('penilaian.index') }}" class="row g-3">

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Rating</label>
                    <select name="rating" class="form-select">
                        <option value="">Semua</option>
                        @for($i=1; $i<=5; $i++)
                            <option value="{{ $i }}" {{ request('rating') == $i ? 'selected' : '' }}>
                                {{ $i }} Bintang
                            </option>
                        @endfor
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">Cari Komentar</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-comment"></i></span>
                        <input type="text" name="komentar" class="form-control"
                               value="{{ request('komentar') }}" placeholder="Ketik komentar...">
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">Judul Pengaduan</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-search"></i></span>
                        <input type="text" name="pengaduan" class="form-control"
                               value="{{ request('pengaduan') }}" placeholder="Cari judul pengaduan...">
                    </div>
                </div>

                <div class="col-md-1 d-flex align-items-end gap-2">
                    <button class="btn btn-primary w-100">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>

                @if(request()->anyFilled(['rating','komentar','pengaduan']))
                    <div class="col-12 text-end">
                        <a href="{{ route('penilaian.index') }}" class="text-muted small">
                            Reset filter
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>

    {{-- LIST --}}
    <div class="row">
        @forelse($penilaian as $item)
        <div class="col-md-6 col-lg-4 mb-4">

            <div class="card review-card h-100 border-0">
                <div class="card-body">

                    {{-- Judul --}}
                    <h5 class="fw-bold mb-1">
                        @if($item->pengaduan)
                            <a href="{{ route('pengaduan.show', $item->pengaduan) }}" class="text-decoration-none text-dark">
                                {{ Str::limit($item->pengaduan->judul, 50) }}
                            </a>
                        @else
                            <span class="text-muted fst-italic">Tidak ada pengaduan</span>
                        @endif
                    </h5>

                    {{-- Rating --}}
                    <div class="mb-2">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $item->rating ? 'text-warning' : 'text-muted opacity-50' }}"></i>
                        @endfor>
                        <span class="badge bg-light text-dark rating-pill ms-1">
                            {{ $item->rating }}/5
                        </span>
                    </div>

                    {{-- Komentar --}}
                    <p class="text-muted mb-3">
                        {{ Str::limit($item->komentar, 90) }}
                    </p>

                    {{-- Tanggal --}}
                    <small class="text-secondary d-block mb-3">
                        <i class="far fa-calendar-alt me-1"></i>
                        {{ $item->created_at->format('d M Y') }}
                    </small>

                    {{-- Actions --}}
                    <div class="d-flex justify-content-between actions">
                        <a href="{{ route('penilaian.show', $item) }}" class="btn btn-sm btn-outline-info">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('penilaian.edit', $item) }}" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form method="POST"
                              action="{{ route('penilaian.destroy', $item) }}"
                              onsubmit="return confirm('Yakin ingin menghapus penilaian ini?')">
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

    <div class="mt-4 d-flex justify-content-center">
        {{ $penilaian->links('pagination::bootstrap-5') }}
    </div>

</div>
@endsection

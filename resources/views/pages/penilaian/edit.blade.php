@extends('layouts.app')

@section('title', 'Edit Penilaian Layanan')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Edit Penilaian</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('penilaian.update', $penilaian->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="pengaduan_id" class="form-label">Pilih Pengaduan</label>
                    <select name="pengaduan_id" id="pengaduan_id" class="form-select" required>
                        @foreach($pengaduan as $item)
                            <option value="{{ $item->id }}" {{ $penilaian->pengaduan_id == $item->id ? 'selected' : '' }}>
                                {{ $item->judul }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <select name="rating" id="rating" class="form-select" required>
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ $penilaian->rating == $i ? 'selected' : '' }}>
                                {{ $i }} ⭐
                            </option>
                        @endfor
                    </select>
                </div>

                <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea name="komentar" id="komentar" class="form-control" rows="4">{{ $penilaian->komentar }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('penilaian.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

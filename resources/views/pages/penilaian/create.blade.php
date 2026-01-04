@extends('layouts.guest.app')

@section('title', 'Tambah Penilaian Layanan')

@section('content')
<div class="container py-4">

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white border-0 pt-4 px-4">
            <h4 class="fw-bold mb-0">Tambah Penilaian</h4>
            <small class="text-muted">Bantu kami meningkatkan kualitas layanan.</small>
        </div>

        <div class="card-body px-4 pb-4">

            <form action="{{ route('penilaian.store') }}" method="POST">
                @csrf

                {{-- Pengaduan --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Pilih Pengaduan</label>
                    <select name="pengaduan_id"
                            class="form-select rounded-3 @error('pengaduan_id') is-invalid @enderror">
                        <option value="">— Pilih Pengaduan —</option>
                        @foreach($pengaduan as $item)
                            <option value="{{ $item->id }}">{{ $item->judul }}</option>
                        @endforeach
                    </select>
                    @error('pengaduan_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Rating --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Rating</label>
                    <select name="rating"
                            class="form-select rounded-3 @error('rating') is-invalid @enderror">
                        <option value="">— Pilih Rating —</option>
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }} ⭐</option>
                        @endfor
                    </select>
                    @error('rating')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Komentar --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Komentar</label>
                    <textarea name="komentar"
                              rows="4"
                              class="form-control rounded-3 @error('komentar') is-invalid @enderror"
                              placeholder="Tulis komentar (opsional)">{{ old('komentar') }}</textarea>
                    @error('komentar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Buttons --}}
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('penilaian.index') }}" class="btn btn-light border rounded-3">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <button type="submit" class="btn btn-success rounded-3 px-4">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection

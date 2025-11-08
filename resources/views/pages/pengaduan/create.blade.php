@extends('layouts.guest.app')

@section('title', 'Buat Pengaduan Baru')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
                    <h4 class="mb-0"><i class="fas fa-bullhorn me-2"></i> Formulir Pengaduan Masyarakat</h4>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Kategori Pengaduan --}}
                        <div class="mb-3">
                            <label for="kategori_id" class="form-label">Kategori Pengaduan <span
                                    class="text-danger">*</span></label>
                            <select name="kategori_id" id="kategori_id"
                                class="form-select @error('kategori_id') is-invalid @enderror">
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->kategori_id }}"
                                    {{ old('kategori_id') == $kategori->kategori_id ? 'selected' : '' }}>
                                    {{ $kategori->nama }}
                                </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Judul --}}
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-semibold">Judul Pengaduan <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="judul" id="judul"
                                class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}"
                                placeholder="Contoh: Jalan rusak di depan pasar...">
                            @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Isi Pengaduan --}}
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-semibold">Isi Pengaduan <span
                                    class="text-danger">*</span></label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control @error('deskripsi') is-invalid @enderror"
                                placeholder="Jelaskan pengaduan Anda dengan detail...">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Lampiran --}}
                        <div class="mb-3">
                            <label for="lampiran" class="form-label fw-semibold">Lampiran (Opsional)</label>
                            <input type="file" name="lampiran" id="lampiran"
                                class="form-control @error('lampiran') is-invalid @enderror"
                                accept=".jpg,.jpeg,.png,.pdf">
                            <small class="text-muted">Format: JPG, PNG, PDF — Maksimal 2MB</small>
                            @error('lampiran')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Kirim Sebagai Anonim --}}
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="is_anonim" id="is_anonim"
                                {{ old('is_anonim') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_anonim">
                                Kirim sebagai anonim (tanpa identitas)
                            </label>
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Kembali
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane me-1"></i> Kirim Pengaduan
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
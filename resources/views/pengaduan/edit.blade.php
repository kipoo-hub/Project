@extends('layouts.app')

@section('title', 'Edit Pengaduan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Pengaduan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengaduan.update', $pengaduan) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="form-label">Kategori Pengaduan</label>
                            <select name="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror">
                                <option value="">Pilih Kategori</option>
                                @foreach($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}" 
                                        {{ old('kategori_id', $pengaduan->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Judul Pengaduan</label>
                            <input type="text" name="judul" 
                                class="form-control @error('judul') is-invalid @enderror" 
                                value="{{ old('judul', $pengaduan->judul) }}">
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Isi Pengaduan</label>
                            <textarea name="isi" rows="5" 
                                class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $pengaduan->isi) }}</textarea>
                            @error('isi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lampiran</label>
                            @if($pengaduan->lampiran)
                                <div class="mb-2">
                                    <small class="text-muted">Lampiran saat ini:</small>
                                    <a href="{{ asset('storage/' . $pengaduan->lampiran) }}" target="_blank">
                                        Lihat Lampiran
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="lampiran" 
                                class="form-control @error('lampiran') is-invalid @enderror">
                            <small class="text-muted">Format: jpg, png, pdf (max 2MB). Kosongkan jika tidak ingin mengubah.</small>
                            @error('lampiran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" name="is_anonim" class="form-check-input" id="isAnonim" 
                                    {{ old('is_anonim', $pengaduan->is_anonim) ? 'checked' : '' }}>
                                <label class="form-check-label" for="isAnonim">Kirim sebagai anonim</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
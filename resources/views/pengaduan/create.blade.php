@extends('layouts.app')

@section('title', 'Buat Pengaduan Baru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Buat Pengaduan Baru</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="kategori_id">Kategori Pengaduan *</label>
                                <select name="kategori_id" id="kategori_id" class="form-select" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategoris as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>

                                @error('kategori_id')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Judul Pengaduan <span class="text-danger">*</span></label>
                                <input type="text" name="judul"
                                    class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}"
                                    placeholder="Masukkan judul pengaduan">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Isi Pengaduan <span class="text-danger">*</span></label>
                                <textarea name="isi" rows="5" class="form-control @error('isi') is-invalid @enderror"
                                    placeholder="Jelaskan detail pengaduan Anda...">{{ old('isi') }}</textarea>
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Lampiran</label>
                                <input type="file" name="lampiran"
                                    class="form-control @error('lampiran') is-invalid @enderror"
                                    accept=".jpg,.jpeg,.png,.pdf">
                                <small class="text-muted">Format: jpg, jpeg, png, pdf (max 2MB)</small>
                                @error('lampiran')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" name="is_anonim"
                                        class="form-check-input @error('is_anonim') is-invalid @enderror" id="isAnonim"
                                        {{ old('is_anonim') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isAnonim">
                                        Kirim sebagai anonim
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane"></i> Kirim Pengaduan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

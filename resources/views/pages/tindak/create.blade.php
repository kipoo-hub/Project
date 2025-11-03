@extends('layouts.guest.app')

@section('title', 'Tambah Tindak Lanjut')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tambah Tindak Lanjut</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6>Detail Pengaduan:</h6>
                        <p class="lead">{{ $pengaduan->judul }}</p>
                        <p>{{ Str::limit($pengaduan->isi, 200) }}</p>
                    </div>

                    <form action="{{ route('tindak.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">

                        <div class="mb-3">
                            <label class="form-label">Status Tindak Lanjut</label>
                            <select name="status" class="form-select @error('status') is-invalid @enderror">
                                <option value="">Pilih Status</option>
                                <option value="proses" {{ old('status') == 'proses' ? 'selected' : '' }}>Sedang Diproses</option>
                                <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="ditolak" {{ old('status') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Catatan Tindak Lanjut</label>
                            <textarea name="catatan" rows="4" class="form-control @error('catatan') is-invalid @enderror">{{ old('catatan') }}</textarea>
                            @error('catatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lampiran (opsional)</label>
                            <input type="file" name="lampiran" class="form-control @error('lampiran') is-invalid @enderror">
                            <small class="text-muted">Format: jpg, png, pdf (max 2MB)</small>
                            @error('lampiran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('pengaduan.show', $pengaduan) }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Tindak Lanjut
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

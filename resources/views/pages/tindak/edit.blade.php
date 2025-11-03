@extends('layouts.guest.app')

@section('title', 'Edit Tindak Lanjut')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Tindak Lanjut</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('tindak.update', $tindak) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Status Tindak Lanjut</label>
                            <select name="status" class="form-select @error('status') is-invalid @enderror">
                                <option value="">Pilih Status</option>
                                <option value="proses" {{ old('status', $tindak->status) == 'proses' ? 'selected' : '' }}>Sedang Diproses</option>
                                <option value="selesai" {{ old('status', $tindak->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="ditolak" {{ old('status', $tindak->status) == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Catatan Tindak Lanjut</label>
                            <textarea name="catatan" rows="4" class="form-control @error('catatan') is-invalid @enderror">{{ old('catatan', $tindak->catatan) }}</textarea>
                            @error('catatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lampiran</label>
                            @if($tindak->lampiran)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $tindak->lampiran) }}" target="_blank">
                                        Lihat Lampiran Saat Ini
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="lampiran" class="form-control @error('lampiran') is-invalid @enderror">
                            <small class="text-muted">Format: jpg, png, pdf (max 2MB). Kosongkan jika tidak ingin mengubah.</small>
                            @error('lampiran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('tindak.show', $tindak) }}" class="btn btn-secondary">
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

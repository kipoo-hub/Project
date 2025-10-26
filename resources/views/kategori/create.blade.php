@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tambah Kategori Baru</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori Pengaduan <span
                                        class="text-danger">*</span></label>
                                <select name="kategori_id" id="kategori_id"
                                    class="form-select @error('kategori_id') is-invalid @enderror" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('kategori_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">SLA (hari)</label>
                                    <input type="number" name="sla_hari" min="1"
                                        class="form-control @error('sla_hari') is-invalid @enderror"
                                        value="{{ old('sla_hari', 7) }}">
                                    @error('sla_hari')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label class="form-label">Prioritas</label>
                                    <select name="prioritas" class="form-select @error('prioritas') is-invalid @enderror">
                                        <option value="">-- Pilih Prioritas --</option>
                                        <option value="tinggi" {{ old('prioritas') == 'tinggi' ? 'selected' : '' }}>Tinggi
                                            (1-3 hari)</option>
                                        <option value="sedang" {{ old('prioritas') == 'sedang' ? 'selected' : '' }}>Sedang
                                            (4-7 hari)</option>
                                        <option value="rendah" {{ old('prioritas') == 'rendah' ? 'selected' : '' }}>Rendah
                                            (8-14 hari)</option>
                                    </select>
                                    @error('prioritas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="is_aktif" id="is_aktif" class="form-check-input"
                                    {{ old('is_aktif') ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_aktif">Aktif</label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.guest.app')

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
                                <label for="nama" class="form-label">Nama Kategori</label>
                                <select name="nama" id="nama" class="form-select" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($nama_kategori as $kategori)
                                        <option value="{{ $kategori }}">{{ $kategori }}</option>
                                    @endforeach
                                </select>
                                @error('nama')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sla_hari" class="form-label">SLA (Hari)</label>
                                <input type="number" name="sla_hari" class="form-control" min="1" max="30"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="prioritas" class="form-label">Prioritas</label>
                                <select name="prioritas" id="prioritas" class="form-select" required>
                                    @foreach ($prioritas_list as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" name="is_aktif" id="is_aktif" class="form-check-input">
                                <label for="is_aktif" class="form-check-label">Aktifkan kategori</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

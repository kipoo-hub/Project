@extends('layouts.app')

@section('title', 'Tambah Warga')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Warga</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warga.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col">
                        <label>No KTP</label>
                        <input type="text" name="no_ktp" class="form-control" required>
                    </div>
                    <div class="col">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="">Pilih</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Agama</label>
                        <input type="text" name="agama" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" required>
                    </div>
                    <div class="col">
                        <label>Telp</label>
                        <input type="text" name="telp" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('warga.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

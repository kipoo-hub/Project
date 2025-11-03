@extends('layouts.guest.app')

@section('content')
<div class="container">
    <h2>Tambah Warga</h2>
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
                <select name="jenis_kelamin" class="form-control">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
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

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('warga.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

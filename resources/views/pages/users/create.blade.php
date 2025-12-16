@extends('layouts.guest.app')

@section('title', 'Tambah User')

@section('content')
<div class="container py-4">
    <h3>Tambah User</h3>

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <input type="text" name="role" class="form-control">
        </div>

        {{-- Upload Foto Profil --}}
        <div class="mb-3">
            <label>Foto Profil</label>
            <input type="file" name="profile_picture" class="form-control" accept="image/*" onchange="previewImg(event)">
        </div>

        {{-- Preview Foto --}}
        <div class="mb-3">
            <img id="preview" src="#" alt="Preview Foto" style="display:none; max-width:120px;" class="rounded">
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
function previewImg(event) {
    const output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
}
</script>

@endsection

@extends('layouts.guest.app')

@section('title', 'Edit User')

@section('content')
<div class="container py-4">
    <h3>Edit User</h3>

    <form action="{{ route('users.update', $user->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password (Opsional)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <input type="text" name="role" value="{{ $user->role }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Foto Profil Saat Ini</label> <br>
            @if($user->profile_picture)
                <img src="{{ asset('uploads/users/' . $user->photo) }}"
                     alt="Foto Profil"
                     width="100"
                     class="rounded mb-2">
            @else
                <p class="text-muted">Belum ada foto.</p>
            @endif
        </div>

        <div class="mb-3">
            <label>Upload Foto Baru</label>
            <input type="file" name="photo" class="form-control">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

@extends('layouts.guest.app')

@section('title', 'Edit User')

@section('content')

<style>
    .card-modern {
        border-radius: 18px;
        border: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,.08);
    }

    .card-modern .card-header {
        background: linear-gradient(135deg,#4f8cf8,#6a4df5);
        border-top-left-radius: 18px;
        border-top-right-radius: 18px;
    }

    .avatar-preview {
        width: 95px;
        height: 95px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 6px 15px rgba(0,0,0,.12);
    }

    .upload-box {
        border: 2px dashed #d9dffa;
        border-radius: 14px;
        padding: 14px;
        background:#f8faff;
        cursor:pointer;
        transition:.25s;
    }
    .upload-box:hover {
        border-color:#6a4df5;
        background:#f1f4ff;
    }
</style>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card card-modern">
                <div class="card-header text-white d-flex justify-content-between">
                    <span><i class="bi bi-pencil-square me-2"></i> Edit User</span>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('users.update', $user->id) }}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- NAMA --}}
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name"
                                   value="{{ old('name', $user->name) }}"
                                   class="form-control @error('name') is-invalid @enderror">

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- EMAIL --}}
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email"
                                   value="{{ old('email', $user->email) }}"
                                   class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-3">
                            <label class="form-label">Password (opsional)</label>
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Kosongkan jika tidak diganti">

                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ROLE --}}
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="role"
                                    class="form-select @error('role') is-invalid @enderror">
                                <option value="admin"   {{ $user->role=='admin' ? 'selected' : '' }}>Admin</option>
                                <option value="petugas" {{ $user->role=='petugas' ? 'selected' : '' }}>Petugas</option>
                                <option value="warga"   {{ $user->role=='warga' ? 'selected' : '' }}>Warga</option>
                            </select>

                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- FOTO SAAT INI --}}
                        <div class="mb-3">
                            <label class="form-label">Foto Profil Saat Ini</label><br>

                            @php
                                $foto = $user->profile_picture
                                    ? asset('storage/'.$user->profile_picture)
                                    : asset('assets/img/default-user.png');
                            @endphp

                            <img id="currentPreview"
                                 src="{{ $foto }}"
                                 class="avatar-preview mb-2">
                        </div>

                        {{-- UPLOAD BARU --}}
                        <div class="mb-2">
                            <label class="form-label">Ganti Foto</label>

                            <label class="upload-box w-100 mb-0">
                                <input type="file"
                                       name="profile_picture"
                                       class="form-control border-0 p-0"
                                       accept="image/*"
                                       onchange="previewNew(event)">
                                <small class="text-muted">
                                    Biarkan kosong jika tidak ingin mengganti.
                                </small>
                            </label>
                        </div>

                        <img id="newPreview"
                             style="display:none"
                             class="avatar-preview mt-2">

                        <div class="d-flex justify-content-end mt-4 gap-2">
                            <a href="{{ route('users.index') }}" class="btn btn-light">Batal</a>
                            <button class="btn btn-primary">Simpan Perubahan</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
function previewNew(e){
    const img = document.getElementById('newPreview');
    img.src = URL.createObjectURL(e.target.files[0]);
    img.style.display = 'block';
}
</script>

@endsection

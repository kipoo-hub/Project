@extends('layouts.guest.app')

@section('title', 'Tambah User')

@section('content')

<style>
    .card-modern {
        border-radius: 18px;
        border: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,.08);
        backdrop-filter: blur(6px);
    }

    .card-modern .card-header {
        background: linear-gradient(135deg,#4f8cf8,#6a4df5);
        border-top-left-radius: 18px;
        border-top-right-radius: 18px;
    }

    .floating-label input,
    .floating-label select {
        padding-top: 18px;
        padding-bottom: 6px;
    }

    .floating-label label {
        font-size: .85rem;
        color: #6c757d;
    }

    .upload-box {
        border: 2px dashed #cfd7ff;
        border-radius: 14px;
        padding: 14px;
        transition: .25s;
        cursor: pointer;
        background: #f8faff;
    }

    .upload-box:hover {
        border-color:#6a4df5;
        background:#f1f4ff;
    }

    .avatar-preview {
        width: 95px;
        height: 95px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 6px 15px rgba(0,0,0,.12);
    }

    .btn-primary {
        border-radius: 30px;
    }
</style>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card card-modern">
                <div class="card-header text-white d-flex justify-content-between align-items-center">
                    <span class="fw-semibold">
                        <i class="bi bi-person-plus me-2"></i> Tambah User
                    </span>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- NAMA --}}
                        <div class="mb-3 floating-label">
                            <label>Nama</label>
                            <input type="text" name="name"
                                   value="{{ old('name') }}"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Masukkan nama lengkap">

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- EMAIL --}}
                        <div class="mb-3 floating-label">
                            <label>Email</label>
                            <input type="email" name="email"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="contoh@email.com">

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-3 floating-label">
                            <label>Password</label>
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Minimal 6 karakter">

                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ROLE --}}
                        <div class="mb-3 floating-label">
                            <label>Role</label>
                            <select name="role"
                                    class="form-select @error('role') is-invalid @enderror">
                                <option value="" disabled selected>Pilih role</option>
                                <option value="admin" {{ old('role')=='admin' ? 'selected' : '' }}>Admin</option>
                                <option value="petugas" {{ old('role')=='petugas' ? 'selected' : '' }}>Petugas</option>
                                <option value="warga" {{ old('role')=='warga' ? 'selected' : '' }}>Warga</option>
                            </select>

                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- FOTO --}}
                        <div class="mb-3">
                            <label class="form-label">Foto Profil</label>

                            <div class="d-flex gap-3 align-items-center">
                                <img id="preview"
                                     src="#"
                                     class="avatar-preview"
                                     style="display:none;">

                                <label class="w-100 upload-box mb-0">
                                    <input type="file"
                                           name="profile_picture"
                                           class="form-control border-0 p-0"
                                           accept="image/*"
                                           onchange="previewImg(event)">
                                    <small class="text-muted">Klik untuk memilih gambar (JPG/PNG — maks 2MB)</small>
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4 gap-2">
                            <a href="{{ route('users.index') }}" class="btn btn-light">
                                Batal
                            </a>

                            <button class="btn btn-primary">
                                Simpan pengguna
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
function previewImg(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.style.display = 'block';
}
</script>

@endsection

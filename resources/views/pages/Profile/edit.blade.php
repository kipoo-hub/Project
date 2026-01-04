@extends('layouts.guest.app')

@section('title', 'Edit Profile')

@section('content')

    <style>
        body {
            background: #f3f5fa;
        }

        .cover {
            height: 180px;
            background: linear-gradient(135deg, #4f7cff, #6f9dff);
            border-radius: 0 0 28px 28px;
            box-shadow: 0 14px 32px rgba(0, 0, 0, .08);
        }

        .profile-wrapper {
            max-width: 900px;
            margin: -70px auto 40px;
            padding: 0 20px;
        }

        .profile-box {
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .06);
            padding: 28px 30px;
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid #fff;
            box-shadow: 0 14px 30px rgba(0, 0, 0, .15);
        }

        .avatar-wrapper {
            position: relative;
            display: inline-block;
        }

        .edit-avatar-btn {
            position: absolute;
            bottom: 8px;
            right: 8px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #4f7cff;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: .8rem;
            cursor: pointer;
            box-shadow: 0 12px 24px rgba(0, 0, 0, .12);
        }

        .form-section-title {
            font-weight: 700;
            text-transform: uppercase;
            font-size: .8rem;
            letter-spacing: .6px;
            color: #666;
            margin-top: 18px;
            margin-bottom: 8px;
        }

        .btn-modern {
            border-radius: 14px;
            font-weight: 600;
        }
    </style>

    <div class="cover"></div>

    <div class="profile-wrapper">
        <div class="profile-box">

            <h4 class="fw-bold mb-3">Edit Profile</h4>

            <form action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="text-center mb-4">
                    <div class="avatar-wrapper">
                        <img class="avatar"
                            src="{{ $user->profile_picture ? asset('uploads/profile/' . $user->profile_picture) : asset('default.png') }}">

                        <label class="edit-avatar-btn">
                            <i class="fas fa-camera"></i>
                            <input type="file" name="profile_picture" class="d-none" accept="image/*">
                        </label>
                    </div>
                    <p class="text-muted mt-2" style="font-size:.85rem;">
                        Unggah foto JPG/PNG maksimal 2MB
                    </p>
                </div>

                <div class="form-section-title">Data Utama</div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $user->username ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>

                <div class="form-section-title">Kontak & Detail</div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input type="text" name="phone" class="form-control" value="{{ $user->phone ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="address" class="form-control" rows="2">{{ $user->address ?? '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="birth_date" class="form-control"
                        value="{{ $user->birth_date ? $user->birth_date->format('Y-m-d') : '' }}">
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-primary btn-modern">
                        Simpan Perubahan
                    </button>

                    <a href="{{ url('/profile') }}" class="btn btn-outline-secondary btn-modern">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

@endsection

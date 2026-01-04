@extends('layouts.guest.app')

@section('title', 'Profile Saya')

@section('content')

    <style>
        body {
            background: #f3f5fa;
        }

        .cover {
            height: 210px;
            background: linear-gradient(135deg, #4f7cff, #6f9dff);
            border-radius: 0 0 28px 28px;
            box-shadow: 0 14px 32px rgba(0, 0, 0, .08);
        }

        .profile-wrapper {
            max-width: 920px;
            margin: -80px auto 40px;
            padding: 0 20px;
        }

        .profile-box {
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .06);
            padding: 32px;
        }

        .avatar {
            position: relative;
            width: 132px;
            height: 132px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid #fff;
            box-shadow: 0 16px 30px rgba(0, 0, 0, .15);
            background: white;
        }

        .edit-avatar {
            position: absolute;
            right: 6px;
            bottom: 6px;
            background: #4f7cff;
            color: #fff;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .8rem;
            cursor: pointer;
            box-shadow: 0 10px 22px rgba(0, 0, 0, .12);
        }

        .role-badge {
            background: #eef2ff;
            color: #4f7cff;
            padding: 6px 12px;
            border-radius: 999px;
            font-size: .75rem;
            font-weight: 700;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 18px;
        }

        .stat-card {
            background: #f8f9ff;
            border-radius: 16px;
            padding: 16px;
            text-align: center;
        }

        .stat-card span {
            display: block;
            font-size: .8rem;
            color: #666;
        }

        .stat-card strong {
            font-size: 1.2rem;
            color: #344;
        }

        .section-box {
            margin-top: 22px;
            border-radius: 16px;
            border: 1px solid #ebeef5;
            padding: 18px 20px;
        }

        .section-box h6 {
            font-weight: 700;
            text-transform: uppercase;
            font-size: .8rem;
            color: #666;
            margin-bottom: 12px;
            letter-spacing: .6px;
        }

        .info-item {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            align-items: center;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-item i {
            width: 22px;
            margin-right: 10px;
            color: #4f7cff;
        }

        .profile-actions {
            display: flex;
            gap: 10px;
            margin-top: 18px;
        }

        .btn-modern {
            border-radius: 14px;
            font-weight: 600;
        }

        @media(max-width:768px) {
            .stats {
                grid-template-columns: 1fr 1fr 1fr;
            }

            .profile-header {
                text-align: center;
            }

            .profile-actions {
                flex-direction: column;
            }
        }
    </style>


    <div class="cover"></div>

    <div class="profile-wrapper">
        <div class="profile-box">

            <div class="d-flex align-items-center gap-3 profile-header">

                <div style="position:relative;">
                    <img class="avatar"
                        src="{{ $user->profile_picture ? asset('uploads/profile/' . $user->profile_picture) : asset('default.png') }}">

                    <a href="{{ url('/profile/edit') }}" class="edit-avatar">
                        <i class="fas fa-camera"></i>
                    </a>
                </div>

                <div>
                    <h4 class="fw-bold mb-1">{{ $user->name }}</h4>

                    @if ($user->role)
                        <span class="role-badge">
                            <i class="fas fa-user-shield me-1"></i>
                            {{ ucfirst($user->role) }}
                        </span>
                    @endif>

                    <div class="stats">
                        <div class="stat-card">
                            <strong>{{ $user->created_at->format('Y') }}</strong>
                            <span>Bergabung</span>
                        </div>
                        <div class="stat-card">
                            <strong>{{ $user->email_verified_at ? 'Ya' : 'Belum' }}</strong>
                            <span>Verifikasi</span>
                        </div>
                        <div class="stat-card">
                            <strong>#{{ $user->id }}</strong>
                            <span>User ID</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section-box mt-4">
                <h6>Informasi Akun</h6>

                <div class="info-item">
                    <i class="fas fa-id-card"></i>
                    Username: {{ $user->username ?? '—' }}
                </div>

                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    Email: {{ $user->email }}
                </div>

                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    No. HP: {{ $user->phone ?? '—' }}
                </div>

                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    Alamat: {{ $user->address ?? '—' }}
                </div>

                <div class="info-item">
                    <i class="fas fa-user-tag"></i>
                    Role: {{ ucfirst($user->role) ?? 'User' }}
                </div>

                <div class="info-item">
                    <i class="fas fa-shield-alt"></i>
                    Status Akun:
                    {{ $user->email_verified_at ? 'Terverifikasi' : 'Belum Verifikasi' }}
                </div>

                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    Terakhir Login:
                    {{ $user->last_login_at ? $user->last_login_at->format('d M Y H:i') : '—' }}
                </div>

                <div class="info-item">
                    <i class="fas fa-sync"></i>
                    Terakhir Diperbarui:
                    {{ $user->updated_at->format('d M Y H:i') }}
                </div>

                <div class="info-item">
                    <i class="fas fa-birthday-cake"></i>
                    Tanggal Lahir:
                    {{ $user->birth_date ? $user->birth_date->format('d M Y') : '—' }}
                </div>

                <div class="info-item">
                    <i class="fas fa-calendar-alt"></i>
                    Bergabung sejak: {{ $user->created_at->format('d M Y') }}
                </div>
            </div>


            <div class="profile-actions">
                <a href="{{ url('/profile/edit') }}" class="btn btn-primary btn-modern w-100">
                    <i class="fas fa-user-edit me-2"></i> Edit Profile
                </a>

                <form method="POST" action="{{ route('logout') }}" class="w-100">
                    @csrf
                    <button class="btn btn-outline-danger btn-modern w-100">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </button>
                </form>
            </div>

        </div>
    </div>

@endsection

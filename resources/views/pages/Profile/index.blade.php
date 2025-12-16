@extends('layouts.guest.app')

@section('title', 'Profile Saya')

@section('content')
<style>
    .profile-card {
        border-radius: 30px !important;
        background: #ffffff;
        padding: 50px 40px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    }

    .profile-avatar {
        width: 160px;
        height: 160px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid #e9efff;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .role-badge {
        background: #eef3ff;
        color: #3b5bfd;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        display: inline-block;
        margin-bottom: 10px;
    }

    .btn-modern {
        padding: 10px 28px;
        border-radius: 12px;
        font-weight: 500;
    }

    .btn-modern:hover {
        transform: translateY(-2px);
        transition: 0.2s;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="profile-card text-center">

                <h3 class="mb-4 fw-bold">Profile Saya</h3>

                {{-- Alert --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                {{-- Profile Picture --}}
                <img src="{{ $user->profile_picture
                    ? asset('uploads/profile/' . $user->profile_picture)
                    : asset('default.png') }}"
                    class="profile-avatar mb-3">

                {{-- User Info --}}
                <h4 class="mt-2 fw-semibold">{{ $user->name }}</h4>

                @if($user->role ?? false)
                <span class="role-badge">
                    <i class="fas fa-user-tag me-1"></i>
                    {{ ucfirst($user->role) }}
                </span>
                @endif

                <p class="text-muted">
                    <i class="fas fa-envelope me-2"></i>{{ $user->email }}
                </p>

                {{-- Buttons --}}
                <div class="d-flex justify-content-center gap-3 mt-4">

                    <a href="{{ url('/profile/edit') }}"
                        class="btn btn-primary btn-modern">
                        <i class="fas fa-edit me-2"></i>Edit Profile
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-modern">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

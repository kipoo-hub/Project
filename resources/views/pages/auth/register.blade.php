@extends('layouts.guest.auth')

@section('title', 'Daftar Akun')

@section('style')
<style>
    .register-card {
        backdrop-filter: blur(15px);
        background: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 40px;
        width: 450px;
        color: #fff;
        box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    }

    .register-card label {
        color: #fff;
        font-weight: 500;
    }

    .btn-register {
        border-radius: 10px;
        font-weight: 600;
        padding: 10px;
        font-size: 16px;
    }

    .text-link a {
        color: white;
        text-decoration: underline;
        font-weight: 600;
    }
</style>
@endsection

@section('content')
<div class="register-card">

    <h2 class="text-center mb-4 fw-bold">Daftar Akun</h2>

    {{-- Alert --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-light w-100 btn-register">
            Daftar Sekarang
        </button>

        <p class="mt-4 text-center text-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login disini</a>
        </p>
    </form>

</div>
@endsection

@extends('layouts.guest.auth')

@section('title', 'Login')

@section('style')
<style>
    .login-card {
        backdrop-filter: blur(15px);
        background: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 40px;
        width: 400px;
        color: #fff;
        box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    }
    .login-card label { color: #fff; }
    .btn-login { border-radius: 10px; font-weight: 600; }
</style>
@endsection

@section('content')
<div class="login-card">

    <h2 class="text-center mb-4">Login Akun</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-light w-100 btn-login">
            Login
        </button>

        <p class="mt-3 text-center">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-light fw-bold">Daftar disini</a>
        </p>
    </form>

</div>
@endsection

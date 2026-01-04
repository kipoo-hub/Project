@extends('layouts.guest.auth')

@section('title', 'Daftar Akun - Suara Rakyat')

@section('style')
<style>
    body{
        min-height:100vh;
        margin:0;
        display:flex;
        justify-content:center;
        align-items:center;
        background:linear-gradient(135deg,#0d6efd,#0746a7);
        font-family:'Segoe UI',sans-serif;
        padding:20px;
    }

    .register-wrapper{
        max-width:460px;
        width:100%;
    }

    .card-register{
        background:rgba(255,255,255,.9);
        backdrop-filter:blur(14px);
        border-radius:22px;
        padding:36px 32px;
        box-shadow:0 18px 60px rgba(0,0,0,.18);
        animation:fade .4s ease-out;
    }

    @keyframes fade{
        from{opacity:0;transform:translateY(15px)}
        to{opacity:1;transform:translateY(0)}
    }

    .logo-box{
        text-align:center;
        margin-bottom:16px;
    }

    .title{
        text-align:center;
        margin-bottom:22px;
    }

    .title h3{
        margin:0;
        color:#0d6efd;
        font-weight:700;
    }

    .title small{
        color:#6c757d;
    }

    .form-control{
        height:48px;
        border-radius:12px;
    }

    .btn-primary{
        width:100%;
        height:48px;
        border-radius:12px;
        font-weight:600;
        letter-spacing:.3px;
    }

    .btn-primary:hover{
        transform:translateY(-2px);
        box-shadow:0 10px 20px rgba(13,110,253,.25);
    }

    .footer-text{
        margin-top:20px;
        text-align:center;
        color:#6c757d;
    }

    .footer-text a{
        color:#0d6efd;
        font-weight:600;
        text-decoration:none;
    }
</style>
@endsection


@section('content')

<div class="register-wrapper">

    <div class="card-register">

        <div class="logo-box">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height:70px;">
        </div>

        <div class="title">
            <h3>Buat Akun Baru</h3>
            <small>Isi data di bawah untuk mendaftar</small>
        </div>

        {{-- Alerts --}}
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
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button class="btn btn-primary mt-2">
                Daftar
            </button>

            <p class="footer-text">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login di sini</a>
            </p>

        </form>

    </div>

</div>

@endsection

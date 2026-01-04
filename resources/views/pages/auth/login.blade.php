@extends('layouts.guest.auth')

@section('title', 'Login - Suara Rakyat')

@section('style')
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #0d6efd, #0746a7);
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }

        .login-wrapper {
            max-width: 420px;
            width: 100%;
        }

        .card-login {
            background: rgba(255, 255, 255, .9);
            backdrop-filter: blur(14px);
            border-radius: 22px;
            padding: 38px 34px;
            box-shadow: 0 18px 60px rgba(0, 0, 0, .18);
            animation: fade .4s ease-out;
        }

        @keyframes fade {
            from {
                opacity: 0;
                transform: translateY(15px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .title {
            text-align: center;
            margin-bottom: 26px;
        }

        .title h3 {
            margin: 0;
            color: #0d6efd;
            font-weight: 700;
        }

        .title small {
            color: #6c757d;
        }

        .form-control {
            height: 48px;
            border-radius: 12px;
        }

        .btn-primary {
            width: 100%;
            height: 48px;
            border-radius: 12px;
            font-weight: 600;
            letter-spacing: .3px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, .25);
        }

        .footer-text {
            margin-top: 24px;
            text-align: center;
            color: #6c757d;
        }

        .footer-text a {
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
        }

        .forgot {
            text-align: right;
            margin-top: 6px;
        }

        .forgot a {
            font-size: 13px;
            text-decoration: none;
            color: #6c757d;
        }
    </style>
@endsection


@section('content')

    <div class="login-wrapper">

        <div class="card-login">
            <div class="logo-box" style="text-align:center; margin-bottom:18px;">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height:72px; width:auto;">
            </div>
            <div class="title">
                <h3>Masuk ke Akun</h3>
                <small>Gunakan email & password Anda</small>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required
                        autofocus>
                </div>

                <div class="mb-2">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>



                <button class="btn btn-primary mt-3">
                    Login
                </button>
            </form>

            <p class="footer-text">
                Belum punya akun?
                <a href="{{ route('register') }}">Daftar sekarang</a>
            </p>

        </div>
    </div>

@endsection

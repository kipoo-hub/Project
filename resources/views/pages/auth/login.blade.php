@extends('layouts.guest.auth')

@section('title', 'Login - Suara Rakyat')

@section('style')
    <style>
        :root {
            --primary-blue: #0d6efd;
            --dark-blue: #0746a7;
            --light-blue: #cfe2ff;
            --white: #ffffff;
            --gray-light: #e9ecef;
            --text-dark: #333333;
            --text-gray: #6c757d;
            --border-color: #dee2e6;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 440px;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card {
            background: var(--white);
            border-radius: 24px;
            padding: 45px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            position: relative;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-blue), var(--dark-blue));
        }

        /* Header Section */
        .header-section {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo-container {
            margin-bottom: 15px;
        }

        .logo {
            height: 70px;
            width: auto;
            margin-bottom: 12px;
        }

        .site-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-blue);
            margin: 0 0 5px 0;
            line-height: 1.2;
        }

        .site-subtitle {
            font-size: 15px;
            color: var(--text-gray);
            margin: 0;
            font-weight: 400;
        }

        /* Welcome Section */
        .welcome-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .welcome-title {
            font-size: 22px;
            color: var(--text-dark);
            margin: 0 0 8px 0;
            font-weight: 600;
        }

        .welcome-subtitle {
            font-size: 15px;
            color: var(--text-gray);
            margin: 0;
            line-height: 1.4;
        }

        /* Form Styling */
        .form-container {
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.3px;
        }

        .input-wrapper {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .input-wrapper:focus-within {
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
        }

        .form-input {
            width: 100%;
            height: 52px;
            padding: 0 20px 0 50px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 15px;
            color: var(--text-dark);
            background: var(--white);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            background: #f8f9fa;
        }

        .form-input::placeholder {
            color: #adb5bd;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-gray);
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .input-wrapper:focus-within .input-icon {
            color: var(--primary-blue);
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-gray);
            cursor: pointer;
            padding: 6px;
            font-size: 16px;
            transition: color 0.3s ease;
            border-radius: 50%;
        }

        .password-toggle:hover {
            color: var(--primary-blue);
            background: #f8f9fa;
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            height: 52px;
            background: var(--primary-blue);
            color: var(--white);
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 5px;
            letter-spacing: 0.5px;
        }

        .login-btn:hover {
            background: var(--dark-blue);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.25);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        /* Demo Section */
        .demo-section {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 18px;
            margin: 25px 0 30px 0;
            text-align: center;
            border: 1px dashed #dee2e6;
        }

        .demo-label {
            display: block;
            color: var(--text-gray);
            font-size: 14px;
            margin-bottom: 12px;
            font-weight: 500;
        }

        .demo-btn {
            background: #6c757d;
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .demo-btn:hover {
            background: #5a6268;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(108, 117, 125, 0.2);
        }

        /* Register Section */
        .register-section {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid var(--border-color);
        }

        .register-text {
            color: var(--text-gray);
            font-size: 15px;
            margin: 0;
        }

        .register-link {
            color: var(--primary-blue);
            font-weight: 600;
            text-decoration: none;
            margin-left: 6px;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .register-link:hover {
            color: var(--dark-blue);
        }

        .register-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-blue);
            transition: width 0.3s ease;
        }

        .register-link:hover::after {
            width: 100%;
        }

        /* Alerts */
        .alert {
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 22px;
            font-size: 14px;
            animation: slideIn 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            line-height: 1.4;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-10px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .alert-success {
            background: #d1e7dd;
            border: 1px solid #badbcc;
            color: #0f5132;
        }

        .alert-danger {
            background: #f8d7da;
            border: 1px solid #f5c2c7;
            color: #842029;
        }

        .alert-icon {
            font-size: 16px;
            margin-top: 1px;
        }

        /* Loading State */
        .btn-loading {
            position: relative;
            pointer-events: none;
            padding-right: 40px;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            right: 15px;
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .login-card {
                padding: 35px 25px;
            }

            .logo {
                height: 60px;
            }

            .site-title {
                font-size: 24px;
            }

            .welcome-title {
                font-size: 20px;
            }

            .form-input {
                height: 48px;
                font-size: 14px;
            }

            .login-btn {
                height: 48px;
                font-size: 15px;
            }
        }

        @media (max-width: 400px) {
            .login-card {
                padding: 30px 20px;
            }

            .site-title {
                font-size: 22px;
            }

            .welcome-title {
                font-size: 18px;
            }

            .demo-btn {
                width: 100%;
                justify-content: center;
            }
        }

        /* Custom Alert for JS */
        .custom-alert {
            position: fixed;
            top: 25px;
            right: 25px;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 14px;
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideInRight 0.3s ease;
            max-width: 350px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
@endsection

@section('content')

    <div class="login-container">
        <div class="login-card">
            <!-- Welcome -->
            <div class="welcome-section">
                <h2 class="welcome-title">Login ke Akun</h2>
                <p class="welcome-subtitle">Masukkan kredensial Anda untuk melanjutkan</p>
            </div>

            <!-- Messages -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check-circle alert-icon"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle alert-icon"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <!-- Login Form -->
            <div class="form-container">
                <form method="POST" action="{{ url('/login') }}" id="loginForm">
                    @csrf

                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="contoh@email.com" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" id="password" name="password" class="form-input"
                                placeholder="Masukkan password" required>
                            <button type="button" class="password-toggle" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="login-btn" id="loginButton">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Login</span>
                    </button>
                </form>
            </div>

            <!-- Register Link -->
            <div class="register-section">
                <p class="register-text">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="register-link">Daftar disini</a>
                </p>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                const icon = this.querySelector('i');
                icon.className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
            });

            // Form submission
            const loginForm = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');

            loginForm.addEventListener('submit', function(e) {
                // Add loading state
                loginButton.innerHTML = '<span>Memproses...</span>';
                loginButton.classList.add('btn-loading');
                loginButton.disabled = true;

                // Basic validation
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value.trim();

                if (!email || !password) {
                    e.preventDefault();
                    showMessage('Harap isi semua field yang diperlukan', 'error');
                    resetButton();
                    return;
                }

                if (!isValidEmail(email)) {
                    e.preventDefault();
                    showMessage('Format email tidak valid. Contoh: nama@email.com', 'error');
                    resetButton();
                    return;
                }

                // If validation passes, form will submit normally
            });

            // Auto-focus on email field
            document.getElementById('email').focus();
        });

        // Fill demo credentials
        function fillDemoCredentials() {
            const emailField = document.getElementById('email');
            const passwordField = document.getElementById('password');

            emailField.value = 'admin@suararakyat.com';
            passwordField.value = 'password';

            // Animate the input fields
            emailField.style.transform = 'scale(1.02)';
            passwordField.style.transform = 'scale(1.02)';

            setTimeout(() => {
                emailField.style.transform = 'scale(1)';
                passwordField.style.transform = 'scale(1)';
            }, 200);

            showMessage('Akun demo telah diisi. Silakan klik tombol Login.', 'success');
        }

        // Show message function
        function showMessage(message, type = 'info') {
            // Remove existing message
            const existingAlert = document.querySelector('.custom-alert');
            if (existingAlert) existingAlert.remove();

            // Colors based on type
            const colors = {
                success: {
                    bg: '#d1e7dd',
                    border: '#badbcc',
                    text: '#0f5132',
                    icon: 'check-circle'
                },
                error: {
                    bg: '#f8d7da',
                    border: '#f5c2c7',
                    text: '#842029',
                    icon: 'exclamation-triangle'
                },
                info: {
                    bg: '#cff4fc',
                    border: '#b6effb',
                    text: '#055160',
                    icon: 'info-circle'
                }
            };

            const color = colors[type] || colors.info;

            // Create new alert
            const alert = document.createElement('div');
            alert.className = 'custom-alert';
            alert.innerHTML = `
            <i class="fas fa-${color.icon}" style="color: ${color.text};"></i>
            <span style="color: ${color.text};">${message}</span>
        `;

            // Apply styles
            alert.style.background = color.bg;
            alert.style.border = `1px solid ${color.border}`;

            document.body.appendChild(alert);

            // Auto remove after 4 seconds
            setTimeout(() => {
                if (alert.parentElement) {
                    alert.style.opacity = '0';
                    alert.style.transform = 'translateX(20px)';
                    alert.style.transition = 'all 0.3s ease';
                    setTimeout(() => {
                        if (alert.parentElement) alert.remove();
                    }, 300);
                }
            }, 4000);
        }

        // Reset button state
        function resetButton() {
            const loginButton = document.getElementById('loginButton');
            loginButton.innerHTML = '<i class="fas fa-sign-in-alt"></i><span>Login</span>';
            loginButton.classList.remove('btn-loading');
            loginButton.disabled = false;
        }

        // Email validation
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl/Cmd + Enter to submit form
            if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('loginForm').dispatchEvent(new Event('submit'));
            }
        });
    </script>
@endsection

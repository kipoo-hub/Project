<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2">

    <title>@yield('title', 'Suara Rakyat - Sistem Pengaduan & Aspirasi')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Custom Styles for Floating WhatsApp Button -->
    <style>
        /* Floating WhatsApp Button – Premium Style */
        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: 1000;
            animation: floatAnim 3s ease-in-out infinite;
        }

        /* Button Style */
        .whatsapp-btn {
            display: flex;
            justify-content: center;
            align-items: center;

            width: 65px;
            height: 65px;
            background: linear-gradient(135deg, #25d366, #21bd5a);
            color: white;

            border-radius: 50%;
            font-size: 32px;
            text-decoration: none;

            box-shadow:
                0 6px 18px rgba(0, 0, 0, .25),
                0 0 12px rgba(37, 211, 102, .5);

            transition: .3s ease-in-out;
            backdrop-filter: blur(5px);
        }

        /* Hover Effect */
        .whatsapp-btn:hover {
            background: linear-gradient(135deg, #1ebe5d, #17a74e);
            transform: scale(1.12) translateY(-3px);

            box-shadow:
                0 10px 25px rgba(0, 0, 0, .3),
                0 0 18px rgba(37, 211, 102, .7);
        }

        /* Icon adjustment */
        .whatsapp-btn i {
            margin-top: 2px;
        }

        /* Floating animation (naik turun halus) */
        @keyframes floatAnim {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>

    @stack('css')
</head>

<body>
    @include('layouts.guest.navbar')

    <main class="py-4">
        <div class="container">
            @include('layouts.guest.alert')
            @yield('content')
        </div>
    </main>

    @include('layouts.guest.footer')

    <!-- Floating WhatsApp Button -->
    <div id="whatsapp-float" class="whatsapp-float">
        <a href="https://wa.me/6282292707434?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20Anda."
            target="_blank" class="whatsapp-btn" title="Hubungi via WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>


    @stack('js')
</body>

</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sicepu - Sistem Pengaduan & Aspirasi')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Custom Styles for Floating WhatsApp Button -->
    <style>
        /* Styling untuk Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000; /* Pastikan di atas elemen lain */
        }

        .whatsapp-btn {
            display: inline-block;
            width: 60px;
            height: 60px;
            background-color: #25d366; /* Warna hijau WhatsApp */
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            font-size: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-btn:hover {
            background-color: #128c7e; /* Warna lebih gelap saat hover */
            transform: scale(1.1); /* Efek zoom saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }

        .whatsapp-btn i {
            margin-top: 5px; /* Penyesuaian posisi ikon */
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



    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom Script for Floating WhatsApp Button -->
    

    @stack('js')
</body>
</html>

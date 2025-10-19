<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sicepu - Pengaduan & Aspirasi Rakya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/main.js') }}"></script>
</head>

<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Sicepu. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
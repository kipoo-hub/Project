<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us - Sicepu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')

    <div class="container py-5">
        <h1 class="display-4 mb-4">About Us</h1>
        <p class="mb-4">Sicepu is a platform dedicated to receiving public complaints and aspirations. Our mission is to ensure that every voice is heard and every issue is addressed promptly and professionally.</p>
        <p class="mb-4">We believe in transparency, accountability, and the importance of community engagement. Our team is committed to providing a reliable channel for citizens to express their concerns and suggestions for improvement.</p>
        <h2 class="mb-3">Our Vision</h2>
        <p class="mb-4">To create a society where every citizen feels empowered to voice their opinions and contribute to the betterment of public services.</p>
        <h2 class="mb-3">Our Mission</h2>
        <p class="mb-4">To facilitate effective communication between the public and government agencies, ensuring that complaints and aspirations are addressed in a timely manner.</p>
    </div>

    @include('layouts.footer')

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
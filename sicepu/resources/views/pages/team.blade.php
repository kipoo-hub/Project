<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Team - Sicepu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container py-5">
        <div class="text-center mx-auto pb-5">
            <h4 class="text-primary">Tim Kami</h4>
            <h1 class="display-4 mb-4">Kenali Anggota Tim Sicepu</h1>
            <p class="mb-0">Tim kami siap menerima dan menindaklanjuti pengaduan serta aspirasi Anda dengan profesionalisme dan empati.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/kipo.jpg') }}" class="img-fluid rounded-top w-100" alt="Kipo">
                        <div class="team-icon"></div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Kipo</h4>
                            <p class="mb-0">Koordinator Tim</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/johan.jpg') }}" class="img-fluid rounded-top w-100" alt="Johan">
                        <div class="team-icon"></div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Johan</h4>
                            <p class="mb-0">Penyelaras Operasional</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/there.jpg') }}" class="img-fluid rounded-top w-100" alt="There">
                        <div class="team-icon"></div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">There</h4>
                            <p class="mb-0">Analis & Verifikator</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/vera.jpg') }}" class="img-fluid rounded-top w-100" alt="Vera">
                        <div class="team-icon"></div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Vera</h4>
                            <p class="mb-0">Pengelola Kasus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>
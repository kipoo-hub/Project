@extends('layouts.guest.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow rounded-4">
                <div class="card-body">

                    <h3 class="text-center mb-4">Edit Profile</h3>

                    <form action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="text-center mb-3">
                            <img src="{{ $user->profile_picture
                                ? asset('uploads/profile/' . $user->profile_picture)
                                : asset('default.png') }}"
                                class="rounded-circle shadow"
                                width="120" height="120"
                                style="object-fit:cover;">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto Profil</label>
                            <input type="file" name="profile_picture" class="form-control">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">
                                Simpan Perubahan
                            </button>
                            <a href="{{ url('/profile') }}" class="btn btn-secondary">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.guest.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow rounded-4">
                <div class="card-body text-center">

                    <h3 class="mb-3">Profile Saya</h3>

                    {{-- Alert --}}
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <img src="{{ $user->profile_picture
                        ? asset('uploads/profile/' . $user->profile_picture)
                        : asset('default.png') }}"
                        class="rounded-circle shadow mb-3"
                        width="150" height="150"
                        style="object-fit: cover;">

                    <h4 class="mt-2">{{ $user->name }}</h4>
                    <p class="text-muted">{{ $user->email }}</p>

                    <a href="{{ url('/profile/edit') }}" class="btn btn-primary mt-3">
                        Edit Profile
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

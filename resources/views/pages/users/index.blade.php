@extends('layouts.guest.app')

@section('title', 'Data User')

@section('content')
<div class="container py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold mb-0">Data User</h3>
        <a href="{{ route('users.create') }}" class="btn btn-primary rounded-pill px-4">
            <i class="fa fa-plus me-1"></i> Tambah User
        </a>
    </div>

    {{-- ALERT SUCCESS --}}
    @if(session('success'))
        <div class="alert alert-success shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- GRID USER --}}
    <div class="row g-4">

        @forelse($users as $user)
        <div class="col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm h-100 rounded-4">

                <div class="card-body text-center">

                    {{-- FOTO USER --}}
                    @php
                        $foto = $user->profile_picture
                            ? asset('uploads/users/'.$user->profile_picture)
                            : asset('assets/img/default-user.png');
                    @endphp

                    <img
                        src="{{ $foto }}"
                        class="rounded-circle shadow-sm mb-3"
                        alt="Foto {{ $user->name }}"
                        style="width: 90px; height: 90px; object-fit: cover;">

                    {{-- NAMA --}}
                    <h5 class="mb-1 fw-semibold">{{ $user->name }}</h5>

                    {{-- EMAIL --}}
                    <p class="text-muted small mb-2">{{ $user->email }}</p>

                    {{-- ROLE --}}
                    <span class="badge bg-info mb-3 px-3 py-2">
                        {{ $user->role ?? 'Tidak ada role' }}
                    </span>

                    {{-- BUTTON --}}
                    <div class="d-flex justify-content-center gap-2">

                        <a href="{{ route('users.edit', $user->id) }}"
                           class="btn btn-warning btn-sm px-3">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('users.destroy', $user->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin hapus user ini?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm px-3">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        @empty

        {{-- TIDAK ADA DATA --}}
        <div class="text-center mt-5">
            <img src="{{ asset('assets/img/empty.png') }}" width="130" class="mb-3 opacity-75">
            <h6 class="text-muted">Belum ada user terdaftar.</h6>
        </div>

        @endforelse

    </div>

    {{-- PAGINATION --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $users->links() }}
    </div>

</div>
@endsection

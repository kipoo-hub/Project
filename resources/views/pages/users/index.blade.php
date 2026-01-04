@extends('layouts.guest.app')

@section('title', 'Data User')

@section('content')
    <div class="container py-4">

        {{-- HEADER --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
            <div>
                <h3 class="fw-bold mb-1">Data User</h3>
                <small class="text-muted">Kelola akun dan perannya</small>
            </div>

            <a href="{{ route('users.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
                <i class="fa fa-plus me-1"></i> Tambah User
            </a>
        </div>

        {{-- SEARCH (opsional, kalau belum ada abaikan dulu) --}}
        <form class="mb-4">
            <input type="text" name="search" class="form-control form-control-lg rounded-4 shadow-sm"
                placeholder="🔍 Cari nama atau email…" value="{{ request('search') }}">
        </form>

        {{-- ALERT --}}
        @if (session('success'))
            <div class="alert alert-success shadow-sm rounded-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- GRID USER --}}
        <div class="row g-4">
            @forelse($users as $user)
                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 rounded-4 user-card">

                        <div class="card-body text-center">

                            {{-- FOTO --}}
                            @php
                                $foto = $user->profile_picture
                                    ? asset('storage/' . $user->profile_picture)
                                    : asset('assets/img/default-user.png');
                            @endphp



                            <img src="{{ $foto }}" class="rounded-circle shadow-sm mb-3"
                                style="width: 95px; height: 95px; object-fit: cover" loading="lazy"
                                alt="Foto {{ $user->name }}">

                            {{-- NAMA --}}
                            <h5 class="fw-semibold mb-0">{{ $user->name }}</h5>

                            {{-- EMAIL --}}
                            <p class="text-muted small mb-2">{{ $user->email }}</p>

                            {{-- ROLE --}}
                            <span class="badge role-badge mb-3">
                                {{ ucfirst($user->role ?? 'Tidak ada role') }}
                            </span>

                            {{-- ACTION --}}
                            <div class="d-flex justify-content-center gap-2 mt-2">

                                <a href="{{ route('users.edit', $user->id) }}"
                                    class="btn btn-outline-warning btn-sm rounded-pill px-3">
                                    <i class="fa fa-edit me-1"></i>Edit
                                </a>

                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus user ini?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                        <i class="fa fa-trash me-1"></i>Hapus
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            @empty

                <div class="text-center mt-5">
                    <img src="{{ asset('assets/img/empty.png') }}" width="140" class="mb-3 opacity-75">
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

@push('style')
    <style>
        .user-card {
            transition: .25s ease;
            border-radius: 22px !important;
        }

        .user-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 35px rgba(0, 0, 0, .08);
        }

        .role-badge {
            background: linear-gradient(120deg, #0d6efd, #6ea8fe);
            padding: .45rem .9rem;
            border-radius: 999px;
            color: #fff;
            font-weight: 600;
            font-size: .75rem;
        }

        .form-control-lg {
            border-radius: 18px;
        }
    </style>
@endpush

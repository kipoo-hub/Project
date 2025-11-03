@extends('layouts.guest.app')

@section('title', 'Daftar Pengaduan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Pengaduan & Aspirasi</h2>
        <a href="{{ route('pengaduan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Buat Pengaduan
        </a>
    </div>

    @include('layouts.guest.alert')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pengaduans as $pengaduan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengaduan->kategori->nama }}</td>
                            <td>{{ $pengaduan->judul }}</td>
                            <td>@include('pengaduan._status')</td>
                            <td>{{ $pengaduan->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('pengaduan.show', $pengaduan) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @if($pengaduan->status == 'draft')
                                <a href="{{ route('pengaduan.edit', $pengaduan) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('pengaduan.destroy', $pengaduan) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada pengaduan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

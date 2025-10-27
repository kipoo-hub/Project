@extends('layouts.app')

@section('title', 'Tindak Lanjut Pengaduan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Tindak Lanjut</h2>
    </div>

    @include('partial.alert')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengaduan</th>
                            <th>Status</th>
                            <th>Catatan</th>
                            <th>Petugas</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tindak as $tindak)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="{{ route('pengaduan.show', $tindak->pengaduan) }}">
                                    {{ Str::limit($tindak->pengaduan->judul, 30) }}
                                </a>
                            </td>
                            <td>
                                <span class="badge bg-{{ $tindak->status_color }}">
                                    {{ $tindak->status }}
                                </span>
                            </td>
                            <td>{{ Str::limit($tindak->catatan, 50) }}</td>
                            <td>{{ $tindak->petugas->name }}</td>
                            <td>{{ $tindak->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('tindak.show', $tindak) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('tindak.edit', $tindak) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada tindak lanjut</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Kategori Pengaduan')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Kategori Pengaduan</h2>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Tambah Kategori
            </a>
        </div>

        {{-- Dropdown Pilihan Kategori --}}
        <div class="mb-4">
            <label for="pilihKategori" class="form-label">Pilih Kategori Pengaduan</label>
            <select id="kategori_id" class="form-select" onchange="if(this.value) window.location.href=this.value">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($kategoris as $item)
                    <option value="{{ route('kategori.show', $item->kategori_id) }}">
                        {{ $item->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tampilkan notifikasi --}}
        @include('layouts.partial.alert')

        {{-- Tabel Daftar Kategori --}}
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Jumlah Pengaduan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($kategoris as $kategori)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->nama }}</td>
                                    <td>{{ Str::limit($kategori->deskripsi, 50) }}</td>
                                    <td>{{ $kategori->pengaduans_count }}</td>
                                    <td>
                                        <a href="{{ route('kategori.show', $kategori->kategori_id) }}"
                                            class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('kategori.edit', $kategori->kategori_id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('kategori.destroy', $kategori->kategori_id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin hapus kategori ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Belum ada kategori</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

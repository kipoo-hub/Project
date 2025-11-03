@extends('layouts.guest.app')

@section('title', 'Detail Tindak Lanjut')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail Tindak Lanjut</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6 class="fw-bold">Pengaduan Terkait:</h6>
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5>{{ $tindak->pengaduan->judul }}</h5>
                                <p class="mb-0">{{ Str::limit($tindak->pengaduan->isi, 200) }}</p>
                                <a href="{{ route('pengaduan.show', $tindak->pengaduan) }}" class="btn btn-link ps-0">
                                    Lihat Detail Pengaduan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Status:</h6>
                        <span class="badge bg-{{ $tindak->status_color }} fs-6">{{ $tindak->status }}</span>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Catatan Tindak Lanjut:</h6>
                        <p>{{ $tindak->catatan }}</p>
                    </div>

                    @if($tindak->lampiran)
                    <div class="mb-4">
                        <h6 class="fw-bold">Lampiran:</h6>
                        <a href="{{ asset('storage/' . $tindak->lampiran) }}" target="_blank" class="btn btn-outline-primary">
                            <i class="fas fa-file-download"></i> Unduh Lampiran
                        </a>
                    </div>
                    @endif

                    <div class="mb-4">
                        <h6 class="fw-bold">Informasi Tambahan:</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Petugas</dt>
                            <dd class="col-sm-8">{{ $tindak->petugas->name }}</dd>

                            <dt class="col-sm-4">Tanggal Dibuat</dt>
                            <dd class="col-sm-8">{{ $tindak->created_at->format('d/m/Y H:i') }}</dd>

                            <dt class="col-sm-4">Terakhir Diupdate</dt>
                            <dd class="col-sm-8">{{ $tindak->updated_at->format('d/m/Y H:i') }}</dd>
                        </dl>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('tindak.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                        <a href="{{ route('tindak.edit', $tindak) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



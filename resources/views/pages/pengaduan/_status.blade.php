@php
    $status = $pengaduan->status ?? null;
@endphp

@if($status === 'selesai')
    <span class="badge bg-success">Selesai</span>
@elseif($status === 'proses')
    <span class="badge bg-warning text-dark">Dalam Proses</span>
@elseif($status === 'pending')
    <span class="badge bg-secondary">Pending</span>
@else
    <span class="badge bg-dark">{{ $status ?? 'Tidak diketahui' }}</span>
@endif

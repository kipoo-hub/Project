@if($pengaduan->status == 'draft')
    <span class="badge bg-secondary">Draft</span>
@elseif($pengaduan->status == 'terkirim')
    <span class="badge bg-info">Terkirim</span>
@elseif($pengaduan->status == 'proses')
    <span class="badge bg-warning">Diproses</span>
@elseif($pengaduan->status == 'selesai')
    <span class="badge bg-success">Selesai</span>
@elseif($pengaduan->status == 'ditolak')
    <span class="badge bg-danger">Ditolak</span>
@endif
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TindakLanjut extends Model
{
    protected $table      = 'tindak_lanjut';
    protected $primaryKey = 'tindak_id';
    protected $fillable   = [
        'pengaduan_id',
        'petugas',
        'aksi',
        'catatan',
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id', 'pengaduan_id');
    }

    public function scopeFilter($query, $filters)
    {
        // Filter berdasarkan nama petugas (exact atau partial)
        if (! empty($filters['petugas'])) {
            $query->where('petugas', 'LIKE', '%' . $filters['petugas'] . '%');
        }

        // Filter berdasarkan aksi tindak lanjut
        if (! empty($filters['aksi'])) {
            $query->where('aksi', 'LIKE', '%' . $filters['aksi'] . '%');
        }

        // Filter berdasarkan catatan
        if (! empty($filters['catatan'])) {
            $query->where('catatan', 'LIKE', '%' . $filters['catatan'] . '%');
        }

        // Filter berdasarkan judul pengaduan (relasi)
        if (! empty($filters['pengaduan'])) {
            $query->whereHas('pengaduan', function ($q) use ($filters) {
                $q->where('judul', 'LIKE', '%' . $filters['pengaduan'] . '%');
            });
        }

        // Filter berdasarkan tanggal dibuat
        if (! empty($filters['date_from'])) {
            $query->whereDate('created_at', '>=', $filters['date_from']);
        }

        if (! empty($filters['date_to'])) {
            $query->whereDate('created_at', '<=', $filters['date_to']);
        }

        return $query;
    }

    

}

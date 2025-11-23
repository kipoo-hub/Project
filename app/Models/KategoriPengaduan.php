<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPengaduan extends Model
{
    protected $table = 'kategori_pengaduan';
    protected $primaryKey = 'kategori_id';

    protected $fillable = [
        'nama',
        'prioritas',
        'is_aktif',
        'Pelayanan',
        'Teknis',
        'Administrasi',
        'Keamanan',
        'Kebersihan'
    ];

    // Relasi ke tabel pengaduan
    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class, 'kategori_id');
    }
    public function scopeFilter($query, $filters)
    {
        // Filter berdasarkan nama kategori
        if (!empty($filters['nama'])) {
            $query->where('nama', 'like', '%' . $filters['nama'] . '%');
        }

        // Filter berdasarkan prioritas
        if (!empty($filters['prioritas'])) {
            $query->where('prioritas', $filters['prioritas']);
        }

        // Filter berdasarkan status aktif
        if (isset($filters['is_aktif'])) {
            $query->where('is_aktif', $filters['is_aktif']);
        }

        return $query;
    }

}

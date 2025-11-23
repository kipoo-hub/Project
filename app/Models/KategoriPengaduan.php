<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPengaduan extends Model
{
    protected $table = 'kategori_pengaduan';
    protected $primaryKey = 'kategori_id';

    protected $fillable = [
        'nama',
        'prioritas', // kalau kamu pakai field ini di orderBy
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

    
}

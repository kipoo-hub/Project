<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenilaianLayanan extends Model
{
    protected $table = 'penilaian_layanan';
    protected $primaryKey = 'penilaian_id';

    protected $fillable = [
        'pengaduan_id',
        'rating',
        'komentar'
    ];

    /**
     * Relasi ke tabel pengaduan
     * Setiap penilaian hanya milik 1 pengaduan
     */
    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id', 'pengaduan_id');
    }
}

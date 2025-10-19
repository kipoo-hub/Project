<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'pengaduan_id';
    protected $fillable = [
        'nomor_tiket',
        'warga_id',
        'kategori_id',
        'judul',
        'deskripsi',
        'status',
        'lokasi_text',
        'rt',
        'rw'
    ];
}

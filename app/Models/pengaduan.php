<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\TindakLanjut;

class Pengaduan extends Model
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
        'rw',
        'lampiran',
        'is_anonim',
    ];

    /**
     * Memberitahu Laravel cara menemukan model ini di route.
     * (Ini sudah benar dari sebelumnya)
     */
    public function getRouteKeyName()
    {
        return 'pengaduan_id';
    }


    public function kategori()
    {
        return $this->belongsTo(KategoriPengaduan::class, 'kategori_id');
    }

        public function warga()
    {
        return $this->belongsTo(User::class, 'warga_id');
    }


    public function tindakLanjuts()
    {
       
        return $this->hasMany(TindakLanjut::class, 'pengaduan_id');
    }
}

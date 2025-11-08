<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// TAMBAHKAN DUA BARIS 'USE' INI
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

    /**
     * Relasi ke Kategori Pengaduan.
     * (Ini sudah benar dari sebelumnya)
     */
    public function kategori()
    {
        return $this->belongsTo(KategoriPengaduan::class, 'kategori_id');
    }

    /**
     * TAMBAHKAN RELASI INI (UNTUK 'warga')
     * * Relasi ke User (Warga yang melapor).
     * Kita pakai User::class karena 'warga_id' di controller diisi dengan auth()->id()
     */
    public function warga()
    {
        return $this->belongsTo(User::class, 'warga_id');
    }

    /**
     * TAMBAHKAN RELASI INI (UNTUK 'tindakLanjuts')
     * * Relasi ke Tindak Lanjut (jawaban dari petugas).
     */
    public function tindakLanjuts()
    {
        // Asumsi foreign key di tabel 'tindak_lanjut' adalah 'pengaduan_id'
        return $this->hasMany(TindakLanjut::class, 'pengaduan_id');
    }
}

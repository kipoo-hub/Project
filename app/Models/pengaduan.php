<?php
namespace App\Models;

use App\Models\TindakLanjut;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table      = 'pengaduan';
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

    public function penilaian()
    {
        return $this->hasOne(PenilaianLayanan::class, 'pengaduan_id', 'pengaduan_id');
    }

    public function scopeFilter($query, $filters)
{
    // Pencarian berdasarkan judul / deskripsi / nomor tiket
    if (!empty($filters['search'])) {
        $search = $filters['search'];
        $query->where(function($q) use ($search) {
            $q->where('judul', 'like', "%$search%")
              ->orWhere('deskripsi', 'like', "%$search%")
              ->orWhere('nomor_tiket', 'like', "%$search%");
        });
    }

    // Filter berdasarkan status
    if (!empty($filters['status'])) {
        $query->where('status', $filters['status']);
    }

    // Filter kategori
    if (!empty($filters['kategori_id'])) {
        $query->where('kategori_id', $filters['kategori_id']);
    }

    // Filter RT
    if (!empty($filters['rt'])) {
        $query->where('rt', $filters['rt']);
    }

    // Filter RW
    if (!empty($filters['rw'])) {
        $query->where('rw', $filters['rw']);
    }

    // Filter berdasarkan pelapor
    if (!empty($filters['warga_id'])) {
        $query->where('warga_id', $filters['warga_id']);
    }

    // Filter anonim / tidak
    if (!empty($filters['is_anonim'])) {   // "1" atau "0"
        $query->where('is_anonim', $filters['is_anonim']);
    }

    // Filter berdasarkan kategori (relasi)
    if (!empty($filters['kategori_nama'])) {
        $query->whereHas('kategori', function($q) use ($filters) {
            $q->where('nama', 'like', '%'.$filters['kategori_nama'].'%');
        });
    }

    // Filter berdasarkan warga nama (relasi user)
    if (!empty($filters['warga_nama'])) {
        $query->whereHas('warga', function($q) use ($filters) {
            $q->where('name', 'like', '%'.$filters['warga_nama'].'%');
        });
    }

    return $query;
}


}

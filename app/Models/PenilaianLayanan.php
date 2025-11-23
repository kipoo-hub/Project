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


    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id', 'pengaduan_id');
    }

    public function scopeFilter($query, $filters)
{
    // Filter berdasarkan rating (misal: rating=5)
    if (!empty($filters['rating'])) {
        $query->where('rating', $filters['rating']);
    }

    // Filter berdasarkan range rating (min & max)
    if (!empty($filters['rating_min'])) {
        $query->where('rating', '>=', $filters['rating_min']);
    }

    if (!empty($filters['rating_max'])) {
        $query->where('rating', '<=', $filters['rating_max']);
    }

    // Filter berdasarkan kata pada komentar
    if (!empty($filters['komentar'])) {
        $query->where('komentar', 'like', '%' . $filters['komentar'] . '%');
    }

    // Filter berdasarkan relasi pengaduan (misal filter judul, kategori, dsb)
    if (!empty($filters['pengaduan'])) {
        $query->whereHas('pengaduan', function ($q) use ($filters) {
            $q->where('judul', 'like', '%' . $filters['pengaduan'] . '%');
        });
    }

    return $query;
}

}

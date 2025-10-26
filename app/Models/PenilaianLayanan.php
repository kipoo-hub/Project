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
}

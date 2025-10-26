<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TindakLanjut extends Model
{
    protected $table = 'tindak_lanjut';
    protected $primaryKey = 'tindak_id';
    protected $fillable = [
        'pengaduan_id',
        'petugas',
        'aksi',
        'catatan'
    ];
}

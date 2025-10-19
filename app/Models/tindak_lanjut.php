<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tindak_lanjut extends Model
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

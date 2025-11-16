<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TindakLanjut;

class TindakLanjutSeeder extends Seeder
{
    public function run(): void
    {
        TindakLanjut::create([
            'pengaduan_id' => 1,
            'keterangan'   => 'Sudah dilakukan pengecekan oleh petugas lapangan.',
            'status'       => 'ditindaklanjuti',
        ]);

        TindakLanjut::create([
            'pengaduan_id' => 2,
            'keterangan'   => 'Pengaduan sedang diverifikasi admin.',
            'status'       => 'menunggu',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PenilaianLayanan;

class PenilaianLayananSeeder extends Seeder
{
    public function run(): void
    {
        PenilaianLayanan::create([
            'pengaduan_id' => 1,
            'rating'       => 5,
            'komentar'     => 'Respon cepat dan petugas ramah.',
        ]);
    }
}

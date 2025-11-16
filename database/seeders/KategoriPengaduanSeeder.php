<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriPengaduan;

class KategoriPengaduanSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = [
            ['nama' => 'Fasilitas Umum', 'prioritas' => 1],
            ['nama' => 'Kesehatan', 'prioritas' => 2],
            ['nama' => 'Keamanan', 'prioritas' => 3],
            ['nama' => 'Administrasi', 'prioritas' => 4],
        ];

        foreach ($kategori as $item) {
            KategoriPengaduan::create($item);
        }
    }
}

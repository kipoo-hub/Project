<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            WargaSeeder::class,
            KategoriPengaduanSeeder::class,
            PengaduanSeeder::class,
            TindakLanjutSeeder::class,
            PenilaianLayananSeeder::class,
        ]);
    }
}

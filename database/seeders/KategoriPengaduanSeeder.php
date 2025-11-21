<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriPengaduan;
use Faker\Factory as Faker;

class KategoriPengaduanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // 4 data default (opsional, bisa dihapus jika tidak ingin)
        $kategoriDefault = [
            ['nama' => 'Fasilitas Umum', 'prioritas' => 1],
            ['nama' => 'Kesehatan', 'prioritas' => 2],
            ['nama' => 'Keamanan', 'prioritas' => 3],
            ['nama' => 'Administrasi', 'prioritas' => 4],
        ];

        foreach ($kategoriDefault as $item) {
            KategoriPengaduan::create($item);
        }

        // Tambahan 100 data faker
        for ($i = 1; $i <= 100; $i++) {
            KategoriPengaduan::create([
                'nama'      => $faker->words(2, true), // contoh: "Perbaikan Jalan"
                'prioritas' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}

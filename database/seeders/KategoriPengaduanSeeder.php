<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriPengaduanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        // 4 data default
        $kategoriDefault = [
            [
                'nama' => 'Fasilitas Umum',
                'sla_hari' => 3,
                'prioritas' => 'Tinggi',
                'is_aktif' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kesehatan',
                'sla_hari' => 2,
                'prioritas' => 'Sedang',
                'is_aktif' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Keamanan',
                'sla_hari' => 1,
                'prioritas' => 'Tinggi',
                'is_aktif' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Administrasi',
                'sla_hari' => 5,
                'prioritas' => 'Rendah',
                'is_aktif' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($kategoriDefault as $item) {
            DB::table('kategori_pengaduan')->insert($item);
        }

        // Daftar kategori pengaduan real Indonesia
        $kategoriRealIndonesia = [
            'Jalan Berlubang',
            'Penerangan Jalan Umum Mati',
            'Sampah Menumpuk',
            'Drainase Tersumbat',
            'Banjir di Pemukiman',
            'Air PDAM Tidak Mengalir',
            'Listrik Sering Padam',
            'Parkir Liar',
            'Pedagang Kaki Lima Mengganggu',
            'Kebisingan Lingkungan',
            'Kebersihan Lingkungan',
            'Penebangan Pohon Ilegal',
            'Pohon Tumbang',
            'Fasilitas Sekolah Rusak',
            'Bangunan Liar',
            'Kesehatan Lingkungan Buruk',
            'Tunggakan Administrasi',
            'Pelayanan Administrasi Lambat',
            'KTP/KK Bermasalah',
            'Bantuan Sosial Tidak Tepat Sasaran',
            'Keamanan Lingkungan Terganggu',
            'Kebakaran Lahan',
            'Jembatan Rusak',
            'Sungai Tercemar',
            'Trotoar Rusak',
        ];

        // Tambahan 100 data faker real Indonesia
        foreach (range(1, 100) as $index) {
            DB::table('kategori_pengaduan')->insert([
                'nama'       => $faker->randomElement($kategoriRealIndonesia),
                'sla_hari'   => $faker->numberBetween(1, 14),
                'prioritas'  => $faker->randomElement(['Rendah', 'Sedang', 'Tinggi']),
                'is_aktif'   => $faker->boolean(90),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

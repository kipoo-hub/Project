<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TindakLanjut;
use Faker\Factory as Faker;

class TindakLanjutSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Pastikan pengaduan ada dulu
        $jumlahPengaduan = \DB::table('pengaduan')->count();

        if ($jumlahPengaduan == 0) {
            dd("Seeder gagal: pengaduan belum ada datanya!");
        }

        // --- Data DEFAULT ---
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

        // --- Faker Tindak Lanjut (100 Data) ---
        foreach (range(1, 100) as $i) {
            TindakLanjut::create([
                'pengaduan_id' => $faker->numberBetween(1, $jumlahPengaduan),
                'keterangan'   => $faker->randomElement([
                    'Petugas sudah datang ke lokasi dan melakukan pengecekan.',
                    'Proses tindak lanjut masih menunggu konfirmasi warga.',
                    'Kerusakan telah diperbaiki dan laporan ditutup.',
                    'Keluhan sedang diteruskan ke instansi terkait.',
                    'Petugas dalam perjalanan menuju lokasi.',
                    'Sedang dilakukan investigasi awal oleh tim lapangan.',
                    'Pengaduan telah masuk ke antrian tindak lanjut.',
                    'Pengecekan lanjutan akan dijadwalkan besok.',
                ]),
                'status'       => $faker->randomElement([
                    'menunggu', 'diproses', 'ditindaklanjuti', 'selesai'
                ]),
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}

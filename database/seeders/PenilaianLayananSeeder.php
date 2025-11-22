<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PenilaianLayanan;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PenilaianLayananSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Pastikan data pengaduan tersedia
        $jumlahPengaduan = DB::table('pengaduan')->count();

        if ($jumlahPengaduan == 0) {
            dd("Seeder gagal: pengaduan belum ada datanya!");
        }

        // --- Data DEFAULT ---
        PenilaianLayanan::create([
            'pengaduan_id' => 1,
            'rating'       => 5,
            'komentar'     => 'Respon cepat dan petugas ramah.',
        ]);

        // --- Ambil pengaduan yang sudah selesai ---
        $pengaduanSelesai = DB::table('pengaduan')
            ->where('status', 'selesai')
            ->pluck('pengaduan_id')
            ->toArray();

        // Kalau tidak ada yang selesai, ambil ALL ID
        if (count($pengaduanSelesai) == 0) {
            $pengaduanSelesai = DB::table('pengaduan')
                ->pluck('pengaduan_id')
                ->toArray();
        }

        // --- Faker 100 Data Penilaian Layanan ---
        foreach (range(1, 100) as $i) {
            PenilaianLayanan::create([
                'pengaduan_id' => $faker->randomElement($pengaduanSelesai),
                'rating'       => $faker->numberBetween(1, 5),
                'komentar'     => $faker->randomElement([
                    'Pelayanan cukup baik.',
                    'Petugas datang tepat waktu.',
                    'Masih perlu perbaikan dalam koordinasi.',
                    'Sangat membantu, terima kasih!',
                    'Respon terlalu lama, mohon ditingkatkan.',
                    'Pekerjaan selesai dengan baik.',
                    'Komunikasi dengan petugas kurang jelas.',
                    $faker->sentence(8),
                ]),
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}

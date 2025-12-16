<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaduanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        // --- KOSONGKAN TABEL DENGAN AMAN ---
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tindak_lanjut')->truncate();
        DB::table('pengaduan')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // --- CEK DATA RELASI ---
        $jumlahWarga    = DB::table('warga')->count();
        $jumlahKategori = DB::table('kategori_pengaduan')->count();

        if ($jumlahWarga == 0 || $jumlahKategori == 0) {
            dd("Seeder gagal: data warga atau kategori pengaduan belum tersedia!");
        }

        // =========================
        // ✅ DATA DEFAULT REALISTIS
        // =========================
        $default = [
            [
                'judul'       => 'Lampu Jalan Mati di Depan Mushola',
                'deskripsi'   => 'Lampu penerangan jalan di depan mushola sudah mati sejak tiga hari yang lalu sehingga kondisi menjadi gelap dan rawan kejahatan.',
                'status'      => 'proses',
                'lokasi_text' => 'Jl. Melati RT 01 RW 02',
                'rt'          => '01',
            ],
            [
                'judul'       => 'Permohonan Bantuan Kesehatan Lansia',
                'deskripsi'   => 'Seorang warga lansia membutuhkan bantuan kesehatan karena kondisi tubuh yang semakin melemah dan tidak memiliki biaya pengobatan.',
                'status'      => 'menunggu',
                'lokasi_text' => 'Jl. Mawar RT 03 RW 01',
                'rt'          => '03',
            ],
            [
                'judul'       => 'Sampah Menumpuk di Belakang Pasar',
                'deskripsi'   => 'Sampah di belakang pasar sudah menumpuk selama beberapa hari dan menimbulkan bau tidak sedap.',
                'status'      => 'selesai',
                'lokasi_text' => 'Jl. Kenanga RT 04 RW 03',
                'rt'          => '04',
            ],
        ];

        $tiketCounter = 1;

        foreach ($default as $item) {
            DB::table('pengaduan')->insert([
                'nomor_tiket'  => 'TIKET-' . str_pad($tiketCounter++, 4, '0', STR_PAD_LEFT),
                'warga_id'     => $faker->numberBetween(1, $jumlahWarga),
                'kategori_id'  => $faker->numberBetween(1, $jumlahKategori),
                'judul'        => $item['judul'],
                'deskripsi'    => $item['deskripsi'],
                'status'       => $item['status'],
                'lokasi_text'  => $item['lokasi_text'],
                'rt'           => $item['rt'],
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }

        // =========================
        // ✅ DATA RANDOM 100 ITEM (INDONESIA)
        // =========================
        $jalan = [
            'Melati', 'Mawar', 'Kenanga', 'Anggrek', 'Flamboyan',
            'Cempaka', 'Dahlia', 'Bougenville', 'Teratai', 'Sakura'
        ];

        $judulPengaduan = [
            'Jalan Berlubang di Permukiman',
            'Lampu Jalan Tidak Menyala',
            'Sampah Rumah Tangga Menumpuk',
            'Saluran Air Mampet',
            'Pohon Tumbang di Pinggir Jalan',
            'Kebisingan Musik di Malam Hari',
            'Air PDAM Tidak Mengalir',
            'Pipa Air Bocor',
            'Gangguan Keamanan Lingkungan',
            'Pelayanan Warga Kurang Maksimal'
        ];

        foreach (range(1, 100) as $i) {

            $namaJalan = $faker->randomElement($jalan);
            $rt        = str_pad($faker->numberBetween(1, 10), 2, '0', STR_PAD_LEFT);

            DB::table('pengaduan')->insert([
                'nomor_tiket'  => 'TIKET-' . str_pad($tiketCounter++, 4, '0', STR_PAD_LEFT),
                'warga_id'     => $faker->numberBetween(1, $jumlahWarga),
                'kategori_id'  => $faker->numberBetween(1, $jumlahKategori),
                'judul'        => $faker->randomElement($judulPengaduan),
                'deskripsi'    => $faker->paragraph(4),
                'status'       => $faker->randomElement(['menunggu', 'proses', 'selesai']),
                'lokasi_text'  => "Jl. $namaJalan RT $rt RW 0" . $faker->numberBetween(1, 5),
                'rt'           => $rt,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}

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

        // --- KOSONGKAN TABEL DENGAN AMAN (karena ada foreign key) ---
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tindak_lanjut')->truncate(); // tabel anak dulu
        DB::table('pengaduan')->truncate();     // baru tabel induk
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // --- CEK DATA RELASI ---
        $jumlahWarga    = DB::table('warga')->count();
        $jumlahKategori = DB::table('kategori_pengaduan')->count();

        if ($jumlahWarga == 0 || $jumlahKategori == 0) {
            dd("Seeder gagal: warga atau kategori_pengaduan belum ada datanya!");
        }

        // --- DATA DEFAULT ---
        $default = [
            [
                'judul'       => 'Lampu Jalan Mati',
                'deskripsi'   => 'Lampu penerangan jalan sudah mati selama 3 hari.',
                'status'      => 'proses',
                'lokasi_text' => 'Jl. Melati RT 01 RW 02',
                'rt'          => '01',
            ],
            [
                'judul'       => 'Butuh Bantuan Kesehatan',
                'deskripsi'   => 'Pengajuan bantuan kesehatan untuk warga lansia.',
                'status'      => 'menunggu',
                'lokasi_text' => 'Jl. Mawar RT 03 RW 01',
                'rt'          => '03',
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

        // --- DATA RANDOM 100 ITEM ---
        $jalan = [
            'Melati', 'Mawar', 'Kenanga', 'Anggrek', 'Flamboyan',
            'Cempaka', 'Dahlia', 'Bougenville', 'Teratai', 'Sakura'
        ];

        foreach (range(1, 100) as $i) {

            $namaJalan = $faker->randomElement($jalan);
            $rt        = str_pad($faker->numberBetween(1, 10), 2, '0', STR_PAD_LEFT);

            DB::table('pengaduan')->insert([
                'nomor_tiket'  => 'TIKET-' . str_pad($tiketCounter++, 4, '0', STR_PAD_LEFT),
                'warga_id'     => $faker->numberBetween(1, $jumlahWarga),
                'kategori_id'  => $faker->numberBetween(1, $jumlahKategori),
                'judul'        => $faker->randomElement([
                    'Lampu Jalan Rusak',
                    'Jalan Berlubang',
                    'Pohon Tumbang',
                    'Kebisingan Tetangga',
                    'Sampah Menumpuk',
                    'Air Tidak Mengalir',
                    'Pipa Bocor',
                    'Gangguan Keamanan',
                    'Gangguan Kesehatan Warga',
                    'Layanan Tidak Maksimal'
                ]),
                'deskripsi'    => $faker->paragraph(3),
                'status'       => $faker->randomElement(['menunggu', 'proses', 'selesai']),
                'lokasi_text'  => "Jl. $namaJalan RT $rt RW 0" . $faker->numberBetween(1, 5),
                'rt'           => $rt,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}

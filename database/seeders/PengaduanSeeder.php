<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengaduan;

class PengaduanSeeder extends Seeder
{
    public function run(): void
    {
        Pengaduan::create([
            'nomor_tiket'  => 'TIKET-001',
            'warga_id'     => 1,
            'kategori_id'  => 1,
            'judul'        => 'Lampu Jalan Mati',
            'deskripsi'    => 'Lampu penerangan jalan sudah mati selama 3 hari.',
            'status'       => 'proses',
            'lokasi_text'  => 'Jl. Melati RT 01 RW 02',
            'rt'           => '01',
        ]);

        Pengaduan::create([
            'nomor_tiket'  => 'TIKET-002',
            'warga_id'     => 2,
            'kategori_id'  => 2,
            'judul'        => 'Butuh Bantuan Kesehatan',
            'deskripsi'    => 'Pengajuan bantuan kesehatan untuk warga lansia.',
            'status'       => 'menunggu',
            'lokasi_text'  => 'Jl. Mawar RT 03 RW 01',
            'rt'           => '03',
        ]);
    }
}

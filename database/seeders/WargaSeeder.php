<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warga;

class WargaSeeder extends Seeder
{
    public function run(): void
    {
        $wargas = [
            [
                'no_ktp'        => '3173021001120001',
                'nama'          => 'Budi Santoso',
                'jenis_kelamin' => 'Laki-laki',
                'agama'         => 'Islam',
                'pekerjaan'     => 'Karyawan Swasta',
                'telp'          => '081234567890',
                'email'         => 'budi@example.com',
            ],
            [
                'no_ktp'        => '3173021509870002',
                'nama'          => 'Siti Aminah',
                'jenis_kelamin' => 'Perempuan',
                'agama'         => 'Islam',
                'pekerjaan'     => 'Ibu Rumah Tangga',
                'telp'          => '081987654321',
                'email'         => 'siti@example.com',
            ],
            [
                'no_ktp'        => '3173022208810003',
                'nama'          => 'Andi Pratama',
                'jenis_kelamin' => 'Laki-laki',
                'agama'         => 'Kristen',
                'pekerjaan'     => 'Wiraswasta',
                'telp'          => '082134567899',
                'email'         => 'andi@example.com',
            ],
        ];

        foreach ($wargas as $item) {
            Warga::firstOrCreate(
                ['no_ktp' => $item['no_ktp']], // hindari duplicate
                $item
            );
        }
    }
}

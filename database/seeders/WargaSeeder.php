<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warga;
use Faker\Factory as Faker;

class WargaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // ==========================
        // 3 Data default
        // ==========================
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
                ['no_ktp' => $item['no_ktp']],
                $item
            );
        }

        // ==========================
        // Faker 100 warga
        // ==========================
        $pekerjaanList = [
            'Karyawan Swasta', 'Wiraswasta', 'PNS', 'Guru', 'Pedagang',
            'Mahasiswa', 'Buruh Harian', 'Sopir', 'Ojek Online',
            'Ibu Rumah Tangga', 'Koki', 'Satpam', 'Teknisi', 'Perawat'
        ];

        foreach (range(1, 100) as $i) {
            Warga::create([
                'no_ktp'        => $faker->nik(),
                'nama'          => $faker->name(),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'agama'         => $faker->randomElement([
                    'Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'
                ]),
                'pekerjaan'     => $faker->randomElement($pekerjaanList),

                // Nomor HP Indonesia format realistis
                'telp'          => '08' . $faker->numerify('##########'),

                // Email unik dan lebih natural
                'email'         => strtolower(
                    str_replace(' ', '', $faker->userName()) . $faker->numerify('#') . '@mail.com'
                ),
            ]);
        }
    }
}

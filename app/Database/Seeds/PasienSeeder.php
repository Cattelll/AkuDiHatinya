<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PasienSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID'); // Faker Indonesia
        $db = \Config\Database::connect();

        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_puskesmas' => rand(1, 5), // Sesuaikan dengan jumlah puskesmas
                'nama_pasien'  => $faker->name,
                'nik'          => $faker->nik(),
                'umur'         => rand(20, 80),
                'tanggal_lahir' => $faker->date(),
                'nomor_bpjs'   => $faker->numerify('################'),
                'cp'           => $faker->phoneNumber,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
            ];
            $db->table('pasien')->insert($data);
        }
    }
}

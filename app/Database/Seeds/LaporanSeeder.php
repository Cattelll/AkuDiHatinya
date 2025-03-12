<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        // Ambil daftar ID pasien yang tersedia
        $query = $db->query("SELECT id_pasien FROM pasien");
        $pasienList = $query->getResultArray();

        if (empty($pasienList)) {
            echo "Tidak ada pasien di database! Jalankan PasienSeeder terlebih dahulu.\n";
            return;
        }

        $faker = \Faker\Factory::create('id_ID');

        // Seed untuk laporan_diabetes
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'id_pasien'        => $pasienList[array_rand($pasienList)]['id_pasien'],
                'bulan'            => rand(1, 12),
                'tahun'            => rand(2022, 2025),
                'kunjungan_ceklist' => rand(0, 1),
            ];
            $db->table('laporan_diabetes')->insert($data);
        }

        // Seed untuk laporan_hipertensi
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'id_pasien'        => $pasienList[array_rand($pasienList)]['id_pasien'],
                'bulan'            => rand(1, 12),
                'tahun'            => rand(2022, 2025),
                'kunjungan_ceklist' => rand(0, 1),
            ];
            $db->table('laporan_hipertensi')->insert($data);
        }
    }
}

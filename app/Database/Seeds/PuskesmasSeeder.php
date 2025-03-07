<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PuskesmasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_puskesmas' => 'Karang Intan 1',
                'alamat'         => 'Alamat Karang Intan 1',
                'kontak'         => '081234567891'
            ],
            [
                'nama_puskesmas' => 'Karang Intan 2',
                'alamat'         => 'Alamat Karang Intan 2',
                'kontak'         => '081234567892'
            ],
            [
                'nama_puskesmas' => 'Sungai Pinang',
                'alamat'         => 'Alamat Sungai Pinang',
                'kontak'         => '081234567893'
            ],
            [
                'nama_puskesmas' => 'Simpang Empat 1',
                'alamat'         => 'Alamat Simpang Empat 1',
                'kontak'         => '081234567894'
            ],
            [
                'nama_puskesmas' => 'Simpang Empat 2',
                'alamat'         => 'Alamat Simpang Empat 2',
                'kontak'         => '081234567895'
            ],
            [
                'nama_puskesmas' => 'Aluh-Aluh',
                'alamat'         => 'Alamat Aluh-Aluh',
                'kontak'         => '081234567896'
            ],
            [
                'nama_puskesmas' => 'Kertak Hanyar',
                'alamat'         => 'Alamat Kertak Hanyar',
                'kontak'         => '081234567897'
            ],
            [
                'nama_puskesmas' => 'Tatah Makmur',
                'alamat'         => 'Alamat Tatah Makmur',
                'kontak'         => '081234567898'
            ],
            [
                'nama_puskesmas' => 'Gambut',
                'alamat'         => 'Alamat Gambut',
                'kontak'         => '081234567899'
            ],
            [
                'nama_puskesmas' => 'Sungai Tabuk 1',
                'alamat'         => 'Alamat Sungai Tabuk 1',
                'kontak'         => '081234567900'
            ]
        ];

        // Insert data ke database
        $this->db->table('puskesmas')->insertBatch($data);
    }
}

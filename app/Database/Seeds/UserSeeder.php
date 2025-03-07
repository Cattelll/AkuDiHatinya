<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user'   => 1,
                'nama'      => 'Admin Pusat',
                'username'  => 'admin',
                'password'  => password_hash('admin123', PASSWORD_DEFAULT),
                'role'      => 'admin',
                'id_puskesmas' => NULL, // Admin tidak terikat ke puskesmas
            ],
            [
                'id_user'   => 2,
                'nama'      => 'Petugas Karang Intan 1',
                'username'  => 'petugas1',
                'password'  => password_hash('petugas123', PASSWORD_DEFAULT),
                'role'      => 'puskesmas',
                'id_puskesmas' => 1, // Petugas di Puskesmas Karang Intan 1
            ],
            [
                'id_user'   => 3,
                'nama'      => 'Petugas Sungai Pinang',
                'username'  => 'petugas2',
                'password'  => password_hash('petugas123', PASSWORD_DEFAULT),
                'role'      => 'puskesmas',
                'id_puskesmas' => 3, // Petugas di Puskesmas Sungai Pinang
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}

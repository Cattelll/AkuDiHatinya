<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCpToPasien extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pasien', [
            'cp' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => true,
                'after'      => 'nomor_bpjs' // Menambahkan setelah kolom nomor_bpjs
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('pasien', 'cp');
    }
}

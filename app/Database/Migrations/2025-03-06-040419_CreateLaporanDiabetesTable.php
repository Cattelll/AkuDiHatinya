<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaporanDiabetesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_laporan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_pasien' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'bulan' => [
                'type'       => 'INT',
                'constraint' => 2,
                'null'       => false,
            ],
            'tahun' => [
                'type'       => 'YEAR',
                'null'       => false,
            ],
            'kunjungan_ceklist' => [
                'type'       => 'BOOLEAN',
                'null'       => false,
                'default'    => false,
            ],
        ]);

        $this->forge->addKey('id_laporan', true); // Primary Key
        $this->forge->addForeignKey('id_pasien', 'pasien', 'id_pasien', 'CASCADE', 'CASCADE'); // Foreign Key
        $this->forge->createTable('laporan_diabetes');
    }

    public function down()
    {
        $this->forge->dropTable('laporan_diabetes');
    }
}

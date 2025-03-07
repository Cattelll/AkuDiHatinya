<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaporanUtamaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_laporan_utama' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_puskesmas' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'tahun' => [
                'type' => 'YEAR',
                'null' => false,
            ],
            'sasaran_pasien' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'standar_diabetes' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'tidak_standar_diabetes' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'standar_hipertensi' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'tidak_standar_hipertensi' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'jumlah_laki_laki' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'jumlah_perempuan' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
        ]);

        $this->forge->addKey('id_laporan_utama', true); // Primary Key
        $this->forge->addForeignKey('id_puskesmas', 'puskesmas', 'id_puskesmas', 'CASCADE', 'CASCADE'); // Foreign Key
        $this->forge->createTable('laporan_utama');
    }

    public function down()
    {
        $this->forge->dropTable('laporan_utama');
    }
}

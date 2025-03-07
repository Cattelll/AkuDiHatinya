<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePuskesmasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_puskesmas' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_puskesmas' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'kontak' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id_puskesmas', true); // Primary Key
        $this->forge->createTable('puskesmas');
    }

    public function down()
    {
        $this->forge->dropTable('puskesmas');
    }
}

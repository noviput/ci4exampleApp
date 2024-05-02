<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailJadwalTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nip' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'kd_matkul' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('nip', 'dosen', 'nip');
        $this->forge->addForeignKey('kd_matkul', 'matkul', 'kd_matkul');
        $this->forge->createTable('detail_jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('detail_jadwal');
    }
}

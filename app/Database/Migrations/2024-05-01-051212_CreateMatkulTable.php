<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMatkulTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kd_matkul' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nm_matkul' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'sks' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'kelompok' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'fakultas' => [
                'type' => 'ENUM("FISSIG", "FT", "FTI", "FKDK", "FEB")',
            ],
        ]);
        $this->forge->addKey('kd_matkul', true);
        $this->forge->createTable('matkul');
    }

    public function down()
    {
        $this->forge->dropTable('matkul');
    }
}

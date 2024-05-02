<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRuanganTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lab' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'lab' => [
                'type' => 'ENUM("Lab 02", "Lab 04", "Lab 05", "Lab 06", "Lab 07", "Lab 08", "Lab 09", "Lab 10", "Lab 11")',
            ],
            'status' => [
                'type' => 'ENUM("tersedia", "digunakan")',
                'default' => 'tersedia',
            ],
        ]);
        $this->forge->addKey('id_lab', true);
        $this->forge->createTable('ruangan');
    }

    public function down()
    {
        $this->forge->dropTable('ruangan');
    }
}

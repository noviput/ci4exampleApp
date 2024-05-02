<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kd_jadwal' => [
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
            'lab' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'waktu_mulai' => [
                'type' => 'TIME',
            ],
            'waktu_selesai' => [
                'type' => 'TIME',
            ],
            'hari' => [
                'type' => 'ENUM("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu")',
            ],
            'status' => [
                'type' => 'ENUM("aktif", "tidak aktif")',
                'default' => 'aktif',
            ],
        ]);
        $this->forge->addKey('kd_jadwal', true);
        $this->forge->addForeignKey('nip', 'dosen', 'nip');
        $this->forge->addForeignKey('kd_matkul', 'matkul', 'kd_matkul');
        $this->forge->createTable('jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
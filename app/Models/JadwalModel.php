<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'kd_jadwal';
    protected $allowedFields = ['nip', 'kd_matkul', 'id_lab', 'waktu_mulai', 'waktu_selesai','tanggal', 'hari', 'status'];

    public function updateJadwal($data, $kd_jadwal)
    {
        $this->where('kd_jadwal', $kd_jadwal)->update($data);
    }

}

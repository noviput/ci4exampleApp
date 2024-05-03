<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table      = 'matkul';
    protected $primaryKey = 'kd_matkul';
    protected $allowedFields = ['kd_matkul', 'nm_matkul', 'sks', 'kelompok', 'fakultas'];
}

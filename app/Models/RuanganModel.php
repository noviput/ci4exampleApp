<?php

namespace App\Models;

use CodeIgniter\Model;

class RuanganModel extends Model
{
    protected $table      = 'ruangan';
    protected $primaryKey = 'id_lab';
    protected $allowedFields = ['id_lab', 'lab', 'status'];
}

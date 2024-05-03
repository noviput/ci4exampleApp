<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table      = 'dosen';
    protected $primaryKey = 'nip';
    protected $allowedFields = ['nip', 'nm_dosen'];
}

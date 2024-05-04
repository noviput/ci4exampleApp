<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JadwalModel;

class RuanganController extends Controller
{
    public function ruangan(){
        $db = \Config\Database::connect();
        // Lakukan join antara tabel dosen dan jadwal
        $builder = $db->table('dosen');
        $builder->select('*');
        $builder->join('jadwal as j', 'j.nip = dosen.nip');
        $builder->join('matkul as m', 'j.kd_matkul = m.kd_matkul');
        $builder->join('ruangan as r', 'j.id_lab = r.id_lab');
        $query = $builder->get();

        // Ambil hasil query
        $jadwal = $query->getResult();

        // Mengirimkan data ke view
        $data['jadwal'] = $jadwal;

        // Memuat view dengan data
        return view('inforuangan_view', $data);
    }
}
?>
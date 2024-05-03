<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DosenModel;
use App\Models\MatkulModel;
use App\Models\RuanganModel;
use App\Models\JadwalModel;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;


class DashboardController extends Controller
{
    public function index()
    {
        $dosenModel = new DosenModel();
        $matkulModel = new MatkulModel();
        $ruanganModel = new RuanganModel();
        $jadwalModel = new JadwalModel();

        // Ambil data dosen, mata kuliah, dan ruangan dari database
        $data['dosen'] = $dosenModel->findAll();
        $data['matkul'] = $matkulModel->findAll();
        $data['ruangan'] = $ruanganModel->findAll();
        $data['jadwal'] = $jadwalModel->findAll();

        // Tampilkan view form penjadwalan dan kirim data dosen, mata kuliah, dan ruangan
        return view('dashboard_view', $data);
    }
}

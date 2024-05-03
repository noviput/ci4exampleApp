<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MatkulModel;
use App\Models\RuanganModel;
use App\Models\JadwalModel;
use CodeIgniter\Controller;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

class SchedulerController extends Controller
{
    public function index()
    {
        // Panggil model-model yang diperlukan
        $dosenModel = new DosenModel();
        $matkulModel = new MatkulModel();
        $ruanganModel = new RuanganModel();

        // Ambil data dosen, mata kuliah, dan ruangan dari database
        $data['dosen'] = $dosenModel->findAll();
        $data['matkul'] = $matkulModel->findAll();
        $data['ruangan'] = $ruanganModel->findAll();

        // Tampilkan view form penjadwalan dan kirim data dosen, mata kuliah, dan ruangan
        return view('scheduler_input', $data);
    }

    public function submitForm()
    {
        // Proses data yang dikirimkan melalui form
        $request = \Config\Services::request();

        // Ambil data yang dikirimkan dari form
        $nip = $request->getPost('nip');
        $kd_matkul = $request->getPost('kd_matkul');
        $id_lab = $request->getPost('id_lab');
        $waktu_mulai = $request->getPost('waktu_mulai');
        $waktu_selesai = $request->getPost('waktu_selesai');
        $hari = $request->getPost('hari');
        $tanggal = $request->getPost('tanggal');
        // Lakukan validasi data jika diperlukan

        // Lakukan penyimpanan data ke database atau lakukan operasi yang diperlukan sesuai dengan logika aplikasi Anda

        $jadwalModel = new JadwalModel();

        $data = [
            'nip' => $nip,
            'kd_matkul' => $kd_matkul,
            'id_lab' => $id_lab,
            'waktu_mulai' => $waktu_mulai,
            'waktu_selesai' => $waktu_selesai,
            'hari' => $hari,
            'tanggal' => $tanggal
        ];
    
        $jadwalModel->save($data);
        // Setelah selesai, redirect pengguna ke halaman lain atau tampilkan pesan sukses
        return redirect()->to(site_url('dashboard'));
    }
}



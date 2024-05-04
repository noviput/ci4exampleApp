<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MatkulModel;
use App\Models\RuanganModel;
use App\Models\JadwalModel;
use CodeIgniter\Controller;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

class UpdateController extends Controller
{
    public function editForm($kd_jadwal)
{
    // Panggil model-model yang diperlukan
    $dosenModel = new DosenModel();
    $matkulModel = new MatkulModel();
    $ruanganModel = new RuanganModel();
    $jadwalModel = new JadwalModel();

    // Ambil data jadwal yang akan diedit berdasarkan ID
    $jadwal = $jadwalModel->find($kd_jadwal);

    if (!$jadwal) {
        // Jika jadwal tidak ditemukan, redirect pengguna dengan pesan error
        return redirect()->to(site_url('dashboard'))->with('error', 'Jadwal tidak ditemukan!');
    }

    // Ambil data dosen, mata kuliah, dan ruangan dari database
    $data['dosen'] = $dosenModel->findAll();
    $data['matkul'] = $matkulModel->findAll();
    $data['ruangan'] = $ruanganModel->findAll();
    $data['jadwal'] = $jadwalModel->findAll();
    // Kirim data jadwal yang akan diedit ke view
    $data['jadwal'] = $jadwal;

    // Tampilkan view form edit penjadwalan dan kirim data dosen, mata kuliah, ruangan, dan jadwal
    return view('update_input', $data);
}

public function updateForm($kd_jadwal)
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

    // Panggil model jadwal
    $jadwalModel = new JadwalModel();

    // Perbarui data jadwal berdasarkan ID
    $data = [
        'nip' => $nip,
        'kd_matkul' => $kd_matkul,
        'id_lab' => $id_lab,
        'waktu_mulai' => $waktu_mulai,
        'waktu_selesai' => $waktu_selesai,
        'hari' => $hari,
        'tanggal' => $tanggal
    ];

    $jadwalModel->update($kd_jadwal, $data);

    // Setelah selesai, redirect pengguna ke halaman lain atau tampilkan pesan sukses
    return redirect()->to(site_url('dashboard'))->with('success', 'Jadwal berhasil diperbarui!');
}

}
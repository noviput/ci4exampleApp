<?php


namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DosenModel;
use App\Models\MatkulModel;
use App\Models\RuanganModel;
use App\Models\JadwalModel;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class dashboard extends BaseController
{
    public function index()
    {
        
    }

    public function delete($id)
{
    // Panggil model untuk menghapus data berdasarkan $id
    $jadwalModel = new JadwalModel();
    $jadwalModel->delete($id); // Contoh method dari model untuk hapus data

    // Setelah selesai, redirect pengguna ke halaman dashboard atau tampilkan pesan sukses
    return redirect()->to(site_url('dashboard'))->with('success', 'Data jadwal berhasil dihapus!');
}

}

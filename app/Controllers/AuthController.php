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

class AuthController extends BaseController
{
    public function index()
    {
        {
            
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
    
            // Tampilkan view form penjadwalan dan kirim data dosen, mata kuliah, dan ruangan
            return view('dashboard_view', compact('jadwal'));
        }
    }

    public function test()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $userModel = new UserModel();
        $jadwalModel = new JadwalModel();
        $user = $userModel->where('username', $username)->first();
        $jadwal = $jadwalModel->findAll();

        // var_dump($jadwal);

        if ($password == $user['password']) {
            return view("dashboard_view");
        } else {
             return redirect()->back();
        }
        // try {
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Password salah');
        // }
    }

    public function login() {

    }
}

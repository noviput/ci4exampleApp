<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DosenModel;
use App\Models\MatkulModel;
use App\Models\RuanganModel;

class CrudController extends Controller
{
    // Menambahkan dosen baru
public function addDosen()
{
    $dosenModel = new DosenModel();

    $data = [
        'nip' => $this->request->getPost('nip'),
        'nm_dosen' => $this->request->getPost('nm_dosen')
    ];

    $dosenModel->insert($data);

    return redirect()->to('/crud');
}

// Mengedit dosen
public function editDosen($nip)
{
    $dosenModel = new DosenModel();

    $data = [
        'nm_dosen' => $this->request->getPost('nm_dosen')
    ];

    $dosenModel->update($nip, $data);

    return redirect()->to('/crud');
}

// Menghapus dosen
public function deleteDosen($nip)
{
    $dosenModel = new DosenModel();

    $dosenModel->delete($nip);

    return redirect()->to('/crud');
}

// Menambahkan mata kuliah baru
public function addMatkul()
{
    $matkulModel = new MatkulModel();

    $data = [
        'kd_matkul' => $this->request->getPost('kd_matkul'),
        'nm_matkul' => $this->request->getPost('nm_matkul'),
        'sks' => $this->request->getPost('sks'),
        'kelompok' => $this->request->getPost('kelompok'),
        'fakultas' => $this->request->getPost('fakultas')
    ];

    $matkulModel->insert($data);

    return redirect()->to('/crud');
}

// Mengedit mata kuliah
public function editMatkul($kd_matkul)
{
    $matkulModel = new MatkulModel();

    $data = [
        'nm_matkul' => $this->request->getPost('nm_matkul'),
        'sks' => $this->request->getPost('sks'),
        'kelompok' => $this->request->getPost('kelompok'),
        'fakultas' => $this->request->getPost('fakultas')
    ];

    $matkulModel->update($kd_matkul, $data);

    return redirect()->to('/crud');
}

// Menghapus mata kuliah
public function deleteMatkul($kd_matkul)
{
    $matkulModel = new MatkulModel();

    $matkulModel->delete($kd_matkul);

    return redirect()->to('/crud');
}

// Menambahkan ruangan baru
public function addRuangan()
{
    $ruanganModel = new RuanganModel();

    $data = [
        'id_lab' => $this->request->getPost('id_lab'),
        'lab' => $this->request->getPost('lab'),
        'status' => $this->request->getPost('status')
    ];

    $ruanganModel->insert($data);

    return redirect()->to('/crud');
}

// Mengedit ruangan
public function editRuangan($id_lab)
{
    $ruanganModel = new RuanganModel();

    $data = [
        'lab' => $this->request->getPost('lab'),
        'status' => $this->request->getPost('status')
    ];

    $ruanganModel->update($id_lab, $data);

    return redirect()->to('/crud');
}

// Menghapus ruangan
public function deleteRuangan($id_lab)
{
    $ruanganModel = new RuanganModel();

    $ruanganModel->delete($id_lab);

    return redirect()->to('/crud');
}

}

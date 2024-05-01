<?php

namespace App\Controllers;

use App\Models\SchedulerModel;

class SchedulerController extends BaseController
{
    public function scheduler()
    {
        return view('scheduler_input');
    }

    public function save()
    {
        $schedulerModel = new SchedulerModel();

        // Ambil data dari form
        $data = [
            'title' => $this->request->getPost('title'),
            'date' => $this->request->getPost('date'),
            'time' => $this->request->getPost('time'),
            'description' => $this->request->getPost('description'),
        ];

        // Validasi data (jika diperlukan)

        // Simpan data ke dalam database
        $schedulerModel->insert ->$data;

        // Redirect ke halaman input dengan pesan sukses
        return redirect()->to(site_url('scheduler'))->with('success', 'Jadwal berhasil disimpan.');
    }
}

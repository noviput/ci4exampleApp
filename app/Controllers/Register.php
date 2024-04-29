<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
public function index()
    {
        return view('register');
    }
 

public function process()
{
    $username = $this->request->getPost("username");
    $password = $this->request->getPost("password");

    $userModel = new UserModel();

    $user = $userModel->where('username', $username)->first();

    if ($user) {
        // Pengguna sudah terdaftar
        return redirect()->back()->with("error", "user telah terfdaftar");
    } else {
        // Simpan data pengguna baru
        $userModel->save([
            'username' => $username,
            'password' => $password,
        ]);

        // Berhasil mendaftar, redirect ke halaman login
        return redirect()->to('welcome_message');
    }
}

}
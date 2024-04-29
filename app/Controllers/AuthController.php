<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        //
        return view("dashboard_view");
    }

    public function submit()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $userModel = new UserModel();
    $user = $userModel->where('username', $username)->first();

    try {
        if (!password_verify("{$password}", $user['password'])) {
            return view("dashboard_view");
        } else {
            return redirect()->back();
        }
    } catch (\Throwable $th) {
        return redirect()->back()->with('error', 'Password salah');
    }
}
}

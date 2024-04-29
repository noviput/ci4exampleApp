<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LogOutController extends Controller
{
    public function index(){
    return view('Logout');
    }
    public function logout()
    {
        session()->destroy();
    }
}

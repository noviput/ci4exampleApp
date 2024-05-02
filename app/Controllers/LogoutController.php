<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LogoutController extends Controller
{
    public function index(){
    return view('welcome_message');
    }
    public function logout()
    {
        return view('welcome_message');
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LogOutController extends Controller
{
    public function logout()
    {
        session()->destroy();
    }
}

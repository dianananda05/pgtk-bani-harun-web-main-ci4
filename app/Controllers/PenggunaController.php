<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PenggunaController extends BaseController
{
    public function index()
    {
        return view('menu/pengguna');
    }
}

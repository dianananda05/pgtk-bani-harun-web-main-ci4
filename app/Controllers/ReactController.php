<?php

namespace App\Controllers;

class ReactController extends BaseController
{
    public function index()
    {
        return view('index'); // The React app's entry point
    }
}

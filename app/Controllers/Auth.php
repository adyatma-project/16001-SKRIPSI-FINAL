<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        echo view('Auth/login');
    }
}

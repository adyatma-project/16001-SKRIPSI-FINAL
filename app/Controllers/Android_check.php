<?php

namespace App\Controllers;

use App\Models\check_model;

class Android_check extends BaseController
{
    public function index()
    {
        echo view('android/cari');
    }

    public function information()
    {
        echo view('android/info');
    }
}

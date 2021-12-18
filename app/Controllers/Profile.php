<?php

namespace App\Controllers;

use App\Models\Profile_model;

class Profile extends BaseController
{
    public function index()
    {
        $model = new Profile_model();
        $data['users'] = $model->getProfile();
        echo view('profile/index', $data);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile_model extends Model
{
    protected $table = 'users';

    public function getProfile($id = false)
    {
        return $this->getWhere(['username' => $id]);
    }
}

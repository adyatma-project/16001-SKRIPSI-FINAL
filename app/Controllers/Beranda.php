<?php

namespace App\Controllers;

use App\Models\beranda_model;

class Beranda extends BaseController
{
	
	function __construct(){
		$this->beranda_model = new beranda_model();
	}

	public function index()
	{
		$model = new beranda_model();
       

		$data["title"]      = "Grafik Siswa Lulus Per Tahun";
        $data["chartSiswa"] = $model->siswaPertahun(); 
		echo view('Beranda/index', $data);
       
	}
}



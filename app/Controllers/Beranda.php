<?php

namespace App\Controllers;

use App\Models\beranda_model;

class Beranda extends BaseController
{
	public function __construct()
	{
		$this->beranda_model = new beranda_model();
	}

	public function index()
	{
		return view('Beranda/index');
	}
}

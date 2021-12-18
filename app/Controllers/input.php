<?php

namespace App\Controllers;

use App\Models\Input_model;

class input extends BaseController
{
    protected $helpers = [];

    public function __construct()
    {
        helper(['form']);
        $this->input_model = new Input_model();
    }

    public function index()
    {
    }


    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id_outlet'         => $this->request->getPost('id_outlet'),
            'nama_outlet'       => $this->request->getPost('nama_outlet'),
            'waktu_order'       => $this->request->getPost('waktu_order'),
            'bulan'             => $this->request->getPost('bulan'),
            'tahun'             => $this->request->getPost('tahun'),
            'alamat_order'      => $this->request->getPost('alamat_order'),
            'no_telp'           => $this->request->getPost('no_telp'),
            'order_55'          => $this->request->getPost('order_55'),
            'order_12'          => $this->request->getPost('order_12'),
        );

        if ($validation->run($data, 'test') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('input/show/13'));
        } else {
            $simpan = $this->input_model->insertProduct($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created Data successfully');
                return redirect()->to(base_url('accountoutlet'));
            }
        }
    }

    public function show($id)
    {
        $data['outlet_list'] = $this->input_model->gettest($id);
        echo view('input/index', $data);
    }
}

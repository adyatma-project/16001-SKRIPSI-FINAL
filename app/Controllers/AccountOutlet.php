<?php

namespace App\Controllers;

use App\Models\Outlet_model;

class AccountOutlet extends BaseController
{
    public function index()
    {
        $model1 = new Outlet_model();
        $data['outlet_list'] = $model1->getOutlet();
        echo view('accountoutlet/index', $data);
    }

    public function create()
    {
        return view('accountoutlet/create');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'phone_outlet'     => $this->request->getPost('phone_outlet'),
        );

        if ($validation->run($data, 'outlet_list') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('accountoutlet/create'));
        } else {
            $model = new Outlet_model();
            $simpan = $model->insertOutlet($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created Outlet successfully');
                return redirect()->to(base_url('accountoutlet'));
            }
        }
    }

    public function edit($id)
    {
        $model = new Outlet_model();
        $data['outlet_list'] = $model->getOutlet($id)->getRowArray();
        echo view('accountoutlet/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');

        $validation =  \Config\Services::validation();

        $data = array(
            'name_outlet'     => $this->request->getPost('name_outlet'),
            'address_outlet'   => $this->request->getPost('address_outlet'),
        );


        $model = new Outlet_model();
        $ubah = $model->updateOutlet($data, $id);
        if ($ubah) {
            session()->setFlashdata('success', 'Updated Outlet successfully');
            return redirect()->to(base_url('accountoutlet'));
        }
    }

    public function delete($id)
    {
        $model = new Outlet_model();
        $hapus = $model->deleteOutlet($id);
        if ($hapus) {
            session()->setFlashdata('success', 'Deleted Outlet successfully');
            return redirect()->to(base_url('accountoutlet'));
        }
    }
}

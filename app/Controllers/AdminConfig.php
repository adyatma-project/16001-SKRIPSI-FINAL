<?php

namespace App\Controllers;

use App\Models\Admin_model;

class AdminConfig extends BaseController
{
    protected $helpers = [];

    public function __construct()
    {
        helper(['form']);
        $this->admin_model = new Admin_model();
    }

    public function index()
    {
        $data['users'] = $this->admin_model->getAdmin();
        echo view('adminconfig/index', $data);
    }


    public function store()
    {
        $validation =  \Config\Services::validation();

        // get file upload
        $image = $this->request->getFile('product_image');
        // random name file
        $name = $image->getRandomName();

        $data = array(
            'category_id'           => $this->request->getPost('category_id'),
            'product_name'          => $this->request->getPost('product_name'),
            'product_price'         => $this->request->getPost('product_price'),
            'product_sku'           => $this->request->getPost('product_sku'),
            'product_status'        => $this->request->getPost('product_status'),
            'product_image'         => $name,
            'product_description'   => $this->request->getPost('product_description'),
        );

        if ($validation->run($data, 'product') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('product/create'));
        } else {
            // upload file 
            $image->move(ROOTPATH . 'public/uploads', $name);
            // insert
            $simpan = $this->product_model->insertProduct($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created Product successfully');
                return redirect()->to(base_url('product'));
            }
        }
    }

    public function show($id)
    {
        $data['product'] = $this->product_model->getProduct($id);
        echo view('product/show', $data);
    }


    public function edit($id)
    {
        $model = new Admin_model();
        $data['users'] = $model->getAdmin($id)->getRowArray();
        echo view('adminconfig/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');

        $validation =  \Config\Services::validation();

        // get file
        $image = $this->request->getFile('image');
        // random name file
        $name = $image->getRandomName();

        $data = array(
            'id'           => $this->request->getPost('id'),
            'email'          => $this->request->getPost('email'),
            'username'         => $this->request->getPost('username'),
            'phone'           => $this->request->getPost('phone'),
            'address'        => $this->request->getPost('address'),
            'image'         => $name,
        );

        if ($validation->run($data, 'adminconfig') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('adminconfig/' . $id));
        } else {
            // upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            // update
            $ubah = $this->admin_model->updateAdmin($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Admin successfully');
                return redirect()->to(base_url('adminconfig/'));
            }
        }
    }

    public function delete($id)
    {
        $hapus = $this->admin_model->deleteAdmin($id);
        if ($hapus) {
            // session()->setFlashdata('warning', 'Deleted Product successfully');
            return redirect()->to(base_url('adminconfig/'));
        }
    }
}

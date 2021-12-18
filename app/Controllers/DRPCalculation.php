<?php

namespace App\Controllers;

use App\Models\drp_model;
use App\Models\Profile_model;

class DRPCalculation extends BaseController
{
    public function index()
    {
        $model1 = new drp_model();
        $data['data'] = $model1->getOrder(12121212)->getRowArray();
        $data['status'] = "index";
        echo view('DRPCalculation/index', $data);
    }

    public function total55($id)
    {
        $model1 = new drp_model();
        $data['data'] = $model1->getOrder($id)->getRowArray();
        $data['status'] = "order_55";
        $data['drp'] = "drp_55";
        echo view('DRPCalculation/drpTotal', $data);
    }
    public function total12($id)
    {
        $model1 = new drp_model();
        $data['data'] = $model1->getOrder($id)->getRowArray();
        $data['status'] = "order_12";
        $data['drp'] = "drp_12";
        echo view('DRPCalculation/drpTotal', $data);
    }

    public function drp55($id)
    {
        $model1 = new drp_model();
        $data['data'] = $model1->getOrder($id)->getRowArray();
        $data['status'] = "order_55";
        $data['drp'] = "drp_55";
        echo view('DRPCalculation/index', $data);
    }

    public function drp12($id)
    {
        $model1 = new drp_model();
        $data['data'] = $model1->getOrder($id)->getRowArray();
        $data['status'] = "order_12";
        $data['drp'] = "drp_12";
        echo view('DRPCalculation/index', $data);
    }

    public function tampil55($id)
    {
        $model1 = new drp_model();
        $data['data'] = $model1->getOrder($id)->getRowArray();
        $data['status'] = "order_55";
        $data['drp'] = "drp_55";
        $data['judul'] = "Analisa DRP Outlet 5,5 Kg";
        echo view('DRPCalculation/tampilDrp', $data);
    }

    public function tampil12($id)
    {
        $model1 = new drp_model();
        $data['data'] = $model1->getOrder($id)->getRowArray();
        $data['status'] = "order_12";
        $data['drp'] = "drp_12";
        $data['judul'] = "Analisa DRP Outlet 12 Kg";
        echo view('DRPCalculation/tampilDrp', $data);
    }


    public function pusat55()
    {

        $data['status'] = "order_55";
        $data['drp'] = "drp_55";
        $data['judul'] = "Analisa DRP Pusat 5,5 Kg";
        echo view('DRPCalculation/tampilanPusat', $data);
    }

    public function pusat12()
    {
        $data['status'] = "order_12";
        $data['drp'] = "drp_12";
        $data['judul'] = "Analisa DRP Pusat 12 Kg";
        echo view('DRPCalculation/tampilanPusat', $data);
    }
}

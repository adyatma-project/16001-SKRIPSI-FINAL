<?php

namespace App\Controllers;

class Android_tambah extends BaseController
{
    public function index()
    {
        echo view('android/tambah');
    }

    public function order()
    {
        echo view('android/order');
    }
    public function detailOrder()
    {
        echo view('android/DetailOrder');
    }
    public function addOrder()
    {
        echo view('android/addOrder');
    }

    public function cancel()
    {
        echo view('android/cancel');
    }
}

<?php

namespace App\Controllers;

use App\Models\Information_model;
use App\Models\OrderTransaction_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class OrderTransaction extends BaseController
{

    public function __construct()
    {
        require_once APPPATH . 'ThirdParty/ssp.class.php';
        $this->db = db_connect();
    }


    public function exportExcel()
    {

        $mobil = new OrderTransaction_model();
        $dataMobil = $mobil->getOrder();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Outlet')
            ->setCellValue('B1', 'Waktu Order')
            ->setCellValue('C1', 'Alamat Order')
            ->setCellValue('D1', 'Nomor Telepon')
            ->setCellValue('E1', 'Order 5,5 Kg')
            ->setCellValue('F1', 'Order 12 Kg');


        $column = 2;
        // tulis data mobil ke cell
        foreach ($dataMobil as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['nama_outlet'])
                ->setCellValue('B' . $column, $data['waktu_order'])
                ->setCellValue('C' . $column, $data['alamat_order'])
                ->setCellValue('D' . $column, $data['no_telp'])
                ->setCellValue('E' . $column, $data['order_55'])
                ->setCellValue('F' . $column, $data['order_12']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Seluruh Transaksi';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }




    public function export_55()
    {

        $mobil = new OrderTransaction_model();
        $dataMobil = $mobil->order_55();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Outlet')
            ->setCellValue('B1', 'Waktu Order')
            ->setCellValue('C1', 'Alamat Order')
            ->setCellValue('D1', 'Nomor Telepon')
            ->setCellValue('E1', 'Order 5,5 Kg');


        $column = 2;
        foreach ($dataMobil as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['nama_outlet'])
                ->setCellValue('B' . $column, $data['waktu_order'])
                ->setCellValue('C' . $column, $data['alamat_order'])
                ->setCellValue('D' . $column, $data['no_telp'])
                ->setCellValue('E' . $column, $data['order_55']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Order Belum Dikonfirmasi 5.5 Kg';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save("php://output");
    }


    public function exportkonfir()
    {

        $mobil = new OrderTransaction_model();
        $dataMobil = $mobil->order_konfirmasi();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Outlet')
            ->setCellValue('B1', 'Waktu Order')
            ->setCellValue('C1', 'Alamat Order')
            ->setCellValue('D1', 'Nomor Telepon')
            ->setCellValue('E1', 'Order 5,5 Kg')
            ->setCellValue('F1', 'Order 12 Kg');


        $column = 2;
        foreach ($dataMobil as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['nama_outlet'])
                ->setCellValue('B' . $column, $data['waktu_order'])
                ->setCellValue('C' . $column, $data['alamat_order'])
                ->setCellValue('D' . $column, $data['no_telp'])
                ->setCellValue('E' . $column, $data['order_55'])
                ->setCellValue('F' . $column, $data['order_12']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Order Belum Dikonfirmasi';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }




    public function exportpilih()
    {

        $mobil = new OrderTransaction_model();
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $dataMobil = $mobil->order_pilih($bulan, $tahun);

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Outlet')
            ->setCellValue('B1', 'Waktu Order')
            ->setCellValue('C1', 'Alamat Order')
            ->setCellValue('D1', 'Nomor Telepon')
            ->setCellValue('E1', 'Order 5,5 Kg')
            ->setCellValue('F1', 'Order 12 Kg');


        $column = 2;
        foreach ($dataMobil as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['nama_outlet'])
                ->setCellValue('B' . $column, $data['waktu_order'])
                ->setCellValue('C' . $column, $data['alamat_order'])
                ->setCellValue('D' . $column, $data['no_telp'])
                ->setCellValue('E' . $column, $data['order_55'])
                ->setCellValue('F' . $column, $data['order_12']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Order Belum Dikonfirmasi';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }


    public function exportproses()
    {

        $mobil = new OrderTransaction_model();
        $dataMobil = $mobil->order_proses();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Outlet')
            ->setCellValue('B1', 'Waktu Order')
            ->setCellValue('C1', 'Alamat Order')
            ->setCellValue('D1', 'Nomor Telepon')
            ->setCellValue('E1', 'Order 5,5 Kg')
            ->setCellValue('F1', 'Order 12 Kg');


        $column = 2;
        foreach ($dataMobil as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['nama_outlet'])
                ->setCellValue('B' . $column, $data['waktu_order'])
                ->setCellValue('C' . $column, $data['alamat_order'])
                ->setCellValue('D' . $column, $data['no_telp'])
                ->setCellValue('E' . $column, $data['order_55'])
                ->setCellValue('F' . $column, $data['order_12']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Order Belum Di Antar';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }


    public function all()
    {
        return view("ordertransaction/index");
    }




    public function five()
    {
        $data['status'] = "Order 5,5 Kg";
        return view("ordertransaction/order55", $data);
    }
    public function twelve()
    {
        $data['status'] = "Order 12 Kg";
        return view("ordertransaction/order12", $data);
    }





    public function fivedrive()
    {
        $data['status'] = "Order 5,5 Kg";
        return view("ordertransaction/order55drive", $data);
    }
    public function twelvedrive()
    {
        $data['status'] = "Order 12 Kg";
        return view("ordertransaction/order12drive", $data);
    }








    public function ajaxOrder()
    {
        // this is database details
        $dbDetails = array(
            "host" => $this->db->hostname,
            "user" => $this->db->username,
            "pass" => $this->db->password,
            "db" => $this->db->database,
        );

        $table = "master_order";

        //primary key
        $primaryKey = "id_order";

        $columns = array(

            array(
                "db" => "nama_outlet",
                "dt" => 0,
            ),
            array(
                "db" => "waktu_order",
                "dt" => 1,
            ),
            array(
                "db" => "alamat_order",
                "dt" => 2,
            ),
            array(
                "db" => "no_telp",
                "dt" => 3,
            ),
            array(
                "db" => "order_55",
                "dt" => 4,
            ),
            array(
                "db" => "order_12",
                "dt" => 5,
            ),
            array(
                "db" => "konfirmasi",
                "dt" => 6,
            ),


        );

        echo json_encode(
            \SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
        );
    }
    public function editharga($id)
    {
        $model = new Information_model();
        $data['information'] = $model->getInformation($id)->getRowArray();
        if (isset($data)) {
            echo view('OrderTransaction/editharga', $data);
        } else {
            echo base_url('OrderTransaction/all');
        }
    }


    public function update()
    {
        $id = $this->request->getPost('id');

        $validation =  \Config\Services::validation();

        $data = array(
            'harga_5kg'     => $this->request->getPost('harga_5kg'),
            'harga_12kg'   => $this->request->getPost('harga_12kg'),
            'information'   => $this->request->getPost('information'),
        );


        $model = new Information_model();
        $ubah = $model->updateInformation($data, $id);
        if ($ubah) {
            session()->setFlashdata('success', 'Pembaharuan Informasi Berhasil');
            return redirect()->to(base_url('OrderTransaction/all'));
        }
    }


    public function konfirmasi($id_order){
        $validation =  \Config\Services::validation();

        $data = array(
            'konfirmasi'   => "PROSES",
        );

        $model = new OrderTransaction_model();
        $ubah = $model->konfirmasi($data, $id_order);
        if ($ubah) {
            session()->setFlashdata('success', 'Konfirmasi Order Berhasil');
            return redirect()->to(base_url('OrderTransaction/five'));
        }
    }





    public function proses($id_order){
        $validation =  \Config\Services::validation();

        $data = array(
            'konfirmasi'   => "YA",
        );

        $model = new OrderTransaction_model();
        $ubah = $model->konfirmasi($data, $id_order);
        if ($ubah) {
            session()->setFlashdata('success', 'Proses Order Berhasil');
            return redirect()->to(base_url('OrderTransaction/fivedrive'));
        }
    }



    
}

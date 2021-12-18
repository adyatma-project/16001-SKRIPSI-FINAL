<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>





    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin: 5px;">
        <h1 class="h3 mb-0 text-gray-800"> Beranda</h1>
    </div>

<div class="row" style="margin: 5px;">

<div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Menunggu Konfirmasi (5,5 Kg)</div>
                            <div class="h5 mb-0 font-weight-bold text-black-800">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                // $builder->like('nama_outlet', 'ADYATMA');
                                // $builder->where('order_55 >', 0);
                                $builder->where('konfirmasi =', 'TIDAK');
                                $builder->selectSum('order_55');
                                $query = $builder->get();

                                foreach ($query->getResult() as $row) {
                                    $a55 = $row->order_55;
                                    $b55 = $a55 - 0;
                                    echo $b55;
                                }
                                ?> Tabung</div>
                            <a href="<?php echo base_url('ordertransaction/five'); ?>" class="btn btn-info btn-sm mt-3">
                                <i class="fas fa-eye"></i>
                                Tampilkan Order </a>
                        </div>

                        <div class="col-auto">

                            <i class="fas fa-cart-arrow-down fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Menunggu Konfirmasi (12 Kg)</div>
                            <div class="h5 mb-0 font-weight-bold text-black-800">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                // $builder->like('nama_outlet', 'ADYATMA');
                                // $builder->where('order_55 >', 0);
                                $builder->selectSum('order_12');
                                $builder->where('konfirmasi =', 'TIDAK');
                                $query = $builder->get();
                                foreach ($query->getResult() as $row) {
                                    $a12 = $row->order_12;
                                    $b12 = $a12 - 0;
                                    echo $b12;
                                }
                                ?> Tabung
                            </div>
                            <a href="<?php echo base_url('ordertransaction/twelve'); ?>" class="btn btn-info btn-sm mt-3"> <i class="fas fa-eye"></i> Tampilkan Order</a>
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-cart-arrow-down fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</div>


    <div class="row" style="margin: 5px;">

    <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               Order Belum Diantar (5,5 Kg)</div>
                            <div class="h5 mb-0 font-weight-bold text-black-800">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                // $builder->like('nama_outlet', 'ADYATMA');
                                // $builder->where('order_55 >', 0);
                                $builder->selectSum('order_55');
                                $builder->where('konfirmasi =', 'PROSES');
                                $query = $builder->get();
                                foreach ($query->getResult() as $row) {
                                    $a12 = $row->order_55;
                                    $b12 = $a12 - 0;
                                    echo $b12;
                                }
                                ?> Tabung
                            </div>
                            <a href="<?php echo base_url('ordertransaction/fivedrive'); ?>" class="btn btn-info btn-sm mt-3"> <i class="fas fa-eye"></i> Tampilkan Order</a>
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Order Belum Diantar (12 Kg)</div>
                            <div class="h5 mb-0 font-weight-bold text-black-800">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                // $builder->like('nama_outlet', 'ADYATMA');
                                // $builder->where('order_55 >', 0);
                                $builder->selectSum('order_12');
                                $builder->where('konfirmasi =', 'PROSES');
                                $query = $builder->get();
                                foreach ($query->getResult() as $row) {
                                    $a12 = $row->order_12;
                                    $b12 = $a12 - 0;
                                    echo $b12;
                                }
                                ?> Tabung
                            </div>
                            <a href="<?php echo base_url('ordertransaction/twelvedrive'); ?>" class="btn btn-info btn-sm mt-3"> <i class="fas fa-eye"></i> Tampilkan Order</a>
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <div class="row" style="margin: 5px;">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Total Transaksi
                                5,5
                                Kg</div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                // $builder->like('nama_outlet', 'ADYATMA');
                                // $builder->where('order_55 >', 0);
                                $builder->where('konfirmasi =', 'YA');
                                $builder->selectSum('order_55');
                                $query = $builder->get();
                                foreach ($query->getResult() as $row) {
                                    echo $row->order_55;
                                }
                                ?> Tabung</div>
                        </div>
                        <div class="col-auto">
                            <img src="<?= base_url(); ?>/img/5.png" alt="" style="width:100px;height:115px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Total Transaksi
                                12 Kg
                            </div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                // $builder->like('nama_outlet', 'ADYATMA');
                                // $builder->where('order_55 >', 0);
                                $builder->where('konfirmasi =', 'YA');
                                $builder->selectSum('order_12');
                                $query = $builder->get();
                                foreach ($query->getResult() as $row) {
                                    echo $row->order_12;
                                }
                                ?> Tabung</div>
                        </div>
                        <div class="col-auto">
                            <img src="<?= base_url(); ?>/img/12.png" alt="" style="width:150px;height:120px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <div class="row" style="margin: 5px;">
            <div class="col-lg-12" >

                <div class="card mb-4">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik Transaksi Bright Gas 5,5 Kg Tahun <?php $thn = date('Y'); echo $thn; ?></h6>
                        </div>
                        <div class="card-body">
                       
    <canvas id="chart5" ></canvas>
    


                        </div>
                    </div>
                </div>
                            </div>
    </div>
     


   






<div class="col-lg-12">

    <div class="card mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Transaksi Bright Gas 12 Kg Tahun <?php $thn = date('Y'); echo $thn; ?></h6>
            </div>
            <div class="card-body">
               
        
    <canvas id="chart12"></canvas>
            </div>
        </div>
    </div>
</div>



    <?= $this->include('templates/footer'); ?>
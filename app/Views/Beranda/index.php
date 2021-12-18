<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Jumlah Transaksi
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
                            <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Jumlah Transaksi
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
        <!-- <div class="row">


            <div class="col-lg-6">

                <div class="card mb-4">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">chart transaction</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="chart5"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">

                <div class="card mb-4">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="myBarChart"></canvas>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <?php
    $db      = \Config\Database::connect();
    $builder = $db->table('master_order');

    for ($i = 1; $i < 13; $i++) {
        $builder->where('bulan =', $i);
        // $builder->where('id_outlet =', 53);
        $builder->where('tahun =', 2019);
        $builder->selectSum('order_55');
        $query = $builder->get();
        foreach ($query->getResultArray() as $row) {
            $data = $row['order_55'];
            // echo $data . ',';
        }
    }
    ?>
    <?= $this->include('templates/footer'); ?>
<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
                </div>

            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary mb-1">Bulan</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">
                                        <?php echo date('F'); ?>

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary  mb-1">Tahun</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">
                                        <?php echo date('Y'); ?>

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary mb-1">Total Outlet Belum DRP 5,5 Kg</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                        $date = new DateTime('now', new DateTimeZone('Asia/Singapore'));


                                        $db      = \Config\Database::connect();
                                        $builder551 = $db->table('drp_55');
                                        $builder552 = $db->table('outlet_list');
                                        $bulan = $date->format('n');
                                        $tahun = $date->format('Y');
                                        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
                                        // $builder->where($array);
                                        // $builder->like('nama_outlet', 'ADYATMA');
                                        // $builder->where('order_55 >', 0);
                                        // $builder->where('konfirmasi =', 'TIDAK');

                                        $builder551->where('bulan =', $bulan);
                                        $builder551->where('tahun =', $tahun);
                                        // $builder551->where('done55 =', 'YA');

                                        $query1 = $builder551->countAllResults();
                                        $query2 = $builder552->countAllResults();
                                        echo $query2 - $query1, '  Outlet';
                                        ?>



                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary  mb-1">Total Outlet Belum DRP 12 Kg</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                        $date = new DateTime('now', new DateTimeZone('Asia/Singapore'));

                                        $db      = \Config\Database::connect();
                                        $builder1 = $db->table('drp_12');
                                        $builder2 = $db->table('outlet_list');
                                        $bulan = $date->format('n');
                                        $tahun = $date->format('Y');
                                        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
                                        // $builder->where($array);
                                        // $builder->like('nama_outlet', 'ADYATMA');
                                        // $builder->where('order_55 >', 0);
                                        // $builder->where('konfirmasi =', 'TIDAK');

                                        $builder1->where('bulan =', $bulan);
                                        $builder1->where('tahun =', $tahun);
                                        // $builder1->where('done12 =', 'YA');

                                        $query1 = $builder1->countAllResults();
                                        $query2 = $builder2->countAllResults();

                                        echo $query2 - $query1, '  Outlet';
                                        ?>


                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">

                <div class="col align-self-end">

                    <div class="btn-group float-left">
                        <?php
                        $date = new DateTime('now', new DateTimeZone('Asia/Singapore'));
                        $db      = \Config\Database::connect();
                        $buildercek = $db->table('outlet_list');
                        $builderbtn55 = $db->table('drp_55');
                        $builderbtn12 = $db->table('drp_12');
                        $bulan = $date->format('n');
                        $tahun = $date->format('Y');
                        // $array = ['name' => $name, 'title' => $title, 'status' => $status];
                        // $builder->where($array);
                        // $builder->like('nama_outlet', 'ADYATMA');
                        // $builder->where('order_55 >', 0);
                        // $builder->where('konfirmasi =', 'TIDAK');

                        $builderbtn55->where('bulan =', $bulan);
                        $builderbtn55->where('tahun =', $tahun);
                        // $builder2->where('done55 =', 'YA');

                        $builderbtn12->where('bulan =', $bulan);
                        $builderbtn12->where('tahun =', $tahun);
                        // $builder3->where('done12 =', 'YA');

                        $query1 = $buildercek->countAllResults();
                        $query2 = $builderbtn55->countAllResults();
                        $query3 = $builderbtn12->countAllResults();
                        $hitung55 = $query1 - $query2;
                        $hitung12 = $query1 - $query3;

                        if ($hitung55 == 0) {

                            echo '<a href="' . base_url('DRPCalculation/pusat55/') . '"   class="btn btn-primary">
                                <i class="fas fa-calculator"></i> Hitung DRP Pusat 5,5 Kg
                                </a>';
                        } else {
                            echo '<a href="#"  disabled class="btn btn-primary">
                                <i class="fas fa-calculator"></i> Hitung DRP Pusat 5,5 Kg
                                </a>';
                        }

                        if ($hitung12 == 0) {
                            echo '<a href="' . base_url('DRPCalculation/pusat12/') . '"   class="btn btn-success">
                                <i class="fas fa-calculator"></i> Hitung DRP Pusat 12 Kg
                                </a>';
                        } else {
                            echo '<a href="#"  disabled  class="btn btn-success">
                                <i class="fas fa-calculator"></i> Hitung DRP Pusat 12 Kg
                                </a>';
                        }
                        ?>




                        <!-- <div class="dropdown no-arrow">
                            <button class="btn btn-secondary dropdown-toggle" style="margin-right:10px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sort"></i>
                                Hitung Menurut
                            </button>
                            <a href="" class="btn btn-primary">Bulan <?php echo date('F'); ?></a>
                            <a href="" class="btn btn-primary">Tahun <?php echo date('Y'); ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item btn btn-info" href="<?php echo base_url(''); ?>">Bright Gas 5,5 Kg</a>
                                <a class="dropdown-item btn btn-info" href="<?php echo base_url(''); ?>">Bright Gas 12 Kg</a>
                                <a class="dropdown-item" href="#"></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <br>


            <?php
            if ($status == "order_55" || $status == "order_12") {

            ?>
                <br>


                <br>



                <h4 style="text-align:left" class="m-0 align-content-lg-center font-weight-bold text-primary">I. Analisa DRP <i>(Distribution Requirement Planning Table)</i> Pusat </h4>

                <div class="table-responsive">
                    <div class="dropdown-divider"></div>
                    <br>
                    <table class="table table-bordered" id="DRPTABLE" width="100%" cellspacing="10px">
                        <tr>
                            <th style="text-align:center;  white-space: nowrap; vertical-align: middle;" class="font-weight-thin text-primary" colspan="8" rowspan="2">
                                <?php


                                if ($status == "order_12") {
                                    echo "<h2>Hitung Pusat 12 Kg</h2>";
                                } else if ($status == "order_55") {
                                    echo "<h2>Hitung Pusat 5,5 Kg</h2>";
                                } else {
                                    echo "-";
                                }
                                ?>

                            </th>

                            <th style="text-align:center" colspan="100%">Periode</th>
                        </tr>
                        <tr>
                            <th style='text-align:center;  white-space: nowrap;'>PD</th>

                            <?php
                            $loop1 = 0;
                            while ($loop1 < 4) {
                                $loop2 = $loop1 + 1;
                                $bulanstr = date('n / Y', strtotime("+$loop2 month"));
                                //$bulan = (int) $bulanstr;
                                echo "<th style='text-align:center;  white-space: nowrap;'>";
                                echo $bulanstr;
                                echo "</th>";
                                $loop1++;
                            }
                            ?>





                        </tr>
                        <tr>
                            <th colspan="8" style="text-align:center;  white-space: nowrap;">Gross Requirement</th>
                            <td style='text-align:center;  white-space: nowrap;'></td>

                            <?php
                            $array_pusat = array();
                            $db      = \Config\Database::connect();
                            //1
                            $builder1 = $db->table($drp);
                            $builder1->selectSum('nilai_1');
                            $hasil_1 = $builder1->get();
                            foreach ($hasil_1->getResultArray() as $row) {
                                array_push($array_pusat, $row['nilai_1']);
                            }

                            //2
                            $builder2 = $db->table($drp);
                            $builder2->selectSum('nilai_2');
                            $hasil_2 = $builder2->get();
                            foreach ($hasil_2->getResultArray() as $row) {
                                array_push($array_pusat, $row['nilai_2']);
                            }
                            //3
                            $builder3 = $db->table($drp);
                            $builder3->selectSum('nilai_3');
                            $hasil_3 = $builder3->get();
                            foreach ($hasil_3->getResultArray() as $row) {
                                array_push($array_pusat, $row['nilai_3']);
                            }
                            //4
                            $builder4 = $db->table($drp);
                            $builder4->selectSum('nilai_4');
                            $hasil_4 = $builder4->get();
                            foreach ($hasil_4->getResultArray() as $row) {
                                array_push($array_pusat, $row['nilai_4']);
                            }
                           
                            foreach ($array_pusat as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo $valuedrp;
                                echo "</td>";
                            }

                            ?>


                        </tr>

                        <tr>
                            <th colspan="8" style="text-align:center;  white-space: nowrap;">Projected On Hand</th>
                            <!-- <td style='text-align:center;  white-space: nowrap;'></td> -->
                            <?php
                            foreach ($array_pusat as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo 0;
                                echo "</td>";
                            }
                            ?>
                            <td style='text-align:center;  white-space: nowrap;'>0</td>

                        </tr>
                        <tr>
                            <th colspan="8" style="text-align:center;  white-space: nowrap;">Net Requirement</th>

                            <td style='text-align:center;  white-space: nowrap;'></td>
                            <?php
                            foreach ($array_pusat as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo $valuedrp;
                                echo "</td>";
                            }
                            ?>

                        </tr>
                        <tr>
                            <th colspan="8" style="text-align:center;  white-space: nowrap;">Plan Order Receipt</th>

                            <td style='text-align:center;  white-space: nowrap;'></td>
                            <?php foreach ($array_pusat as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo $valuedrp;
                                echo "</td>";
                            } ?>


                        </tr>
                        <tr>
                            <th colspan="8" style="text-align:center;  white-space: nowrap;">Plan Order Release</th>

                            <!-- <td style='text-align:center;  white-space: nowrap;'></td> -->
                            <?php
                            foreach ($array_pusat as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo $valuedrp;
                                echo "</td>";
                            }
                            ?>
                            <td style='text-align:center;  white-space: nowrap;'>-</td>

                        </tr>

                    </table>
                </div>

            <?php } ?>


            <br>
            <br>


            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <h4 class="m-0 align-content-lg-center font-weight-bold text-primary">Tabel Daftar Outlet</h4>

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Outlet</th>
                            <th>Waktu Order</th>
                            <th>Jumlah Order 5,5 Kg</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $db      = \Config\Database::connect();
                        $builder = $db->table('outlet_list');
                        // $builder->like('nama_outlet', 'ADYATMA');
                        // $builder->where('order_55 >', 0);
                        // $builder->where('konfirmasi =', 'TIDAK');
                        $query = $builder->get();
                        $nomor = 0;
                        foreach ($query->getResult() as $key => $row) {
                            echo '<tr>';
                            echo '<td>' . ++$nomor . '</td>';
                            echo '<td>' . $row->name_outlet . '</td>';
                            echo '<td>' . $row->address_outlet . '</td>';
                            echo '<td>' . $row->phone_outlet . '</td>';
                            echo  '<td>';
                            echo '<div class="btn">';

                            $date = new DateTime('now', new DateTimeZone('Asia/Singapore'));
                            $db      = \Config\Database::connect();
                            $builderBtn55 = $db->table('drp_55');
                            $builderBtn55->where('id_outlet', $row->id);
                            $builderBtn55->where('bulan', $date->format('n'));
                            $builderBtn55->where('tahun', $date->format('Y'));

                            if ($builderBtn55->countAllResults() > 0) {

                                echo '<a href="' . base_url('DRPCalculation/tampil55/' . $row->id) . '" class="btn btn-sm btn-success">
                                Tampilkan Analisa 5,5
                                </a>';
                            } else {

                                echo '<a href="' . base_url('DRPCalculation/drp55/' . $row->id) . '" class="btn btn-sm btn-warning">
                                Hitung DRP 5,5 Kg
                                </a>';
                            }


                            $builderBtn12 = $db->table('drp_12');
                            $builderBtn12->where('id_outlet', $row->id);
                            $builderBtn12->where('bulan', $date->format('n'));
                            $builderBtn12->where('tahun', $date->format('Y'));

                            if ($builderBtn12->countAllResults() > 0) {

                                echo '<a href="' . base_url('DRPCalculation/tampil12/' . $row->id) . '" class="btn btn-sm btn-success">
                                Tampilkan Analisa 12 Kg
                                </a>';
                            } else {
                                echo '<div class="btn-group" role="group">';
                                echo '<a href="' . base_url('DRPCalculation/drp12/' . $row->id) . '" class="btn btn-sm btn-warning">
                                Hitung DRP 12 Kg
                                </a>';
                            }





                        ?>




            </div>
            </td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>

    </div>
</div>




</div>
<?= $this->include('templates/footer'); ?>
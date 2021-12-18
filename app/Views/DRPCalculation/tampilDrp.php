<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h3 mb-0 text-gray-800">Analisa DRP</h1>
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

                <div class="row">

                    <h4 style="text-align:left" class="m-0 align-content-lg-center font-weight-bold text-primary">I. <i>Forecasting</i> </h4>


                    <div class="table-responsive">
                        <div class="dropdown-divider"></div>
                        <br>
                        <table class="table table-bordered" id="dataTable" cellspacing="10px" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="text-align:center;  white-space: nowrap; vertical-align: middle;">No.</th>
                                    <th style="text-align:center;  white-space: nowrap; vertical-align: middle;">Bulan / Tahun </th>
                                    <th style="text-align:center;  white-space: nowrap; vertical-align: middle;">Total (Y) </th>
                                    <th style="text-align:center;  white-space: nowrap; vertical-align: middle;">X.Y</th>
                                    <th style="text-align:center;  white-space: nowrap; vertical-align: middle;">X</th>
                                    <th style="text-align:center;  white-space: nowrap; vertical-align: middle;">X2</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $xtambahan = 0;
                                $x = 0;
                                $no = 1;
                                $sigma_y = 0;
                                $sigma_x = 0;
                                $sigma_xy = 0;
                                $sigma_x2 = 0;

                                $a1 = 0;
                                $b1 = 0;
                                $c1 = 0;
                                $a2 = 0;
                                $b2 = 0;
                                $c2 = 0;
                                $b = 0;


                                $array_y = array();
                                $array_xy = array();
                                $array_x = array();
                                $array_x2 = array();
                                $array_drp = array();

                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                $getId = $data['id_outlet'];
                                // $builder->where('tahun =', 2019, 2020);
                                $builder->where('id_outlet =', $getId);
                                $builder->where('konfirmasi =', 'YA');
                                $getDataArray = $builder->get();

                                foreach ($getDataArray->getResult() as $key => $value) :

                                    $sigma_y += $value->$status;
                                    $sigma_x += $x;
                                    $sigma_xy += ($value->$status) * $x;
                                    $sigma_x2 += pow($x, 2);
                                    $string_y = $value->$status;

                                    $nilai_y = (int)$string_y;
                                    $nilai_xy = $x * ($value->$status);
                                    $nilai_x = $xtambahan = $x++;
                                    $nilai_x2 = pow($xtambahan, 2);

                                    array_push($array_y, $nilai_y);
                                    array_push($array_xy, $nilai_xy);
                                    array_push($array_x, $nilai_x);
                                    array_push($array_x2, $nilai_x2);


                                ?>
                                    <tr>
                                        <td style="text-align:center;  white-space: nowrap; vertical-align: middle;"><?php echo $no++ ?></td>
                                        <td style="text-align:center;  white-space: nowrap; vertical-align: middle;"><?php echo $value->bulan ?> / <?php echo $value->tahun ?></td>
                                        <td style="text-align:center;  white-space: nowrap; vertical-align: middle;"><?php echo $nilai_y; ?></td>
                                        <td style="text-align:center;  white-space: nowrap; vertical-align: middle;"><?php echo $nilai_xy; ?></td>
                                        <td style="text-align:center;  white-space: nowrap; vertical-align: middle;"><?php echo $nilai_x; ?></td>
                                        <td style="text-align:center;  white-space: nowrap; vertical-align: middle;"><?php echo $nilai_x2; ?></td>

                                    </tr>
                                <?php endforeach ?>
                                <?php
                                echo "<h6>&sum;Y =" . array_sum($array_y) . "</h6>";
                                echo "<br>";
                                echo "<h6>&sum;XY =" . array_sum($array_xy) . "</h6>";
                                echo "<br>";
                                echo "<h6>&sum;X =" . array_sum($array_x) . "</h6>";
                                echo "<br>";
                                echo "<h6>&sum;X<sup>2</sup> =" . array_sum($array_x2) . "</h6>";
                                echo "<br>";


                                $ulangi = 0;
                                while ($ulangi < 4) {
                                    $a = end($array_x);
                                    $a1 = $a + 1;
                                    $b1 = array_sum($array_x);;
                                    $c1 = array_sum($array_y);
                                    $a2 = array_sum($array_x);
                                    $b2 = array_sum($array_x2);
                                    $c2 = array_sum($array_xy);

                                    $nilai_b = ($c1 * $a2 - $c2 * $a1) / ($b1 * $a2 - $b2 * $a1);

                                    $nilai_a = ($c1 - $b1 * $nilai_b) / $a1;

                                    $trend = $nilai_a + $nilai_b * $a1;

                                    $hasil_round = floor($trend);
                                    $hasily = (int) $hasil_round;

                                    $add = $ulangi + 1;
                                    $bulanstr = date('n', strtotime("+$add month"));
                                    $bulan = (int) $bulanstr;

                                    $db      = \Config\Database::connect();
                                    $builderBulan = $db->table('master_order');
                                    $builderBulan->where('id_outlet =', $getId);
                                    $builderBulan->where('bulan =', $bulan);
                                    $builderBulan->selectAvg($status);
                                    foreach ($builderBulan->get()->getResult() as $keyBulan => $valueBulan) :
                                        $averageBulan = $valueBulan->$status;
                                    endforeach;

                                    $builderAll = $db->table('master_order');
                                    $builderAll->where('id_outlet =', $getId);

                                    $averageAll = $builderAll->selectAvg($status);
                                    foreach ($builderAll->get()->getResult() as $keyAll => $valueAll) :
                                        $averageAll = $valueAll->$status;
                                    endforeach;

                                    $ratay = $averageBulan /  $averageAll;
                                    $hasilDes = $ratay *  $hasily;
                                    $hasil = round($hasilDes);
                                    $hasils = (int) $hasil;

                                    array_push($array_x, $a1);
                                    if ($ratay == 0) {
                                        array_push($array_y, $hasily);
                                        array_push($array_drp, $hasily);
                                    } else {
                                        array_push($array_y, $hasils);
                                        array_push($array_drp, $hasils);
                                    }
                                    array_push($array_x2, pow($a1, 2));
                                    array_push($array_xy, $a1 * $hasily);
                                    $ulangi++;
                                }

                                // $date = new DateTime('now', new DateTimeZone('Asia/Singapore'));
                                // $waktu = $date->format('j n Y - H:i:s');


                                // $db      = \Config\Database::connect();
                                // $builderdrp = $db->table($drp);
                                // $builderdrp->where('id_outlet', $getId);

                                // if ($builderdrp->countAllResults() <= 0) {
                                //     $dataDrp55 = [
                                //         'id_outlet' => $getId,
                                //         'waktu_analisa'  => $waktu,
                                //         'bulan'  => $date->format('n'),
                                //         'tahun'  => $date->format('Y'),
                                //         'nilai_1'  => $array_drp[0],
                                //         'nilai_2'  => $array_drp[1],
                                //         'nilai_3'  => $array_drp[2],
                                //         'nilai_4'  => $array_drp[3],

                                //     ];
                                //     $builder553 = $db->table($drp);
                                //     $builder553->where('id_outlet', $getId);
                                //     $builder553->insert($dataDrp55);
                                // } else {
                                //     $dataDrp12 = [
                                //         'id_outlet' => $getId,
                                //         'waktu_analisa'  => $waktu,
                                //         'bulan'  => $date->format('n'),
                                //         'tahun'  => $date->format('Y'),
                                //         'nilai_1'  => $array_drp[0],
                                //         'nilai_2'  => $array_drp[1],
                                //         'nilai_3'  => $array_drp[2],
                                //         'nilai_4'  => $array_drp[3],

                                //     ];
                                //     $builder123 = $db->table($drp);
                                //     $builder123->where('id_outlet', $getId);
                                //     $builder123->update($dataDrp12);
                                // }

                                ?>



                            </tbody>
                        </table>
                    </div>
                    <br>


                </div>

                <br>



                <h4 style="text-align:left" class="m-0 align-content-lg-center font-weight-bold text-primary">II. Analisa DRP <i>(Distribution Requirement Planning Table)</i> </h4>

                <div class="table-responsive">
                    <div class="dropdown-divider"></div>
                    <br>
                    <table class="table table-bordered" id="DRPTABLE" width="100%" cellspacing="10px">
                        <tr>
                            <th style="text-align:center;  white-space: nowrap; vertical-align: middle;" class="font-weight-thin text-primary" colspan="8" rowspan="2">
                                <?php


                                if ($status == "order_12") {
                                    echo "<h2>$data[nama_outlet]</h2>";
                                } else if ($status == "order_55") {
                                    echo "<h2>$data[nama_outlet]</h2>";
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
                            foreach ($array_drp as $valuedrp) {
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
                            foreach ($array_drp as $valuedrp) {
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
                            foreach ($array_drp as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo $valuedrp;
                                echo "</td>";
                            }
                            ?>

                        </tr>
                        <tr>
                            <th colspan="8" style="text-align:center;  white-space: nowrap;">Plan Order Receipt</th>

                            <td style='text-align:center;  white-space: nowrap;'></td>
                            <?php
                            foreach ($array_drp as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo $valuedrp;
                                echo "</td>";
                            }
                            ?>

                        </tr>
                        <tr>
                            <th colspan="8" style="text-align:center;  white-space: nowrap;">Plan Order Release</th>

                            <!-- <td style='text-align:center;  white-space: nowrap;'></td> -->
                            <?php
                            foreach ($array_drp as $valuedrp) {
                                echo "<td style='text-align:center;  white-space: nowrap;'>";
                                echo $valuedrp;
                                echo "</td>";
                            }
                            ?>
                            <td style='text-align:center;  white-space: nowrap;'>-</td>

                        </tr>

                    </table>
                </div>

            <?php }
            ?>


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
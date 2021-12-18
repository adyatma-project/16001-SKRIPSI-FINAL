<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>
<?php
$db      = \Config\Database::connect();
?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Transaksi</h1>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Harga Bright Gas 5,5
                                Kg</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                Rp.
                                <?php
                                $query = $db->query('SELECT harga_5kg FROM information LIMIT 1');
                                $row   = $query->getRowArray();
                                echo $row['harga_5kg'];
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

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Harga Bright Gas 12 Kg</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                Rp.
                                <?php
                                $query = $db->query('SELECT harga_12kg FROM information LIMIT 1');
                                $row   = $query->getRowArray();
                                echo $row['harga_12kg'];
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

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
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
                                ?> TBG</div>
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

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
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
                                ?> TBG
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
    <div class="row">
        
    <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
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
                                ?> TBG
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
                                ?> TBG
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-12">
            <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
<div class="row">
  <div class="col-align-self"><a href="<?php echo base_url('ordertransaction/all'); ?>" style="margin-top:5px;" class="  btn btn-primary font-weight-bold"><i class="fas fa-sync-alt"></i> Seluruh Transaksi</a></div>
  <div class="col-align-self"><a href="<?php echo base_url('ordertransaction/editharga/1'); ?>" class="btn btn-warning ml-2" style="margin-top:5px;"><i class="fas fa-money-bill-wave"></i> Ubah Harga </a></div>
  <div class="col-align-self"><form action="<?= base_url('OrderTransaction/exportExcel') ?>" method="POST"><button class="btn btn-success font-weight-bold" style="margin-top:5px; margin-left:5px;" type="submit"><i class="fas fa-file-excel"></i> Unduh Excel All</button></form></div>
            </div>   
            </div>
            
            
            <div class="col-xl-3 col-md-6 mb-4">
<div class="row">
<form action="<?= base_url('OrderTransaction/tampilmenurut') ?>" method="post" lass="form-inline" >
            <div class="form-group">
<div class="col-align-self"><select class="custom-select" name="bulan" id="bulan">
                            <option selected>Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option> 
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option> 
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                            </select></div>
                            <br>

                        <div class="col-align-self"> 
                            <select name="tahun" id="tahun" class="custom-select">
                            <option selected>Tahun</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            </select>
                        
                        </div>

                        <div class="col-align-self"> 
                        <button class="btn btn-success mt-3" type="submit" name="submit" ><i class="fas fa-eye"></i> Tampilkan Data Menurut</button>
                        </div>
            </div>
            </form>

                            </div>
            </div>






            <div class="col-xl-3 col-md-6 mb-4">
<div class="row">
<form action="<?= base_url('OrderTransaction/exportpilih') ?>" method="post" lass="form-inline" >
            <div class="form-group">
<div class="col-align-self"><select class="custom-select" name="bulan" id="bulan">
                            <option selected>Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option> 
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option> 
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                            </select></div>
                            <br>

  <div class="col-align-self"> 
                            <select name="tahun" id="tahun" class="custom-select">
                            <option selected>Tahun</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            </select>
                        
                        </div>
            </div>
            <div class="col-align-self"> 
            <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-file-excel"></i> Unduh Excel Menurut</button>
                    
                        </div>
            
            </form>

                            </div>
            </div>








            
        </div>
        <div class="card-body">
            <?php
            if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php } ?>

            <?php if (!empty(session()->getFlashdata('info'))) { ?>
                <div class="alert alert-info">
                    <?php echo session()->getFlashdata('info'); ?>
                </div>
            <?php } ?>

            <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                <div class="alert alert-warning">
                    <?php echo session()->getFlashdata('warning'); ?>
                </div>
            <?php } ?>

            <div class="card shadow mb-4">



                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi Bulan <?= $bln; ?> Tahun <?= $thn; ?></h6>

                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Outlet</th>
                                    <th>Waktu Order</th>
                                    <th>Alamat Order</th>
                                    <th>Nomor Telepon</th>
                                    <th>Jumlah Order 5,5 Kg</th>
                                    <th>Jumlah Order 12 Kg</th>
                                  
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('master_order');
                                // $builder->like('nama_outlet', 'ADYATMA');
                                // $builder->where('order_55 >', 0);
                                $builder->where('bulan =', $bln);
                                $builder->where('tahun =', $thn);
                                $query = $builder->get();
                                $nomor = 0;
                                foreach ($query->getResult() as $key => $row) { ?>
                                    <tr>
                                        <td><?php echo ++$nomor; ?></td>
                                        <td><?php echo $row->nama_outlet ?></td>
                                        <td><?php echo $row->waktu_order ?></td>
                                        <td><?php echo $row->alamat_order ?></td>
                                        <td><?php echo $row->no_telp ?></td>
                                        <td><?php echo $row->order_55 ?></td>
                                        <td><?php echo $row->order_12 ?></td>
                                       
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>



            <?php
            function all()
            {
                echo ' <div class="table-responsive">';
                echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';

                $db      = \Config\Database::connect();
                $builder = $db->table('master_order');
                // $builder->like('nama_outlet', 'ADYATMA');
                // $builder->where('order_55 >', 0);
                // $builder->where('konfirmasi =', 'TIDAK');
                $query = $builder->get();

                echo '<h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Daftar Order</h6>';
                echo '<div class="dropdown-divider"></div>';
                echo "<thead>";
                echo "<tr>";
                echo "<th class='text-center'>No. </th>";
                echo "<th class='text-center'>Nama Outlet</th>";
                echo "<th class='text-center'>Waktu Order</th>";
                echo "<th class='text-center'>Order 5,5 Kg</th>";
                echo "<th class='text-center'>Order 12 Kg</th>";
                echo "<th class='text-center'>Total Pembayaran</th>";
                echo "<th class='text-center'>Konfirmasi</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                foreach ($query->getResult() as $key => $row) {
                    echo "<tr>";
                    $a = $key + 1;
                    echo "<td class='text-center'> $a </td>";
                    echo "<td class='text-center'>$row->nama_outlet</td>";
                    echo "<td class='text-center'>$row->waktu_order</td>";
                    echo "<td class='text-center'>$row->order_55 Tabung</td>";
                    echo "<td class='text-center'>$row->order_12 Tabung</td>";
                    echo "<td class='text-center'>Rp. </td>";
                    if ($row->konfirmasi == "YA") {

                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-success'><i class='fas fa-check-circle'></i> Konfirmasi</a>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-primary'><i class='fas fa-info-circle'></i> Detail</a>
                                </td></div>";
                    } else if ($row->konfirmasi == "TIDAK") {
                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-warning'><i class='fas fa-times-circle'></i> Belum Dikonfirmasi</a>
                                
                                </td></div>";
                    }
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "  </table>";
                echo "   </div>";
            }


            function show5kg()
            {
                $db      = \Config\Database::connect();
                $builder = $db->table('outlet_list');
                // $builder->like('nama_outlet', 'ADYATMA');
                // $builder->where('order_55 >', 0);
                // $builder->where('konfirmasi =', 'TIDAK');
                $query = $builder->get();
                echo '<div class="table-responsive">';
                echo ' <table class="table table-bordered table-hovered">';
                echo "<thead>";
                echo "<tr>";
                echo '<th width="10px" class="text-center">No</th>';

                echo '<th>Name</th>';

                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                $nomor = 0;
                foreach ($query->getResult() as $key => $row) {

                    echo '<tr>';
                    $a = $key + 1;
                    echo "<td class='text-center'> $a </td>";
                    echo "<td class='text-center'>$row->name_outlet</td>";

                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            }


            function show12kg()
            {
                $db      = \Config\Database::connect();
                $builder = $db->table('master_order');
                // $builder->like('nama_outlet', 'ADYATMA');
                $builder->where('order_12 >', 0);
                $builder->where('konfirmasi =', 'TIDAK');
                $query = $builder->get();

                echo '<h6 class="m-0 font-weight-bold text-primary">Daftar Order 12 Kg Belum Dikonfirmasi</h6>';
                echo '<div class="dropdown-divider"></div>';
                echo "<thead>";
                echo "<tr>";
                echo "<th align='center'>No. </th>";
                echo "<th>Nama Outlet</th>";
                echo "<th>Waktu Order</th>";
                echo "<th>Order 5,5 Kg</th>";
                echo "<th>Order 12 Kg</th>";
                echo "<th>Total Pembayaran</th>";
                echo "<th>Konfirmasi</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($query->getResult() as $key => $row) {
                    echo "<tr>";
                    $a = $key + 1;
                    echo "<td>$a</td>";
                    echo "<td>$row->nama_outlet</td>";
                    echo "<td>$row->waktu_order</td>";
                    echo "<td>$row->order_55</td>";
                    echo "<td>$row->order_12</td>";
                    echo "<td></td>";
                    if ($row->konfirmasi == "YA") {
                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-success'><i class='fas fa-check-circle'></i> Konfirmasi</a>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-primary'><i class='fas fa-info-circle'></i> Detail</a>
                                </td></div>";
                    } else if ($row->konfirmasi == "TIDAK") {
                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-warning'><i class='fas fa-times-circle'></i> Belum Dikonfirmasi</a>
                                
                                </td></div>";
                    }
                    echo "</tr>";
                    echo "</tbody>";
                }
            }

            function confirm()
            {
                $db      = \Config\Database::connect();
                $builder = $db->table('master_order');
                // $builder->like('nama_outlet', 'ADYATMA');
                // $builder->where('order_55 >', 0);
                $builder->where('konfirmasi =', 'YA');
                $query = $builder->get();

                echo '<h6 class="m-0 font-weight-bold text-primary">Daftar Order Sudah Dikonfirmasi</h6>';
                echo '<div class="dropdown-divider"></div>';
                echo "<thead>";
                echo "<tr>";
                echo "<th align='center'>No. </th>";
                echo "<th>Nama Outlet</th>";
                echo "<th>Waktu Order</th>";
                echo "<th>Order 5,5 Kg</th>";
                echo "<th>Order 12 Kg</th>";
                echo "<th>Total Pembayaran</th>";
                echo "<th>Konfirmasi</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($query->getResult() as $key => $row) {
                    echo "<tr>";
                    $a = $key + 1;
                    echo "<td>$a</td>";
                    echo "<td>$row->nama_outlet</td>";
                    echo "<td>$row->waktu_order</td>";
                    echo "<td>$row->order_55</td>";
                    echo "<td>$row->order_12</td>";
                    echo "<td></td>";
                    if ($row->konfirmasi == "YA") {
                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-success'><i class='fas fa-check-circle'></i> Konfirmasi</a>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-primary'><i class='fas fa-info-circle'></i> Detail</a>
                                </td></div>";
                    } else if ($row->konfirmasi == "TIDAK") {
                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-warning'><i class='fas fa-times-circle'></i> Belum Dikonfirmasi</a>
                                
                                </td></div>";
                    }
                    echo "</tr>";
                    echo "</tbody>";
                }
            }


            function nullconfirm()
            {
                $db      = \Config\Database::connect();
                $builder = $db->table('master_order');
                // $builder->like('nama_outlet', 'ADYATMA');
                // $builder->where('order_55 >', 0);
                $builder->where('konfirmasi =', 'TIDAK');
                $query = $builder->get();

                echo '<h6 class="m-0 font-weight-bold text-primary">Daftar Order Belum Dikonfirmasi</h6>';
                echo '<div class="dropdown-divider"></div>';
                echo "<thead>";
                echo "<tr>";
                echo "<th align='center'>No. </th>";
                echo "<th>Nama Outlet</th>";
                echo "<th>Waktu Order</th>";
                echo "<th>Order 5,5 Kg</th>";
                echo "<th>Order 12 Kg</th>";
                echo "<th>Total Pembayaran</th>";
                echo "<th>Konfirmasi</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($query->getResult() as $key => $row) {
                    echo "<tr>";
                    $a = $key + 1;
                    echo "<td>$a</td>";
                    echo "<td>$row->nama_outlet</td>";
                    echo "<td>$row->waktu_order</td>";
                    echo "<td>$row->order_55</td>";
                    echo "<td>$row->order_12</td>";
                    echo "<td></td>";
                    if ($row->konfirmasi == "YA") {
                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-success'><i class='fas fa-check-circle'></i> Konfirmasi</a>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-primary'><i class='fas fa-info-circle'></i> Detail</a>
                                </td></div>";
                    } else if ($row->konfirmasi == "TIDAK") {
                        echo "<td><div class='btn-group'>
                                <a href=\"delete_purchase/" . $row->nama_outlet . "\" class='btn btn-warning'><i class='fas fa-times-circle'></i> Belum Dikonfirmasi</a>
                                
                                </td></div>";
                    }
                    echo "</tr>";
                    echo "</tbody>";
                }
            }

            if (isset($_GET['all'])) {
                all();
            }

            if (isset($_GET['show5kg'])) {
                show5kg();
            }

            if (isset($_GET['show12kg'])) {
                show12kg();
            }

            if (isset($_GET['confirm'])) {
                confirm();
            }

            if (isset($_GET['nullconfirm'])) {
                nullconfirm();
            }

            ?>


        </div>
    </div>

</div>

<?= $this->include('templates/footer'); ?>
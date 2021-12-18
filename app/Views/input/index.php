<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="h3 mb-0 text-gray-800">Profile Admin</h1>
                </div>
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div> -->
            </div>
        </div>
    </div>




    <div class="row">
        <h2><?php echo $outlet_list['phone_outlet']; ?></h2>
    </div>


    <div class="row">
        <div class="col-md-12">
            <?php
            $inputs = session()->getFlashdata('inputs');
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                    Whoops! Ada kesalahan saat input data, yaitu:
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php } ?>
            <?php echo form_open_multipart('input/store'); ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php
                                echo form_label('ID OUTLET');
                                $id_outlet = [
                                    'type'  => 'text',
                                    'name'  => 'id_outlet',
                                    'id'    => 'id_outlet',
                                    'value' => $outlet_list['id'],
                                    'class' => 'form-control',
                                    'placeholder' => 'ID Outlet'
                                ];
                                echo form_input($id_outlet);
                                ?>
                            </div>
                            <div class="form-group">
                                <?php
                                echo form_label('Nama Outlet');
                                $nama_outlet = [
                                    'type'  => 'text',
                                    'name'  => 'nama_outlet',
                                    'id'    => 'nama_outlet',
                                    'value' => $outlet_list['name_outlet'],
                                    'class' => 'form-control',
                                    'placeholder' => 'Nama Outlet'
                                ];
                                echo form_input($nama_outlet);
                                ?>
                            </div>
                            <div class="form-group">
                                <?php
                                echo form_label('Alamat Outlet');
                                $alamat_order = [
                                    'type'  => 'text',
                                    'name'  => 'alamat_order',
                                    'id'    => 'alamat_order',
                                    'value' => $outlet_list['address_outlet'],
                                    'class' => 'form-control',
                                    'placeholder' => 'Alamat Order'
                                ];
                                echo form_input($alamat_order);
                                ?>
                            </div>

                            <div class="form-group">
                                <?php
                                echo form_label('No. Telepon');
                                $no_telp = [
                                    'type'  => 'text',
                                    'name'  => 'no_telp',
                                    'id'    => 'no_telp',
                                    'value' => $outlet_list['phone_outlet'],
                                    'class' => 'form-control',
                                    'placeholder' => 'No Telepon'
                                ];
                                echo form_input($no_telp);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">


                            <div class="form-group">
                                <?php
                                echo form_label('Bulan');
                                echo form_dropdown('bulan', ['' => 'Pilih', '1' => 'Januari', '2' => 'Februari', '3' => 'Maret', '4' => 'April', '5' => 'Mei', '6' => 'Juni', '7' => 'Juli', '8' => 'Agustus', '9' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember'], '', ['class' => 'form-control']);
                                ?>
                            </div>
                            <div class="form-group">
                                <?php
                                echo form_label('Tahun');
                                echo form_dropdown('tahun', ['' => 'Pilih', '2018' => '2018', '2019' => '2019', '2020' => '2020', '2021' => '2021'], '', ['class' => 'form-control']);
                                ?>
                            </div>
                            <div class="form-group">
                                <?php
                                echo form_label('Tanggal');
                                $waktu_order = [
                                    'type'  => 'text',
                                    'name'  => 'waktu_order',
                                    'id'    => 'waktu_order',
                                    'value' => '',
                                    'class' => 'form-control',
                                    'placeholder' => ''
                                ];
                                echo form_input($waktu_order);
                                ?>
                            </div>

                            <div class="form-group">
                                <?php
                                echo form_label('Order 5,5 Kg');
                                $order_55 = [
                                    'type'  => 'text',
                                    'name'  => 'order_55',
                                    'id'    => 'order_55',
                                    'value' => '',
                                    'class' => 'form-control',
                                    'placeholder' => ''
                                ];
                                echo form_input($order_55);
                                ?>
                            </div>


                            <div class="form-group">
                                <?php
                                echo form_label('Order 12 Kg');
                                $order_12 = [
                                    'type'  => 'text',
                                    'name'  => 'order_12',
                                    'id'    => 'order_12',
                                    'value' => '',
                                    'class' => 'form-control',
                                    'placeholder' => ''
                                ];
                                echo form_input($order_12);
                                ?>
                            </div>




                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="<?php echo base_url('accountoutlet'); ?>" class="btn btn-outline-info">Back</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>





</div>

<?= $this->include('templates/footer'); ?>
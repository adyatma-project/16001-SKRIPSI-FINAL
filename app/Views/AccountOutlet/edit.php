<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ubah Data Outlet</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Data Outlet Outlet</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('accountoutlet/update'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
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

                                <input type="hidden" name="id" value="<?php echo $outlet_list['id']; ?>">

                                <div class="form-group">
                                    <label for="">Nomor Telepon Outlet</label>
                                    <input type="text" disabled value="<?php echo $outlet_list['phone_outlet']; ?>" class="form-control" name="phone" placeholder="Enter Outlet Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Outlet</label>
                                    <input type="text" value="<?php echo $outlet_list['name_outlet']; ?>" class="form-control" name="name_outlet" placeholder="Enter Outlet Name">
                                </div>

                                <div class="form-group">
                                    <label for="">Address Outlet</label>
                                    <input type="text" value="<?php echo $outlet_list['address_outlet']; ?>" class="form-control" name="address_outlet" placeholder="Enter Outlet Address">
                                </div>


                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('accountoutlet'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->include('templates/footer'); ?>
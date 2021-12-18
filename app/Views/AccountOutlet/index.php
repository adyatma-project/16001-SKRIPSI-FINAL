<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Outlet</h1>


    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Outlet Yang
                                Terdaftar</div>

                            <?php
                            $db      = \Config\Database::connect();
                            $builder = $db->table('outlet_list');
                            ?>
                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?= $builder->countAll(); ?> </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->



    </div>

    <div class="text-right">
        <a href="accountoutlet/create" class="btn btn-success mb-6">+ Tambah Outlet</a>
    </div>
    <hr>
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

    <?php
    $success = session()->getFlashdata('success');

    if (!empty($success)) { ?>
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success'); ?>
        </div>
    <?php } ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Outlet Terdaftar</h6>

        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name Outlet</th>
                            <th>Address Outlet</th>
                            <th>Phone Outlet</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($outlet_list as $key => $row) { ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $row['name_outlet']; ?></td>
                                <td><?php echo $row['address_outlet']; ?></td>
                                <td><?php echo $row['phone_outlet']; ?></td>
                                <td>
                                    <div class="btn">
                                        <a href="<?php echo base_url('accountoutlet/edit/' . $row['id']); ?>" class="btn btn-sm btn-warning">
                                            Ubah<i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?php echo base_url('accountoutlet/delete/' . $row['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Outlet ini?');">
                                            Hapus <i class="fa fa-trash-alt"></i>
                                        </a>

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
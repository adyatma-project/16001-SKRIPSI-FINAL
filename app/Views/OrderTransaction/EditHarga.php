<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ubah Harga</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Harga</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
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
                    <div class="card">

                        <div class="card-header">Form Ubah Harga</div>
                        <div class="card-body">
                            <form action="<?php echo base_url('ordertransaction/update'); ?>" method="post">
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

                                        <input type="hidden" name="id" value="<?php echo $information['id']; ?>">

                                        <div class="form-group">
                                            <label for="">Harga Bright Gas 5,5 Kg</label>
                                            <input type="text" value="<?php echo $information['harga_5kg']; ?>" class="form-control" name="harga_5kg" placeholder="0">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Harga Bright Gas 12 Kg</label>
                                            <input type="text" value="<?php echo $information['harga_12kg']; ?>" class="form-control" name="harga_12kg" placeholder="0">
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo base_url('ordertransaction/all'); ?>" class="btn btn-outline-info">Kembali</a>
                                        <button type="submit" class="btn btn-success float-right">Perbarui Harga</button>
                                    </div>
                                </div>
                            </form>



                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('templates/footer'); ?>
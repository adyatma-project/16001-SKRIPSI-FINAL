<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>


<br>
<br>
<br>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Akun</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="content">

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
                        <!-- <h2 class="card-header"><?= lang('Auth.register') ?></h2> -->
                        <div class="card-body">

                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <?php echo form_open_multipart('adminconfig/update/' . $users['id']); ?>

                            <?php echo form_hidden('id', $users['id']); ?>
                            <div class="form-group">
                                <br>
                                <img src="<?php echo base_url('uploads/' . $users['image']) ?>" class="img-fluid" width="150" height="150">
                                <br>
                                <br>
                                <?php
                                echo form_label('Foto Profile');
                                ?>
                                <br>
                                <?php
                                echo form_upload('image', $users['image']);
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <?php echo form_input('email', $users['email'], ['class' => 'form-control', 'placeholder' => 'Email Address']); ?>
                                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <?php echo form_input('username', $users['username'], ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                            </div>


                            <div class="form-group">
                                <label for="phone">Nomor Telpon</label>
                                <?php echo form_input('phone', $users['phone'], ['class' => 'form-control', 'placeholder' => 'Phone Number']); ?>
                            </div>


                            <div class="form-group">
                                <label for="phone">Alamat</label>
                                <?php echo form_input('address', $users['address'], ['class' => 'form-control', 'placeholder' => 'Address']); ?>
                            </div>


                        </div>


                        <br>
                        <div class="card-footer">
                            <a href="<?php echo base_url('adminconfig'); ?>" class="btn btn-outline-info">Kembali</a>
                            <button type="submit" class="btn btn-primary float-right">Perbaharui</button>
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                </div>
            </div>

        </div>






    </div>
</div>



<?= $this->include('templates/footer'); ?>
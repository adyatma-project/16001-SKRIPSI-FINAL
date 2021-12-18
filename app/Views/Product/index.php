<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h3 mb-0 text-gray-800">Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            List Product
                            <a href="<?php echo base_url('product/create'); ?>" class="btn btn-primary float-right">Tambah</a>
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

                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th width="10px" class="text-center">No</th>
                                            <th>Thumbnail</th>
                                            <th>SKU</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 0;
                                        foreach ($products as $key => $row) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo ++$nomor; ?></td>
                                                <td><img src="<?php echo base_url('uploads/' . $row['product_image']) ?>" class="rounded-circle" width="50" height="50"></td>
                                                <td><?php echo $row['product_sku']; ?></td>
                                                <td><?php echo $row['product_name']; ?></td>
                                                <td><?php echo $row['category_name']; ?></td>
                                                <td><?php echo "Rp. " . number_format($row['product_price']); ?></td>
                                                <td><?php echo $row['product_status']; ?></td>

                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="<?php echo base_url('product/show/' . $row['product_id']); ?>" class="btn btn-sm btn-info">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('product/edit/' . $row['product_id']); ?>" class="btn btn-sm btn-success">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('product/delete/' . $row['product_id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                                            <i class="fa fa-trash-alt"></i>
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
            </div>

        </div>
    </div>
</div>
<?= $this->include('templates/footer'); ?>
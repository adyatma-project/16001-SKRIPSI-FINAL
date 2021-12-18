<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/topbar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="h3 mb-0 text-gray-800">Profil Akun</h1>
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

    <div class="container-fluid">
        <div class="row py-5 px-4">
            <div class="col-md-5 mx-auto">
                <!-- Profile widget -->
                <!-- halaman ambil profil https://bbbootstrap.com/snippets/individual-user-profile-social-network-94176986-->
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 cover">
                        <br>
                        <div class="media align-items-end profile-head">
                            <div class="profile mr-3"><img src="<?php echo base_url('uploads/' . user()->image) ?>" alt="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" width="130" class="rounded mb-2 img-thumbnail">
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0"><?= user()->username ?></h4>
                                <p class="small mb-4">Nama Lengkap</p>
                            </div>
                        </div>
                        <!-- <a href="#" class="btn btn-secondary">
                            <i class="fas fa-edit"></i>
                            Edit profile</a> -->
                        <a href="forgot" class="btn btn-warning">
                            <i class="fas fa-user-shield"></i>
                            Ubah Password</a>
                    </div>
                    <!-- <div class="bg-light p-4 d-flex justify-content-end text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                            </li>
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                            </li>
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                            </li>
                        </ul>
                    </div> -->
                    <div class="px-3 py-3">
                        <h5 class="mb-0">Username</h5>
                        <div class="p-3 rounded shadow-sm bg-light">
                            <p class="font-italic mb-0"><?= user()->username ?></p>
                        </div>
                    </div>

                    <div class="px-3 py-3">
                        <h5 class="mb-0">No. Telepon</h5>
                        <div class="p-3 rounded shadow-sm bg-light">
                            <p class="font-italic mb-0"><?= user()->username ?></p>
                        </div>
                    </div>

                    <div class="px-3 py-3">
                        <h5 class="mb-0">Alamat E-mail</h5>
                        <div class="p-3 rounded shadow-sm bg-light">
                            <p class="font-italic mb-0"><?= user()->email; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('templates/footer'); ?>
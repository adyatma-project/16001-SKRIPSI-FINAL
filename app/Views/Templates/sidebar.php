<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-gripfire"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PT. Kalco Patra Energi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->


    <!-- Nav Item - Pages Collapse Menu -->
    <!--  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li>-->



    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Shop
    </div> -->


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?php base_url(); ?>/ordertransaction/all">
            <i class="fas fa-book"></i>
            <span>Daftar Transaksi </span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?php base_url() ?>/drpcalculation">
            <i class="fas fa-calculator"></i>
            <span>Analisa DRP</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php base_url() ?>/accountoutlet">
            <i class="fas fa-store"></i>
            <span>Manajemen Outlet</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="<?php base_url() ?>/adminconfig">
            <i class="fas fa-users-cog"></i>
            <span>Manajemen Akun</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php base_url() ?>/profile">
            <i class="far fa-address-card"></i>
            <span>Profil Akun</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
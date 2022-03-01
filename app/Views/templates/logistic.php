<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->include('templates/head'); ?>
    </head>
    <body class="d-flex flex-column min-vh-100 body-custom">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
        <div class="col-sm-2 px-0 text-center d-none d-lg-block" id="logo">
        <a class="navbar-brand pl-3" href="#">
        <img src="<?php echo base_url('\image/logo.png'); ?>" width="150" height="25" alt="" /> 
        </a>
        </div>
        <div class="col-auto mr-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('logistic');?>">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                Buat Gate Pass
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('logistic/create/general');?>">General</a>
                <a class="dropdown-item" href="<?= base_url('logistic/create/log');?>">Finish Goods & Materials</a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                Catatan Gate Pass
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('logistic/recordlist/all');?>">Semua Gate pass</a>
                <a class="dropdown-item" href="<?= base_url('logistic/recordlist/inprogress');?>">Gate pass Dalam Proses</a> 
                <a class="dropdown-item" href="<?= base_url('logistic/recordlist/completed');?>">Gate pass Selesai</a>
                <a class="dropdown-item" href="<?= base_url('logistic/recordlist/rejected');?>">Gate pass Ditolak </a>
                <a class="dropdown-item" href="<?= base_url('logistic/recordlist/loaned');?>">Dipinjamkan</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logistic/report');?>">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logistic/search');?>">Pencarian</a>
            </li>
            </ul>
        </div>
        </div>
        <div class="col-auto" >   
        <button type="button" class="btn btn-light " id="box"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="bi bi-bell"></i>
            
            </button>
            <ul class="dropdown-menu position-absolute" id="notif">
            <li class="notification-box">
            <div class="row align-items-center px-2 ">
            <div class="col-lg-4 col-sm-4 col-4">
            <img src="<?= base_url('/image/access.png'); ?>">
            </div>
            <div class="col-lg-8 col-sm-8 col-8">
            <strong class="text-danger">The Good haven't been returned</strong>
            <div>
                Return of Goods:
                Logistic/1121/0001, PT. Sadar Sana has not returned the goods.
            </div>
            <small class="text-warning">27.11.2015, 15:00</small>
            </div>
            </div>
            </li>
            </ul>
        
        <li class="list-inline-item dropdown notification-list">
        
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user text-white" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <!-- User -->
                </a>
            
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5>Selamat Datang</h5>
                    </div>
                    <a class="dropdown-item" href="<?= base_url('home/profile'); ?>"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profil</a>
                    <a class="dropdown-item" href="<?= base_url('home/setting'); ?>"><i class="mdi mdi-settings m-r-5 text-muted"></i> Pengaturan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Keluar</a>
                </div>
            </li>
        </div>
        </nav>

        <?= $this->renderSection('content'); ?>

        <?= $this->include('templates/footer');?>
    </body>
</html>
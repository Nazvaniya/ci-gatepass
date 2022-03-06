<body class="d-flex flex-column min-vh-100 body-custom">
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
<div class="col-sm-2 px-0 text-center d-none d-lg-block" id="logo">
<a class="navbar-brand pl-3" href="#">
  <img src="<?php echo base_url('\image/logo.png'); ?>" class="img-fluid" width="150" height="25" alt="" /> 
</a>
</div>
<div class="col-auto mr-auto">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Security/index');?>">Scan QR <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Security/dashboard');?>">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
        Catatan Gate Pass
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('Security/recordlist/all');?>">Semua Gate pass</a>
                <a class="dropdown-item" href="<?= base_url('Security/recordlist/inprogress');?>">Gate pass Dalam Proses</a> 
                <a class="dropdown-item" href="<?= base_url('Security/recordlist/completed');?>">Gate pass Selesai</a>
                <a class="dropdown-item" href="<?= base_url('Security/recordlist/rejected');?>">Gate pass Ditolak</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Security/report');?>">Laporan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Security/search');?>">Pencarian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Security/import');?>">Impor</a>
      </li>
      
    </ul>
  </div>
</div>
<div class="col-auto" >  
  <li class="list-inline-item dropdown notification-list">
  
        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user text-white" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            Security
        </a>
       
        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->
            <div class="dropdown-item noti-title">
                <h5>Selamat Datang</h5>
            </div>
            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profil</a>
            <a class="dropdown-item" href="#"><i class="mdi mdi-settings m-r-5 text-muted"></i> Pengaturan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Keluar</a>
        </div>
    </li>
</div>
</div>
</nav>
<?= $this->extend('templates_security/index') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

    <div class="jumbotron jumbotron-fluid px-5 py-3">
        <div  class="row">
            <div class="col-sm-2">
              <img id="dlogo" src="<?= base_url('/image/access.png'); ?>">
            </div>
            <div class="col-sm-10"> 
              <h3 class="display-5">APLIKASI GATE PASS PANASONIC</h3>
              <p class="lead">Selamat Datang Security.</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-3">
        <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body mt-3 text-center">
                    <h1 class="card-title font-weight-bold">2</h1>
                    <p class="card-text">
                      <a href="<?= base_url("ehs/inprogress"); ?>" class="text-dark">
                        Dalam Proses
                      </a>  
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
                  <img id="sand" src="<?php echo base_url('\image/sand.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
        <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body mt-3 text-center">
                    <h1 class="card-title text-success font-weight-bold">2</h1>
                    <p class="card-text">
                      <a href="<?= base_url("ehs/completed"); ?>" class="text-success">
                        Selesai
                      </a>  
                </div>
                </div>
                <div class="col-md-2 my-5 mx-1 d-none d-lg-block">
                  <img id="approve" src="<?php echo base_url('\image/approved.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body px-2 mt-3 text-center">
                    <h1 class="card-title text-danger font-weight-bold">0</h1>
                    <p class="card-text">
                      <a href="<?= base_url("ehs/rejected"); ?>" class="text-danger">
                        Ditolak
                      </a>  
                    </p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
                  <img id="reject" src="<?php echo base_url('\image/reject.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
    </div>
<div class="card mt-2 p-3">
<script>$(document).ready(function() {
    $('#example').DataTable({
      "lengthMenu": [5],
      "language" : {
        "url": "/assets/id.json"
      }
    });
} );</script>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
        <thead>
            <tr>
            <th>No</th>
            <th>Tanggal Buat</th>
            <th>Nomor Gate Pass</th>
            <th>Dikeluarkan oleh</th>
            <th>Departemen</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= date("d-m-Y") ?></td>
                <td>
                    <a href="<?= base_url("security/detail/general_info"); ?>">
                    G/BMO/0011
                    </a>
                </td>
                <td>Rennu</td>
                <td>BMO</td>
                <td ><span  class="badge badge-warning">Menunggu Persetujuan Pengajuan</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?= date("d-m-Y") ?></td>
                <td>
                    <a href="<?= base_url("security/detail/general_waste_info"); ?>">
                        EHS-G/EHS/0002
                    </a>
                </td>
                <td>April</td>
                <td>EHS</td>
                <td ><span  class="badge badge-warning">Menunggu Persetujuan Pengajuan</span></td>
            </tr>
            <tr>
            <td>3</td>
            <td><?= date("d-m-Y") ?></td>
                <td>
                    <a href="<?= base_url("security/detail/logistic_info"); ?>">
                    FG-M/1221/0002
                    </a>
                </td>
                <td>Gunawan</td>
                <td>Logistic</td>
                <td ><span  class="badge badge-warning">Menunggu Persetujuan Pengajuan</span></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?= date("d-m-Y") ?></td>
                <td>
                    <a href="<?= base_url("security/detail/general_info"); ?>">
                  	G/BMO/0010
                    </a>
                </td>
                <td>Rennu</td>
                <td>BMO</td>
                <td ><span  class="badge badge-success">Selesai</span></td>
            </tr>
            <tr>
            <td>5</td>
            <td><?= date("d-m-Y") ?></td>
                <td>
                    <a href="#">
                        G/BMO/0003
                    </a>
                </td>
                <td>April</td>
                <td>EHS</td>
                <td ><span  class="badge badge-success">Selesai</span></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</body>
</html>

<script>$(document).ready(function(){
            var down = false;

            $('#bell').click(function(e){

            var color = $(this).text();
            if(down){

            $('#box').css('height','0px');
            $('#box').css('opacity','0');
            down = false;
            }else{

            $('#box').css('height','auto');
            $('#box').css('opacity','1');
            down = true;

            }

            });

});</script>
<?= $this->endSection() ?>
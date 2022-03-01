<?= $this->extend('templates_security/index') ?>

<?= $this->section('security/dashboard_v') ?>
<div class="container mt-2">

    <div class="jumbotron jumbotron-fluid px-5 py-3">
        <div  class="row">
            <div class="col-sm-2">
              <img id="dlogo" src="<?= base_url('/image/access.png'); ?>">
            </div>
            <div class="col-sm-10"> 
              <h3 class="display-5">APPLICATION GATE PASS PANASONIC</h3>
              <p class="lead">WELCOME ADMIN.</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-3">
        <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">4</h5>
                    <p class="card-text">Waiting</p>
                    <p class="card-text"> E-Gate Pass</p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3">
                  <img id="sand" src="<?php echo base_url('\image/sand.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
        <div class="col-3">
        <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-success">9</h5>
                    <p class="card-text text-success">Approved</p>
                    <p class="card-text text-success"> E-Gate Pass</p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-1">
                  <img id="approve" src="<?php echo base_url('\image/approved.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
      <div class="col-3">
        <div class="card mb-3 shadow"  style="max-width: 250px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-primary">10</h5>
                    <p class="card-text text-primary">Verified</p>
                    <p class="card-text text-primary"> E-Gate Pass</p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3">
                  <img id="sand" src="<?php echo base_url('\image/sand.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
        <div class="col-3">
        <div class="card mb-3 shadow"  style="max-width: 250px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body px-2">
                    <h5 class="card-title text-danger">3</h5>
                    <p class="card-text text-danger">Rejected</p>
                    <p class="card-text text-danger"> E-Gate Pass</p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3">
                  <img id="reject" src="<?php echo base_url('\image/reject.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
    </div>
<div class="card mt-5 p-3">
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>

<table id="example" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>No Gate Pass</th>
                <th>Issued By</th>
                <th>Application Date</th>
                <th>Approval Status</th>
                <th>Verification Status</th>
                <th>Return Type</th>
                <th>Goods Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>EHS-C/EHS/0003</td>
                <td>Siswanto</td>
                <td>03-10-2021</td>
                <td ><span  class="badge badge-success"> Approved</span></td>
                <td ><span  class="badge badge-secondary"> Waiting</span></td>
                <td ><span  class="badge badge-warning"> Unreturnable</span></td>
                <td ><span  class="badge badge-light"> NA</span></td>
                <td>
                  <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">Cancel</button>
                          <button class="dropdown-item" type="button">View</button>
                          <button class="dropdown-item" type="button">Print</button>
                        </div>
                  </div></td>
            </tr>
            <tr>
                <td>2</td>
                <td>EHS-C/EHS/0002</td>
                <td>Budi</td>
                <td>03-10-2021</td>
                <td ><span  class="badge badge-success"> Approved</span></td>
                <td ><span  class="badge badge-secondary"> Waiting</span></td>
                <td ><span  class="badge badge-warning"> Unreturnable</span></td>
                <td ><span  class="badge badge-light"> NA</span></td>
                <td>
                  <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">Cancel</button>
                          <button class="dropdown-item" type="button">View</button>
                          <button class="dropdown-item" type="button">Print</button>
                        </div>
                  </div></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<footer class="text-center text-lg-start navbar-custom mt-auto" >
  <!-- Copyright -->
  <div class="text-center p-3" style="color:white">
    © 2021 Copyright:
    <a class="text-light" href="https://panasonic.com/">SFPO</a>
  </div>
  <!-- Copyright -->
</footer>
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
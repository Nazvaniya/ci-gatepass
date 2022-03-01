<?= $this->extend('templates/index') ?>

<?= $this->section('pages/dashboard_v') ?>
<div class="container mt-2">

    <div class="jumbotron jumbotron-fluid px-5 py-3">
        <div  class="row">
            <div class="col-sm-2">
              <img id="dlogo" src="<?= base_url('/image/access.png'); ?>">
            </div>
            <div class="col-sm-10"> 
              <h3 class="display-5">APPLICATION GATE PASS PANASONIC</h3>
              <p class="lead">WELCOME AFIF.</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-3">
        <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body mt-3 text-center">
                    <h1 class="card-title font-weight-bold">4</h1>
                    <p class="card-text">In Progress</p>
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
                    <h1 class="card-title text-success font-weight-bold">9</h1>
                    <p class="card-text text-success">Completed</p>
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
                    <h1 class="card-title text-danger font-weight-bold">3</h1>
                    <p class="card-text text-danger">Rejected</p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
                  <img id="reject" src="<?php echo base_url('\image/reject.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-3">
          <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body px-2 mt-3 text-center">
                    <h1 class="card-title text-warning font-weight-bold">10</h1>
                    <p class="card-text text-warning">Loaned Goods</p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
                  <img id="reject" src="https://cdn-icons.flaticon.com/png/512/3638/premium/3638933.png?token=exp=1642156034~hmac=fc265869a352cc57e99599470f92618c" alt="...">
                </div>
            </div>
          </div>
        </div> -->
    </div>
<div class="card mt-5 p-3">
<script>$(document).ready(function() {
    $('#example').DataTable({
      "lengthMenu": [5]
    });
} );</script>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Entry Date</th>
                <th>Gate Pass No</th>
                <th>Issued By</th>
                <th>Department</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>03-10-2021</td>
                <td>
                    <a href="">
                        EHS-C/EHS/0003
                    </a>
                </td>
                <td>April</td>
                <td>EHS</td>
                <td ><span  class="badge badge-warning"> Waiting Submission Approval</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>03-10-2021</td>
                <td>
                    <a href="">
                        EHS-C/EHS/0002
                    </a>
                </td>
                <td>April</td>
                <td>EHS</td>
                <td ><span  class="badge badge-success"> Completed </span></td>
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
<?= $this->extend('templates/bmo') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

    <div class="jumbotron jumbotron-fluid px-5 py-3">
        <div  class="row">
            <div class="col-sm-2">
              <img id="dlogo" src="<?= base_url('/image/access.png'); ?>">
            </div>
            <div class="col-sm-10"> 
              <h3 class="display-5">APPLICATION GATE PASS PANASONIC</h3>
              <p class="lead">WELCOME Rennu</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-3">
        <div class="card mb-3 shadow"  style="max-width: 350px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">4</h3>
                    <p class="card-text">In progress</p>
                    <p class="card-text"> E-Gate Pass</p>
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
                <div class="card-body">
                    <h3 class="card-title text-success">9</h3>
                    <p class="card-text text-success">Complete</p>
                    <p class="card-text text-success"> E-Gate Pass</p>
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
                <div class="card-body px-2">
                    <h3 class="card-title text-danger">3</h3>
                    <p class="card-text text-danger">Rejected</p>
                    <p class="card-text text-danger"> E-Gate Pass</p>
                </div>
                </div>
                <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
                  <img id="reject" src="<?php echo base_url('\image/reject.png'); ?>" alt="...">
                </div>
            </div>
          </div>
        </div>
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
                <th>Gate Pass No</th>
                <th>Issued By</th>
                <th>Department</th>
                <th>Entry Date</th>
                <th>Approval Status</th>
                <th>Verification Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>EHS-C/EHS/0003</td>
                <td>Siswanto</td>
                <td>EHS</td>
                <td>03-10-2021</td>
                <td ><span  class="badge badge-secondary"> Waiting</span></td>
                <td ><span  class="badge badge-secondary"> Waiting</span></td>
                <td>
                    <div class="p-1">
                        <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail" type="button">
                        <i class="bi bi-list"></i></button>
                        <button class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Cancel" type="button">
                        <i class="bi bi-x"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>EHS-C/EHS/0002</td>
                <td>Budi</td>
                <td>EHS</td>
                <td>03-10-2021</td>
                <td ><span  class="badge badge-success"> Approved</span></td>
                <td ><span  class="badge badge-secondary"> Waiting</span></td>
                <td>
                    <div class="p-1">
                        <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail" type="button">
                        <i class="bi bi-list"></i></button>
                        <!-- <button class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Cancel" type="button">
                        <i class="bi bi-x"></i></button> -->
                    </div>
                </td>
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
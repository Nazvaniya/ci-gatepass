<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/font-awesome/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/style.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/css/dataTables.bootstrap4.min.css"); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="<?= base_url("/assets/js/jquery.min.js"); ?>"> </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= base_url("/assets/js/jquery.dataTables.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/dataTables.bootstrap4.min.js"); ?>"> </script>
  </head>
<body class="d-flex flex-column min-vh-100">
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
        <a class="nav-link" href="#">Scan QR <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
        Gate Pass Record
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">All Gate pass</a>
          <a class="dropdown-item" href="#">Approved Gate pass</a>
          <a class="dropdown-item" href="#">Rejected Gate pass</a>
          <a class="dropdown-item" href="#">loaned goods</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Import</a>
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
                <h5>Welcome</h5>
            </div>
            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
            <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
        </div>
    </li>
</div>
</div>
</nav>
<div class="container mt-1">

    <div class="card px-5 py-2 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/logistic.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Gate Pass Detail Logistic</h5>
            </div>
        </div>
    </div>

    <div class="card mt-2 shadow card-body">
    <div class="card-header bg-white">
    <div class="container px-5"> 
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/infogatepass'); ?>">Main Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('home/info'); ?>">Goods Information</a>
      </li>
    </ul>
  </div>
    </div>
    <div class="container px-5">  
      <div class="p-1 text-white rounded shadow" id="information">Goods Information</div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4">
  <div class="card">
  <div class="card-header">
    Attachment
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"></li>

  </ul>
</div>
  </div>
  <div class="form-group col-sm-4">
      <label for="returntype">Reason Disapproved</label>
      <input type="text" class="form-control" id="return_dis" value="NA" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="Remark">Reason Rejected</label>
      <input type="text" class="form-control" id="reason_reject" value="NA" readonly>
    </div>
  </div>
  <div class="row p-2">
  <div class="mb-3 col-sm-10">
  <div class="table-responsive">
  <table id="tbl_goods" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Type of goods</th>
                <th>Quantity</th>
                <th>Type Unit</th>
                <th>Check</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Resistor</td>
                <td>5</td>
                <td >Pallet</td>
                <td>
                <div class="form-check">
                <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                </div></td>
            </tr>     
            <tr>
                <td>2</td>
                <td>Capasitor Material</td>
                <td>2</td>
                <td >Pallet</td>
                <td>
                <div class="form-check">
                <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                </div></td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
  </div>
</div>
<div class="row p-3 justify-content-end">
<div class="col-auto">  
<button type="button" class="btn btn-primary" id="btn_rejected" data-toggle="modal" data-target="#exampleModal" disabled>Rejected</button>
</div>
<div class="col-auto">  
<button type="button" class="btn btn-primary" id="btn_verified"  disabled>Verified</button>
</div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sure you want to Rejected?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="">
       <div class="form-group">
        <label for="">Please Give Your Reason</label>
        <input type="text" class="form-control " id="name" name="name" placeholder="Your Reason">
        <div class="invalid-feedback errorName">
          Please give your reason.
        </div>
      </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Yes, Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Your Code-->
<div class="modal fade" id="scan_modal" tabindex="-1" aria-labelledby="scan_modal_label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scan_modal_label">Scan Your Barcode ID?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="">
       <div class="form-group">
        <label for="">Waiting</label>
        <input type="text" class="form-control " id="name" name="name" placeholder="name" readonly>
        <div class="invalid-feedback errorName">
          Please Scan Correct Barcode ID.
        </div>
      </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Yes, Confirm</button>
      </div>
    </div>
  </div>
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
</div>
</body>
</html>


<script>

  $(document).ready(function() {
    $('#example').DataTable({
      "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
    });
} );

</script>

<script src="<?= base_url("/assets/script.js"); ?>"> </script>
<script>
$(document).ready(function(){
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

});</script$>


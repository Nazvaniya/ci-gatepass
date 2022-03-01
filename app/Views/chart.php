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
    <script src="<?= base_url("/assets/js/jquery.dataTables.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/dataTables.bootstrap4.min.js"); ?>"> </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
<body class="d-flex flex-column min-vh-100">
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
        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Data Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">User</a>
          <a class="dropdown-item" href="#">Vendor</a>
          <a class="dropdown-item" href="#">User level</a>
          <a class="dropdown-item" href="#">Manifest</a>
          <a class="dropdown-item" href="#">Waste Data</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Gate Pass
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">General</a>
          <a class="dropdown-item" href="#">Logistic</a>
          <a  class="dropdown-item"  class="dropdown-toggle" class="btn-group dropright" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"href="#">EHS</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Chemical Waste</a></li>
                        <li><a href="#" class="dropdown-item">Scrap Waste</a></li>
                        <li><a href="#" class="dropdown-item">General Waste</a></li>
                    </ul>
               
        </div>
        
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
    </ul>
  </div>
</div>
<div class="col-auto" >  
<button type="button" class="btn btn-light " id="box"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="bi bi-bell"></i>
    <span class="badge badge-danger">4</span>
    </button>
    <ul class="dropdown-menu" id="notif">
    <li class="notification-box">
    <div class="row align-items-center px-2 ">
    <div class="col-lg-4 col-sm-4 col-4">
    <img src="<?= base_url('/image/access.png'); ?>">
    </div>
    <div class="col-lg-8 col-sm-8 col-8">
    <strong class="text-danger">The Good haven't been returned</strong>
    <div>
    Return of Goods:
    EHS-C/EHS/0001, PT. Sadar Sana has not returned the goods.
    </div>
    <small class="text-warning">27.11.2015, 15:00</small>
    </div>
    </div>
    </li>
      </ul>
  
  <li class="list-inline-item dropdown notification-list">
  
        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            User
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
<div class="container mt-5">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1 ">
              <img id="access" src="<?= base_url('/image/report.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Report Gate Pass Page</h5>
            </div>
        </div>
    </div>

    <div class="card mt-3 shadow p-3 ">
<div class="p-5" style="max-width: fit-content;" >
<canvas id="piechart"></canvas>
</div>
  </div>




<div class="card mt-3 shadow p-3 ">
<div class="p-5" >
<canvas id="myChart"></canvas>
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
</body>
</html>

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

});</script>
 <script>
   const labels = [
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
];
const scrap = [
  'Copper Pin',
  'Copper Wire',
  'Copper Pipe',
  'Copper Terminal',
  'Aluminium',
  'Copper Frame',
];
const data = {
  labels: labels,
  datasets: [{
    label: 'Gatepass',
    backgroundColor: '#0056A8',
    borderColor: '#0056A8',
    data: [80, 90, 115, 60, 40, 64, 45],
  }]
};
const data_ehs = {
  labels: scrap,
  datasets: [{
    label: 'Gatepass',
    backgroundColor: [
      '#9BB1FF',
      '#BFD7FF',
      '#D1EAFF',
      '#E2FDFF',
      '#5465FF',
      '#788BFF',
    ],
    hoverOffset: 4,
    borderColor: '#ffff',
    data: [80, 90, 115, 60, 64, 45],
  }]
};
 const config = {
  type: 'line',
  data: data,
  options: {}
};
const confik = {
  type: 'doughnut',
  data: data_ehs,
  options: {
    plugins: {
      datalabels: {
        display: true,
        align: 'bottom',
        backgroundColor: '#ccc',
        borderRadius: 3,
        font: {
          size: 18,
        }
      },
    }
  }
};
const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
  const piechart = new Chart(
    document.getElementById('piechart'),
    confik
  );


</script>
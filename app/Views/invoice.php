<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("/assets/style.css"); ?>" rel="stylesheet" type="text/css">
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
    <style>
    p, span, table { font-size: 13px}

</style>
    <title>Document</title>
</head>
<body>

<!-- <div class="row justify-content-between" > 
    <div class="col-4">   
<span>Retun Type</span>
    </div>
    <div class="col-4">
<span>No.</span>
    </div>
</div>   
<div>
  <table class="table table-bordered">
    <tr>
      <td>Return Type:</td> 
      <td></td>
      <td>No.:</td>
    </tr>
  </table>
</div>

 <table class="table table-bordered">
        <tr>
          <td>Gate Pass No</td>
          <td>:</td>
          <td>General/BMO/0002</td>
          <td>Date</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
        </tr>
         <tr>
          <td>Issued By</td>
          <td>:</td>
          <td>User</td>
          <td>Department</td>
          <td>:</td>
          <td>BMO</td>
        </tr>
        <tr>
        <td>Section</td>
          <td>:</td>
          <td>SFPO</td>
          <td>Goods Status</td>
          <td>:</td>
          <td>NA</td>
        </tr>
      </table>
      <br></br>
      <br></br> 
 <table class="" style="width: 100%;">
        <tr>
          <td>Name of Vendor</td>
          <td width="25px">:</td>
          <td>PT. Sadar Sana</td>
          <td>Name of Driver</td>
          <td width="25px">:</td>
          <td>Budi</td>
          <td>Vehicle Regn No</td>
          <td width="25px">:</td>
          <td>Bp 29467 XZ</td>
        </tr>
      </table>
<p></p> -->
<div class="container mx-5">
<table id="example" cellpadding="4" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <tbody>
            <tr>
                <td style="width: 75px">1</td>
                <td style="width: 280px">Capasitor Material</td>
                <td style="width: 25px">10</td>
                <td>Pallet</td>
                <!-- <td>Study rfid card</td> -->
                <td> <img id="access" src="<?= base_url('/image/rfid.jpg'); ?>"></td>
            </tr>    
            <tr>
                <td style="width: 75px">2</td>
                <td style="width: 280px">Carton Box</td>
                <td style="width: 25px">10</td>
                <td>Unit</td>
                <!-- <td>Study rfid card</td> -->
                <td> <img id="access" src="<?= base_url('/image/rfid.jpg'); ?>"></td>
            </tr>    
            <tr>
                <td style="width: 75px">3</td>
                <td style="width: 280px">Resitor</td>
                <td style="width: 25px">10</td>
                <td>Pallet</td>
                <!-- <td>Study rfid card</td> -->
                <td> <img id="access" src="<?= base_url('/image/rfid.jpg'); ?>"></td>
            </tr>        
        </tbody>
    </table>
    </div>
</body>
</html>
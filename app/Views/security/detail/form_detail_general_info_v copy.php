<?= $this->extend('templates_security/index') ?>
<?= $this->section('content') ?>
<div class="container mt-1">

    <div class="card px-5 py-2 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/computer.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Gate Pass Detail General</h5>
            </div>
        </div>
    </div>

    <div class="card mt-2 shadow card-body">
    <div class="card-header bg-white">
    <div class="container px-5">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('security/detail/general_info'); ?>">Main Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?= base_url('security/detail/general_verify'); ?>">Goods Information</a>
      </li>
    </ul>
    </div>
  </div>
    <div class="container px-5">  
      <div class="p-1 text-white rounded shadow" id="information">Gatepass Information</div>
    <div class="row ">
    <div class="col-sm-12">
    <table class="table table-borderless" id="tbl_info">
        <tr>
            <td>Date</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
          
          <td>Issued By</td>
          <td>:</td>
          <td>Abdul Shamad Rennu</td>
          
        </tr>
         <tr>
         <td>Gate Pass No</td>
          <td>:</td>
          <td>General/BMO/0011</td>
          
          <td>Department</td>
          <td>:</td>
          <td>BMO</td>
        </tr>
        <tr>
        <td>Goods Status</td>
          <td>:</td>
          <td id="goods_status">Loaned</td>
        <td>Section</td>
          <td>:</td>
          <td>SFPO</td>
          
        </tr>
      </table>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Driver Information</div>
  <div class="row ">
    <div class="col-sm-12">
      <table class="table table-borderless">
        <tr>
          <td>Name of Vendor</td>
          <td>:</td>
          <td>PT. Darma Pacific</td>
          <td>Name of Driver</td>
          <td>:</td>
          <td>Budi</td>
          <td>Vehicle Regn No</td>
          <td>:</td>
          <td>Bp 2946 XZ</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Approval Information</div>
  <div class="form-row p-1">
  <div class="form-group col-sm-4">
      <label for="inputTakeDate">Approval Date</label>
      <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputApprovalStatus">Approval Status</label>
      <input type="text" class="form-control" id="approval_status" value="Approved" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputApprover">Approver Name</label>
      <input type="text" class="form-control" id="approval_name" value="Fajar Wisnu Broto" readonly>
    </div>
  </div>
  <div class="form-row p-1">
  <div class="form-group col-sm-4">
      <label for="inputTakeDateValid">Validation Date</label>
      <input type="text" class="form-control" id="action_take_validation" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputValidatorStatus">Validation Status</label>
      <input type="text" class="form-control" id="validation_status" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputValidator">Validator Name</label>
      <input type="text" class="form-control" id="validator_name" value="N/A" readonly>
    </div>
  </div>
  <div class="form-row p-1">
  <div class="form-group col-sm-4">
      <label for="returntype">Reason Disapproved</label>
      <input type="text" class="form-control" id="return_dis" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="Remark">Reason Rejected</label>
      <input type="text" class="form-control" id="reason_reject" value="N/A" readonly>
    </div>
  </div>
    </div>
  </div>
</div>
</div>
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

});</script>
<?= $this->endSection() ?>


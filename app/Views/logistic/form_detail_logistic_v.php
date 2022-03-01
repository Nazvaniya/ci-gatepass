<?= $this->extend('templates/index') ?>
<?= $this->section('logistic/form_detail_logistic_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/logistic.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Gate Pass Detail Logistic</h5>
            </div>
        </div>
    </div>

    <div class="card mt-3 shadow card-body">
    <div class="">  
      <div class="px-3 py-1 text-white rounded shadow" id="information">Gatepass Information</div>
    <div class="row">
    <div class="col-sm-10">
      <table class="table table-borderless">
        <tr>
          <td>Date</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
          <td>Issued By</td>
          <td>:</td>
          <td>User</td>
        </tr>
        <tr>
          <td>No Gate Pass</td>
          <td>:</td>
          <td>Logistic/1221/0002</td>
          <td>Department</td>
          <td>:</td>
          <td>Logistic</td>
        </tr>
        <tr>
        <td>Goods Status</td>
          <td>:</td>
          <td id="goods_status">Loaned</td>
          <td>Section</td>
          <td>:</td>
          <td>Logistic</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="px-3 py-1 text-white rounded shadow" id="information">Driver Information</div>
  <div class="row ">
    <div class="col-sm-12">
      <table class="table table-borderless">
        <tr>
          <td>Name of Vendor</td>
          <td>:</td>
          <td>PT. Dasa Warna</td>
          <td>Name of Driver</td>
          <td>:</td>
          <td>Nirita</td>
          <td>Vehicle Regn No</td>
          <td>:</td>
          <td>Bp 29467 XZ</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="px-3 py-1 text-white rounded shadow" id="information">Approval Information</div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputApprovalStatus">Approval Status</label>
      <input type="text" class="form-control" id="approval_status" value="Approved" readonly>
    </div>
  <div class="form-group col-sm-4">
      <label for="inputTakeDate">Approval Date</label>
      <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputApprover">Approver Name</label>
      <input type="text" class="form-control" id="approval_name" value="Dani Mulyana" readonly>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputValidatorStatus">Validation Status</label>
      <input type="text" class="form-control" id="validation_status" value="Waiting from Security" readonly>
    </div>
  <div class="form-group col-sm-4">
      <label for="inputTakeDateValid">Validation Date</label>
      <input type="text" class="form-control" id="action_take_validation" value="<?php echo date('d-m-Y'); ?>" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputValidator">Validator Name</label>
      <input type="text" class="form-control" id="validator_name" value="Agus" readonly>
    </div>
  </div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4">
      <label for="returntype">Reason Disapproved</label>
      <input type="text" class="form-control" id="return_dis" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="Remark">Reason Rejected</label>
      <input type="text" class="form-control" id="reason_reject" value="N/A" readonly>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Goods Information</div>
  <div class="form-row p-2">
      <div class="form-group col-sm-4" id="data_expected_date">
          <label for="data_expected_date">
            Expected Date all of goods be return
            <a href="#" data-toggle="modal" data-target="#extend_date"><i class="bi bi-pencil-fill"></i></a>
          </label>
          <input type="text" class="form-control" name="data_expected_date"   value="<?php echo date('d-m-Y'); ?>" readonly>
      </div> 
    <div class="form-group col-sm-4" id="data_actual_date">
      <label for="data_actual_date">Actual Date of Return</label>
      <input type="text" class="form-control" name="data_actual_date"   value="N/A" readonly>
    </div>
  </div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4">
  <div class="card" style="width: 18rem;">
  <div class="card-header">
    Truck & Goods Photo
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <a href="">
        img 17122021.jpg
      </a>
    </li>
  </ul>
</div>
  </div>
  </div>
  <div class="form-group px-4 row justify-content-end" > 
  <div  class="mx-1"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#returning_goods">Return The Goods</button></div>  
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#return_log">Returned Record</button> 
  </div>
  <div class="row p-2">
  <div class="mb-3 col-sm-12">
  <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th>Type of Goods</th>
                <th>Qty</th>
                <th>Return Type</th>
                <th>Status</th>
                <th style="width: 150px">Loaned Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Resistor</td>
                <td>5 Pallet</td>
                <td>Unreturnable</td> 
                <td>N/A</td>
                <td>0 Unit</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Capasitor Material</td>
                <td>10 Pallet</td>
                <td>Returnable</td> 
                <td>Loaned</td>
                <td>0 Unit</td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
  </div>
</div>
<div class="row">
<div class="col text-right">
<button type="button" onClick="history.go(-1);" class="btn btn-dark">Back</button>
<button type="button" class="btn btn-secondary">Reject</button> 
<button type="button" class="btn btn-primary">Approve</button>
<!-- <button type="button" class="btn btn-primary">Returning Goods</button> -->
</div>
  </div>
</div>


<!-- Modal return -->
<div class="modal custom fade" id="returning_goods" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Returning Goods</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row p-2">
  <div class="mb-3 col-sm-12">
  <div class="table-responsive">
  <table id="tbl_goods" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Type of goods</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Loaned Balance</th>
                <th class="">Return Qty</th>
                <th align="center" style="width:75px;">Return All</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Capasitor Material</td>
                <td>10 Pallet</td> 
                <td>Loaned</td>
                <td>0 Unit</td>
                <td class="col-sm-1">
                <input type="number" min="1" max="" class="" style="max-width:50px" id="qty_return" name="qty_return">
                </td class="col-sm-1">
                <td class="">  
                <div class="form-check">
                <input class="checkbox" type="checkbox" id="cb_return" value="option1" aria-label="...">
                </div>
                <!-- <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" type="button">Return goods</button> -->
                  </td>
            </tr>            
        </tbody>
    </table>
  </div>
</div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to Rejected?</h5>
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
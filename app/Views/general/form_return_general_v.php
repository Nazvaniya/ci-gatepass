<?= $this->extend('templates/index') ?>
<?= $this->section('general/form_detail_general_v') ?>
<div class="container mt-2">

<div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/computer.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Returning Goods General Gate Pass</h5>
            </div>
        </div>
    </div>

    <div class="card mt-3 shadow card-body">
    <div class="">  
      <div class="px-3 py-1 text-white rounded shadow" id="information">Gatepass Information</div>
    <div class="row">
    <div class="col-sm-10">
    <div class="table-responsive">
      <table class="table table-borderless" id="tbl_info">
        <tr>
            <td>Date</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
          
          <td>Issued By</td>
          <td>:</td>
          <td>User</td>
          
        </tr>
         <tr>
         <td>Gate Pass No</td>
          <td>:</td>
          <td>General/BMO/0002</td>
          
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
  </div>
  <div class="px-3 py-1 text-white rounded shadow" id="information">Driver Information</div>
  <div class="row ">
    <div class="col-sm-12">
    <div class="table-responsive">
      <table class="table table-borderless">
        <tr>
          <td>Name of Vendor</td>
          <td>:</td>
          <td>PT. Sadar Sana</td>
          <td>Name of Driver</td>
          <td>:</td>
          <td>Budi</td>
          <td>Vehicle Regn No</td>
          <td>:</td>
          <td>Bp 29467 XZ</td>
        </tr>
      </table>
    </div>
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
        <input type="text" class="form-control" id="validation_status" value="Verified" readonly>
      </div>
  <div class="form-group col-sm-4">
      <label for="inputTakeDateValid">Validation Date</label>
      <input type="text" class="form-control" id="action_take_validation" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputValidator">Validator Name</label>
      <input type="text" class="form-control" id="validator_name" value="Ririn" readonly>
    </div>
  </div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4">
      <label for="returntype">Reason Disapproved</label>
      <input type="text" class="form-control" id="return_dis" value="NA" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="Remark">Reason Rejected</label>
      <input type="text" class="form-control" id="reason_reject" value="NA" readonly>
    </div>
    <div class="form-group col-sm-4" id="data_expected_date">
      <label for="data_expected_date">Expected Date of Return</label>
      <input type="text" class="form-control" name="data_expected_date"   value="<?php echo date('d-m-Y'); ?>" readonly>
    </div>
    <!-- <div class="form-group col-sm-4" id="data_actual_date">
      <label for="data_actual_date">Actual Date of Return</label>
      <input type="text" class="form-control" name="data_actual_date"   value="NA" readonly>
    </div> -->
  </div>
  <div class="form-row p-2">
  <!-- <div class="form-group col-sm-4">
  <div class="card" style="max-width: 18rem;">
  <div class="card-header">
    Attachment
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">img 17122021.jpg</li>
  </ul>
</div>
  </div> -->
  </div>
  <div class="form-group px-4 row justify-content-end" >  
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#return_log">Returned Record</button> 
  </div>
  <div class="row p-2">
  <div class="mb-3 col-sm-12">
  <div class="table-responsive">
  <table id="tbl_goods" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Type of goods</th>
                <th>Qty</th>
                <th>Return Type</th>
                <th>Status</th>
                <th>Remark</th>
                <th>Photo of Goods</th>
                <th class="">Return Qty</th>
                <th align="center" style="width:75px;">Return All</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bowl Feeder</td>
                <td>10 Unit</td>
                <td>Returnable</td>
                <td>Loaned</td>
                <td>Re-work</td>
                <td> <img id="access" src="<?= base_url('/image/bowl.png'); ?>"></td>
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
  <div class="row p-3 justify-content-end ">
<div class="mx-1"><button type="button" onClick="history.go(-1);" class="btn btn-dark">Back</button></div>
<div class="mx-1"><button type="button" class="btn btn-primary" id="btn_disapproved">Rejected</button></div>
<div class="mx-1"><button type="button" class="btn btn-primary" id="btn_approved">Approved</button></div>
<div class="mx-1"><button type="submit" class="btn btn-primary " id="btn_return" data-toggle="modal" data-target="#exampleModal">Save</button></div>

  </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure return the goods?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <a type="button" id="confirm" class="btn btn-dark" href="<?= base_url('home/general_detail');?>" >Yes, Confirm</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>Successfully Returned</p>
         </div>
       </div>

       <!--Footer-->
       <!-- <div class="modal-footer justify-content-center">
         <a type="button" class="btn btn-info" href="<?php echo base_url('home/dashboard');?>">Dashboard<i class="far fa-gem ml-1 text-white"></i></a>
       </div> -->
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- modal log returned -->
 <div class="modal fade" id="return_log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header float-right">
                <h5>Return Record</h5>
                <div class="text-right"> <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i> </div>
            </div>
            <div class="modal-body">
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Goods</th>
                                <th scope="col">QTY Returned</th>
                                <th scope="col">Date Returned</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bowl Feeder</td>
                                <td>5</td>
                                <td><?php echo date('d-m-Y'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
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
<script>
  document.getElementById("confirm").on('hidden.bs.modal', function(){
  $("#exampleModal").modal("hide");
});

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
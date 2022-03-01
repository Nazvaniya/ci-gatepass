<?= $this->extend('templates/index') ?>
<?= $this->section('ehs/form_detail_chemical_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Gate Pass Detail Chemical Waste</h5>
            </div>
        </div>
    </div>

    <div class="card mt-3 shadow card-body">
    <div class="container px-5">  
      <div class="px-3 py-1 text-white rounded shadow" id="information">Gatepass Information</div>
    <div class="row ">
    <div class="col-sm-12">
      <table class="table table-borderless">
        <tr>
          <td>Date</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
          <td>Issued By</td>
          <td>:</td>
          <td>User</td>
          
        </tr>
        </tr>
         <tr>
          <td>Gate Pass No</td>
          <td>:</td>
          <td>EHS-C/EHS/0003</td>
          <td>Department</td>
          <td>:</td>
          <td>EHS</td>
          
        </tr>
        <tr>
        <td>Type of Waste</td>
          <td>:</td>
          <td>Chemical</td>
          <td>Section</td>
          <td>:</td>
          <td>EHS</td>
          
        </tr> 
      </table>
    </div>
  </div>
  <div class="px-3 py-1 text-white rounded shadow" id="information">Driver Information</div>
  <div class="row">
    <div class="col-sm-12">
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
  <div class="px-3 py-1 text-white rounded shadow" id="information">Approval Information</div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputApprovalStatus">Approval Status</label>
      <input type="text" class="form-control" id="approval_status" value="Waiting from Authorizer" readonly>
    </div>
  <div class="form-group col-sm-4">
      <label for="inputTakeDate">Approval Date</label>
      <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputApprover">Approver Name</label>
      <input type="text" class="form-control" id="approval_name" value="N/A" readonly>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputValidatorStatus">Validation Status</label>
      <input type="text" class="form-control" id="validation_status" value="N/A" readonly>
    </div>
  <div class="form-group col-sm-4">
      <label for="inputTakeDateValid">Validation Date</label>
      <input type="text" class="form-control" id="action_take_validation" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputValidator">Validator Name</label>
      <input type="text" class="form-control" id="validator_name" value="N/A" readonly>
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
    <!-- <div class="form-group col-sm-4" id="data_expected_date">
      <label for="data_expected_date">Expected Date of Return</label>
      <input type="text" class="form-control" name="data_expected_date"   value="<?= "N/A" //date('d-m-Y'); ?>" readonly>
    </div> -->
  </div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4">
  <div class="card" style="width: 18rem;">
  <div class="card-header">
    Truck & Goods Photo
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <a href="a">
        img 17122021.jpg
      </a>  
    </li>
  </ul>
</div>
  </div>
  </div>
  <div class="row">
    <div class="col text-right">
      <a type="button" href="<?php echo base_url('home/revisi_chemical'); ?>" class="btn btn-warning">Revision Weight</a>
    </div>
  </div>
  <div class="row">
  <div class="mb-3 col-sm-12">
  <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th>Type of goods</th>
                <th>Manifest No</th>
                <th>Qty</th>
                <th>Weight</th>
                <!-- <th>Return Type</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Flux</td>
                <td>JL 0067849</td>
                <td>4 Drum</td>
                <td>500 Kg</td>
                <!-- <td>Unreturnable</td> -->
            </tr>
            <tr>
                <td>2</td>
                <td>Coolant</td>
                <td>JL 0067850</td>
                <td>3 Tin</td>
                <td >200 Kg</td>
                <!-- <td>Unreturnable</td> -->
            </tr>
        </tbody>
    </table>
  </div>
</div>
  </div>
<div class="row">
 <div class="col text-right">
    <button type="button" onClick="history.go(-1);" class="btn btn-dark">Back</button>
    <a type="button" href="<?php echo base_url('/invoice'); ?>" class="btn btn-info add_item_btn">Generate Transported Report</a>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Reject</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess">Approve</button>
 </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to reject this gate pass?</h5>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Yes, Reject</button>
      </div>
    </div>
  </div>
</div>

 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to approve this gate pass?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->

       <!--Footer-->
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Yes, Approve</button>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->
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


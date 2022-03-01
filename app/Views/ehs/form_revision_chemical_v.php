<?= $this->extend('templates/index') ?>

<?= $this->section('ehs/form_revision_chemical_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Revision Gate Pass Chemical Waste</h5>
            </div>
        </div>
    </div>

    
    <form>
    <div class="card mt-3 shadow card-body card-body">
    <div class="p-1 text-white rounded shadow" id="information">Gatepass Information</div>
    <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputNoGatepass">Gate Pass No</label>
      <input type="text" class="form-control" id="no_gatepass" value="EHS-C/EHS/0003" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputdate">Date</label>
      <input type="text" class="form-control" id="date"  value="<?php echo date('d-m-Y'); ?>" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputTyWaste">Type of Waste</label>
      <input type="text" class="form-control" id="typeofwaste" placeholder="Chemical" value="Chemical" readonly>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputissued">Issued By</label>
      <input type="text" class="form-control" id="issued"  value="User" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputDepartment">Department</label>
      <input type="text" class="form-control" id="department" name="department"  value="EHS" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputSection">Section</label>
      <input type="text" class="form-control" id="section" name="section"  value="EHS" readonly>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Driver Information</div>
  <div class="row ">
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
  <div class="row p-2">
  <div class="mb-3 col-sm-12">
  <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
        <thead>
            <tr>
                <th style="width:30px">No</th>
                <th>Type of goods</th>
                <th>Manifest No.</th>
                <th>Qty</th>
                <th style="width: 100px">Weight(Kg)</th>
                <!-- <th>Return Type</th> -->
                <th style="width: 75px">Weight Revision(Kg)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Flux</td>
                <td>JL 0067849</td>
                <td>4 Drum</td>
                <td>4000</td>
                <!-- <td>Unreturnable</td> -->
                <td>
                  <input type="number"  min="0.1" step="0.1" class="form-control" id="weight" name="weight[]">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Coolant</td>
                <td>JL 0067850</td>
                <td>3 Tin</td>
                <td >150</td>
                <!-- <td>Unreturnable</td> -->
                <td>
                  <input type="number"  min="0.1" step="0.1" class="form-control" id="weight" name="weight[]">
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
  </div>
  <div class="mb-3 form-group col-sm-5">
  <label for="formFileMultiple" class="form-label">Proof of Weighing</label><br>
  <input  type="file" id="formFileMultiple" multiple>
</div>
  <div class="row p-3 justify-content-end">
<div class="col-auto">  
<button type="button" onClick="history.go(-1);" class="btn btn-dark">Back</button>
<input type="reset" value="Clear" class="btn btn-danger"></input>
<button type="button" class="btn btn-primary">Save</button>
</div>
</div>
</div>


</form>
</div>



</body>
</html>


<script> 
var el = document.getElementById("selectType");
el.addEventListener("change", function() {
  var elems = document.querySelectorAll('#remark_reason,#expected_date')
  for (var i = 0; i < elems.length; i++) {
    elems[i].style.display = 'none'
  }
  if (this.selectedIndex === 0) {
    document.querySelector('#remark_reason').style.display = 'block';
  } else {
    document.querySelector('#expected_date').style.display = 'block';
    document.querySelector('#remark_reason').style.display = 'none';
  }
}, false);</script>

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
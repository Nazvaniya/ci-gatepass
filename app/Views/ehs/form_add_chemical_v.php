<?= $this->extend('templates/index') ?>

<?= $this->section('ehs/form_add_chemical_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Request Gate Pass Chemical Waste</h5>
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
  <div class="form-row p-2">
<div class="form-group col-sm-4">
      <label for="inputvendor">Name of Vendor</label>
      <select class="form-control" id="name_vendor" name="vendor_name">
        <option>Choose a Vendor</option>
      </select>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputdriver">Name of Driver</label>
      <select class="form-control" id="name_driver" name="driver_name">
      <option>Choose a Driver</option>
      </select>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputRegnNo">Vehicle Regn No</label>
      <select class="form-control" id="regn_no" name="regn_no">
      <option>Choose a Vehicle Regn No</option>
      </select>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Goods Information</div>
  <div class="row">
    <div class="col-sm-12">
      <div class="table-responsive">
        <table class="table table-sm">
          <thead>
          <tr>
                    <th style="width: 15px">No</th>
                    <th>Type of Goods</th>
                    <th style="width: 200px">Manifest</th>
                    <th style="width: 75px">QTY</th>
                    <th style="width: 150px">Type of Unit</th>
                    <th style="width: 75px">Weight(Kg)</th>
                    <!-- <th>Return of Type</th> -->
                    <th>Action</th>
                </tr>
          </thead>
          <tbody id="goodslist">
            <tr>
              <td>
                1
              </td>
              <td>  
                <select id="inputTyGoods" class="form-control" name="type_goods[]">
                  <option selected>Choose...</option>
                <option></option>
                </select>
              </td>
              <td>
                <input type="text" class="form-control" id="manifest_no" name="manifest_no[]">
              </td>
              <td>
                <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
              </td>
              <td>
                <select id="inputTyUnit" class="form-control" name="type_unit[]">
                  <option selected>Choose...</option>
                  <option>Unit</option>
                  <option>Lot</option>
                  <option>Kg</option>
                  <option>Pcs</option>
                  <option>Box</option>
                  <option>Jumbo Bag</option>
                  <option>Lorry</option>
                  <option>Pallet</option>
                  <option>Drum</option>
                  <option>Tin</option>
                </select>
              </td>
              <td>
                <input type="number"  min="0.1" step="0.1" class="form-control" id="weight" name="weight[]">
              </td>
              <!-- <td  class="form-group col-sm-2">
                <select id="selectType" class="form-control"  name="return_type[]">
                  <option id="unreturnable">Unreturnable</option>
                  <option id="returnable">Returnable</option>
                </select>
              </td> -->
              <td class="form-group col-sm-1">
                <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
              </td>
            </tr>
          </tbody>
        </table>
        <button type="button" class="btn btn-info add_item_btn">Add More</button>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="form-group col-sm-5 mt-4" id="expected_date">
        <label for="inputdate">When will the all of goods be returned?</label>
        <input type="date" class="form-control" name="expected_date">
      </div>
  </div>
  <div class="row">
      <div class="mb-3 form-group col-sm-5 mt-3">
        <label for="formFileMultiple" class="form-label">Truck & Goods Photos </label><br>
        <input  type="file" id="formFileMultiple" multiple>
      </div>
  </div>
    
  <div class="row p-3 justify-content-end">
<div class="col-auto">  
<button type="button" onClick="history.go(-1);" class="btn btn-dark">Back</button>
<input type="reset" value="Reset" class="btn btn-warning"></input>
<button type="button" class="btn btn-primary">Save</button>
</div>
</div>
</div>


</form>
</div>



</body>
</html>


<script>
  $(document).ready(function(){
    let no = 1;
    $(".add_item_btn").click(function(e){
      e.preventDefault();
      $("#goodslist").append(`
      <tr>
          <td>
          ${++no}
          </td>
          <td>  
            <select id="inputTyGoods" class="form-control" name="type_goods[]">
              <option selected>Choose...</option>
            <option></option>
            </select>
          </td>
          <td>
            <input type="text" class="form-control" id="manifest_no" name="manifest_no[]">
          </td>
          <td>
            <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
          </td>
          <td>
            <select id="inputTyUnit" class="form-control" name="type_unit[]">
              <option selected>Choose...</option>
              <option>Unit</option>
              <option>Lot</option>
              <option>Kg</option>
              <option>Pcs</option>
              <option>Box</option>
              <option>Jumbo Bag</option>
              <option>Lorry</option>
              <option>Pallet</option>
              <option>Drum</option>
              <option>Tin</option>
            </select>
          </td>
          <td>
            <input type="number"  min="1" class="form-control" id="weight" name="weight[]">
          </td>
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
            <button type="button" class="btn btn-danger btn-sm remove_item_btn">X</button></i>
          </td>
        </tr>
      `);
    });

    $(document).on('click', '.remove_item_btn', function(e){
      e.preventDefault();
      let row_item = $(this).parent().parent();
      $(row_item).remove();
      no--;
    });

  });

 
</script>
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
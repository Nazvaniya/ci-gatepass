<?= $this->extend('templates/bmo') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1 ">
              <img id="access" src="<?= base_url('/image/searching.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Search Goods Page</h5>
            </div>
        </div>
    </div>

    
    <form>

    <div class="card mt-3 shadow card-body">  
    <div class="row">
      <div class="col-6">
      <div class="form-group">
          <label for="inputNoGatepass">Gate Pass No</label>
          <input type="text" class="form-control" id="no_gatepass" value="">
        </div>
        <div class="form-group">
          <label for="inputTypeGoods">Type of Goods</label>
          <input type="text" class="form-control" id="type_goods" value="">
        </div>
        <div class="form-group">
          <label for="inputemployeename">Employee Name</label>
          <input type="text" class="form-control" id="employee_name" value="">
        </div>
        <div class="form-group">
        <label for="inputReturn">Return Type</label>
          <select id="selectType" class="form-control" >
            <option value="">Unreturnable</option>
            <option value="">Returnable</option>
          </select>
        </div>
      </div>
      <div class="col-6">
      <div class="form-group">
      <div class="form-group" id="dateinput">
          <label for="from_date">Date</label>
          <input type="text" class="form-control" name="datefilter">   
        </div>
        <label for="inputReturn">Employee No</label>
        <input id="selectType" class="form-control">
      </div>
      <div class="row">
          <div class="col-6">
          <div class="form-group" id="from_date">
          <label for="from_date">Vendor</label>
          <select class="form-control select2" id="name_vendor" name="vendor_name">
            <option>Choose a Vendor</option>
            <option>PT. Duta Computer</option>
            <option>PT. Darma Pacific</option>
            <option>PT. Terra Pasifik Profilindo</option>
          </select> 
        </div>
          </div>
          <div class="col-6">
          <div class="form-group"  id="to_date">
          <label for="to_date">Driver</label>
          <select class="form-control select2 otherdropdown" id="name_driver" name="driver_name">
            <option>Choose a Driver</option>
            <option>Budi</option>
            <option>Andi</option>
            <option value="other">Other</option>
          </select>
        </div>
          </div>
        </div>
        <div class="form-group"  id="expectdate">
          <label for="expectdate">Expected Date</label>
          <input type="text" class="form-control" name="expectdate">
        </div>
      </div>

      </div>
      <div class="row p-3 justify-content-end">
    <div class="col-auto" >  
    <button type="button" onClick="history.go(-1);" class="btn btn-dark btn-sm">Back</button>
    <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></i>Reset</button>
    <button type="button" class="btn btn-primary btn-sm text-white"><i class="bi bi-funnel-fill"></i>Filter</button>
    </div>
</div>


</div>
</form>



<div class="card mt-3 shadow p-3" style="max-width: 100%">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered table-sm p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Type of Goods</th>
                <th>Gate Pass No</th>
                <th>Issued By</th>
                <th>Department</th>
                <th>Driver</th>
                <th>Entry Date</th>
                <th>Type of Return</th>
                <th>Expected Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Grinding Welding Electrode Lower</td>
                <td>General/RES/2202/0011</td>
                <td>Syarifuddin</td>
                <td>Resistor</td>
                <td>Edy</td>
                <td><?php echo date('d-m-Y'); ?></td>
                <td><span class="badge badge-info">Returnable</span></td>
                <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+5days")); ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bowl Feeder</td>
                <td>General/RES/2202/0008</td>
                <td>Syarifuddin</td>
                <td>Resistor</td>
                <td>Edy</td>
                <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-3days")); ?></td>
                <td><span  class="badge badge-info">Returnable</span></td>
                <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+5days")); ?></td>
            </tr>  
        </tbody>
    </table>
</div>
  </div>
</div>

</body>
</html>
<script type="text/javascript">
$(function() {

  $('input[name="datefilter"], input[name="expectdate"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"], input[name="expectdate"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
  });

  $('input[name="datefilter"], input[name="expectdate"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
</script>
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

});
</script>
   <script>$(document).ready(function() {
    $('#example').DataTable({
   
     
    });
} );</script>
<script>
    var x = document.getElementById("type_gatepass").value;
 // Check if it is not empty
 if(x == "EHS"){
  document.querySelector('#type_Waste').style.display = 'block';
 
  }  else{
    document.querySelector('#type_Waste').style.display = 'none';
  }
  console.log(x)
</script>
<?= $this->endSection() ?>

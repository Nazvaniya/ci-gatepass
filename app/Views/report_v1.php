<?= $this->extend('templates/index') ?>
<?= $this->section('report_v') ?>
<div class="container mt-2">

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

    
    <form>
    <div class="card mt-3 shadow card-body">  
    <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputReturn">Type of Gate pass</label>
      <select id="selectType" class="form-control" >
        <option id="General">General</option>
        <option id="Logistic">Logistic</option>
        <option id="EHS">EHS</option>
      </select>
    </div>  
    <div class="form-group col-sm-4">
      <label for="inputReturn">Type of Item</label>
      <select id="selectType" class="form-control" >
        <option value="">Copper</option>
        <option value="">Plastic</option>
        <option value="">Paper</option>
      </select>
    </div> 
    <div class="form-group col-sm-4" id="from_date">
      <label for="from_date">From Date</label>
      <input type="date" class="form-control" name="from_date">
    </div>
    </div>
    <div class="form-row p-2 "> 
    <div class="form-group col-sm-4">
      <label for="inputReturn">Type of Waste</label>
      <select id="selectType" class="form-control" >
        <option id="chemical_waste">Chemical Waste</option>
        <option id="scrap_waste">Scrap Waste</option>
        <option id="general waste">General Waste</option>
      </select>
    </div>  
    <div class="form-group col-sm-4">
      <label for="inputReturn">Vendor</label>
      <select id="selectType" class="form-control" >
        <option id="">PT. Makmur Abadi</option>
        <option id="Logistic">PT. Sadar Sana</option>
        <option id="EHS">PT. Dasar Warna</option>
      </select>
    </div>  
    <div class="form-group col-sm-4" id="to_date">
      <label for="to_date">To Date</label>
      <input type="date" class="form-control" name="to_date">
    </div>
    </div>
    <div class="row p-3 justify-content-end">
<div class="col-auto" >  
<button type="button" class="btn btn-primary">Filter</button>
</div>
</div>

</div>
</form>



<div class="card mt-3 shadow p-3" style="max-width: 100%">
    <script>$(document).ready(function() {
    $('#example').DataTable({
   
     
    });
} );</script>
<button class="btn btn-success col-sm-2 m-1" type="button">Export to Excel</button>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Gate Pass No</th>
                <th>Issued By</th>
                <th>Department</th>
                <th>Entry Date</th>
                <th>Approval Status</th>
                <th>Verification Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>EHS-C/EHS/0003</td>
                <td>Siswanto</td>
                <td>EHS</td>
                <td>03-10-2021</td>
                <td ><span  class="badge badge-success"> Approved</span></td>
                <td ><span  class="badge badge-info"> Verified</span></td>
                <td>
                <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail" type="button"><i class="bi bi-list"></i></button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>EHS-C/EHS/0002</td>
                <td>Budi</td>
                <td>EHS</td>
                <td>03-10-2021</td>
                <td><span  class="badge badge-success"> Approved</span></td>
                <td><span  class="badge badge-info"> Verified</span></td>
                <td>
                <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail" type="button"><i class="bi bi-list"></i></button>
                </td>
            </tr>  
        </tbody>
    </table>
</div>
  </div>
</div>

</body>
</html>

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

});</script>
<?= $this->endSection() ?>
<?= $this->extend('templates_security/index') ?>
<?= $this->section('security/form_detail_chemical_verified_v') ?>
<div class="container mt-1">

    <div class="card px-5 py-2 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Gate Pass Detail Chemical Waste</h5>
            </div>
        </div>
    </div>

    <div class="card mt-2 shadow card-body">
    <div class="card-header bg-white">
    <div class="container px-5"> 
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('securitycontroller/detail_chemical_info'); ?>">Main Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('securitycontroller/detail_chemical_verified'); ?>">Goods Information</a>
      </li>
    </ul>
  </div>
    </div>
    <div class="container px-5">  
      <div class="p-1 text-white rounded shadow" id="information">Goods Information</div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4">
  <div class="card">
  <div class="card-header">
    Attachment
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Buki Timbangan.pdf</li>
    <li class="list-group-item">img 17122021.jpg</li>
  </ul>
</div>
  </div>
  <div class="form-group col-sm-4">
      <label for="returntype">Reason Disapproved</label>
      <input type="text" class="form-control" id="return_dis" value="NA" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="Remark">Reason Rejected</label>
      <input type="text" class="form-control" id="reason_reject" value="NA" readonly>
    </div>
  </div>
  <div class="row p-2">
  <div class="mb-3 col-sm-10">
  <div class="table-responsive">
  <table id="tbl_goods" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Type of goods</th>
                <th>Manifest No</th>
                <th>Quantity</th>
                <th>Type Unit</th>
                <th>Weight</th>
                <th>Check</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Flux</td>
                <td>JL 0067849</td>
                <td>4</td>
                <td >Drum</td>
                <td >500 Kg</td>
                <td>
                  <div class="form-check">
                <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Coolant</td>
                <td>JL 0067850</td>
                <td>3</td>
                <td >Tin</td>
                <td >200 Kg</td>
                <td>
                  <div class="form-check">
                <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                </div></td>
            </tr>
                 
        </tbody>
    </table>
  </div>
</div>
  </div>
</div>
<div class="row p-3 justify-content-end">
<div class="col-auto">  
<button type="button" class="btn btn-primary" id="btn_rejected" data-toggle="modal" data-target="#exampleModal"  disabled>Rejected</button>
</div>
<div class="col-auto">  
<button type="button" class="btn btn-primary" id="btn_verified"  disabled>Verified</button>
</div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sure you want to Rejected?</h5>
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
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#scan_modal">Yes, Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Your Code-->
<div class="modal fade" id="scan_modal" tabindex="-1" aria-labelledby="scan_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scan_modal_label">Scan Your Barcode ID?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="">
       <div class="form-group">
        <label for="">Waiting</label>
        <input type="text" class="form-control " id="name" name="name" placeholder="name" readonly>
        <div class="invalid-feedback errorName">
          Please Scan Correct Barcode ID.
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


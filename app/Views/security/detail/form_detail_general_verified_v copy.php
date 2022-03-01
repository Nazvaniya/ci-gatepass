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
        <a class="nav-link"  href="<?= base_url('security/detail/general_info'); ?>">Informasi Utama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active"  href="<?= base_url('security/detail/general_verify'); ?>">Informasi Barang</a>
      </li>
    </ul>
  </div>
    </div>
    <div class="container px-5">  
      <div class="p-1 text-white rounded shadow" id="information">Informasi Barang</div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4" id="data_expected_date">
          <label for="data_expected_date">
            Expected Date all of goods be return
          </label>
          <input type="text" class="form-control" name="data_expected_date"   value="<?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+5days")); ?>" readonly>
      </div> 
    <div class="form-group col-sm-4" id="data_actual_date">
      <label for="data_actual_date">Actual Date of Return</label>
      <input type="text" class="form-control" name="data_actual_date"   value="N/A" readonly>
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
                <th>Quantity</th>
                <th>Return Type</th>
                <th>Remark</th>
                <th>Image</th>
                <th>Check</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>RFID Card</td>
                <td>10 Unit</td>
                <td>Returnable</td>
                <td>Study rfid card</td>
                <td><img id="access" alt="image" data-toggle="modal" data-target="#popup_image" src="<?= base_url('/image/rfid.jpg'); ?>"></td>
                <td>
                <div class="form-check">
                <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                </div></td>
            </tr>     
            <tr>
                <td>2</td>
                <td>RFID Reader</td>
                <td>4 Unit</td>
                <td>Returnable</td>
                <td>Study rfid reader</td>
                <td><img id="access" alt="image" data-toggle="modal" data-target="#popup_image2" src="<?= base_url('/image/reader.jpg'); ?>"></td>
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
<button type="button" class="btn btn-danger" id="btn_rejected" data-toggle="modal" data-target="#exampleModal"  disabled>Reject</button>
</div>
<div class="col-auto">  
<button type="button" class="btn btn-primary" id="btn_verified" data-toggle="modal" data-target="#scan_modal" disabled>Verify</button>
</div>
  </div>
</div>
<!-- Modal reason rejected -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
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
        <input type="text" class="form-control " id="reason" name="reason" placeholder="Your Reason">
        <div class="invalid-feedback errorName">
          Please give your reason.
        </div>
      </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#scan_modal">Yes, Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Your Code-->
<div class="modal fade" id="scan_modal" tabindex="-1" aria-labelledby="scan_modal_label" aria-hidden="true">
  <div class="modal-dialog">
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
<!-- modal image -->
<div class="modal fade" id="popup_image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url('/image/rfid.jpg'); ?>" style="width:100%;height:100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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


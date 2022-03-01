<?= $this->extend('templates_security/index') ?>
<?= $this->section('content') ?>
<div class="container mt-1">

    <div class="card px-5 py-2 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Detail Limbah Umum Gate Pass</h5>
            </div>
        </div>
    </div>

    <div class="card mt-2 shadow card-body">
    <div class="card-header bg-white">
    <div class="container px-5">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active"  href="<?= base_url('security/detail/general_waste_info'); ?>">Informasi Utama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" h href="<?= base_url('security/detail/general_waste_verify'); ?>">Informasi Barang</a>
      </li>
    </ul>
    </div>
  </div>
    <div class="">  
      <div class="p-1 text-white rounded shadow" id="information">Informasi Gate Pass</div>
    <div class="row ">
    <div class="col-sm-12">
    <table class="table table-borderless">
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
          <td>Dikeluarkan Oleh</td>
          <td>:</td>
          <td>April</td>
        </tr>
         <tr>
          <td>Nomor Gate Pass</td>
          <td>:</td>
          <td>EHS-G/EHS/0002</td>
          
          <td>Departemen</td>
          <td>:</td>
          <td>EHS</td>

        </tr>
        <tr>
          <td>Jenis Limbah</td>
          <td>:</td>
          <td>General Waste</td>
        <td>Section</td>
          <td>:</td>
          <td>EHS</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
  <div class="row ">
    <div class="col-sm-12">
      <table class="table table-borderless">
        <tr>
          <td>Nama Vendor</td>
          <td>:</td>
          <td>PT. Jamewin</td>
          <td>Nama Sopir</td>
          <td>:</td>
          <td>Didit</td>
          <td>Nomor Kendaraan</td>
          <td>:</td>
          <td>BP 9832 BZ</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Informasi Persetujuan</div>
  <div class="form-row p-1">
  <div class="form-group col-sm-3">
      <label for="inputApprovalStatus">Status Persetujuan Pengajuan</label>
      <input type="text" class="form-control" id="approval_status" value="Approved" readonly>
    </div>
    <div class="form-group col-sm-3">
          <label for="inputTakeDate">Tanggal Persetujuan Pengajuan</label>
      <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
    </div>
    <div class="form-group col-sm-3">
        <label for="inputApprover">Penyetuju Pengajuan</label>
      <input type="text" class="form-control" id="approval_name" value="Fitriansyah" readonly>
    </div>
    <div class="form-group col-sm-3">
          <label for="returntype">Pernyataan Persetujuan Pengajuan</label>
          <input type="text" class="form-control" id="return_dis" value="N/A" readonly>
    </div>
  </div>
  <div class="form-row p-1">
  <div class="form-group col-sm-3">
          <label for="inputValidatorStatus">Status Verifikasi Security </label>
      <input type="text" class="form-control" id="validation_status" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-3">
          <label for="inputTakeDateValid">Tanggal Terverifikasi Security </label>
      <input type="text" class="form-control" id="action_take_validation" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-3">
          <label for="inputValidator">Pemverifikasi Security</label>
      <input type="text" class="form-control" id="validator_name" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-3">
          <label for="Remark">Pernyataan Verifikasi Security</label>
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


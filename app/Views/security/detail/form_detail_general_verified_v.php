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
    <div class="">  
      <div class="p-1 text-white rounded shadow" id="information">Informasi Barang</div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4" id="data_expected_date">
          <label for="data_expected_date">
          Perkiraan Semua Barang Dikembalikan
          </label>
          <input type="text" class="form-control" name="data_expected_date"   value="<?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+5days")); ?>" readonly>
      </div> 
    <div class="form-group col-sm-4" id="data_actual_date">
      <label for="data_actual_date">Tanggal Pengembalian Sebenarnya</label>
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
                <th>Jenis Barang</th>
                <th>Kuantitas</th>
                <th>Jenis Pengembalian</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th>Cek</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                  <td>1</td>
                  <td>Grinding Welding Electrode Lower</td>
                  <td>6 Pcs</td>
                  <td>Returnable</td>
                  <td>Send to Terra</td>
                  <td><img id="access" data-toggle="modal" data-target="#popup_image" src="<?= base_url('/image/stick.jpg'); ?>"></td>
                  <td>
                  <div class="form-check">
                  <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                  </div>
                  </td>
                </tr>     
        </tbody>
    </table>
  </div>
</div>
  </div>
</div>
<div class="row p-3 justify-content-end">
<div class="col-auto">  
<button type="button" class="btn btn-danger" id="btn_rejected" data-toggle="modal" data-target="#exampleModal"  disabled>Menolak</button>
</div>
<div class="col-auto">  
<button type="button" class="btn btn-primary" id="btn_verified" data-toggle="modal" data-target="#scan_modal" disabled>Verifikasi</button>
</div>
  </div>
</div>
<!-- Modal reason rejected -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menolak?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="">
       <div class="form-group">
        <label for="">Silahkan Berikan Alasan Anda</label>
        <input type="text" class="form-control " id="reason" name="reason" placeholder="Alasan Anda">
        <div class="invalid-feedback errorName">
        Silahkan Berikan Alasan Anda.
        </div>
      </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#scan_modal">Ya, Konfirmasi</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Your Code-->
<div class="modal fade" id="scan_modal" tabindex="-1" aria-labelledby="scan_modal_label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scan_modal_label">Scan ID Barcode Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="">
       <div class="form-group">
        <label for="">Menunggu...</label>
        <input type="text" class="form-control " id="name" name="name" placeholder="Nama" readonly>
        <div class="invalid-feedback errorName">
        Silakan Pindai ID Barcode yang Benar.
        </div>
      </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-dark">Ya, Konfirmasi</button>
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
        <img src="<?php echo base_url('/image/stick.jpg'); ?>" style="width:100%;height:100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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


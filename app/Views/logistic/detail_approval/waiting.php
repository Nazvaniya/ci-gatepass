<?= $this->extend('templates/logistic') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/logistic.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Detail Finish Goods & Material Gate Pass</h5>
            </div>
        </div>
    </div>

    <div class="card mt-3 shadow card-body">
    <!-- <div class="alert alert-warning" role="alert">
      There is a date extension that needs approval on this gate pass : <a href="">Details</a>
    </div> -->
    <div class="">  
      <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Gate Pass</div>
    <div class="row">
    <div class="col-sm-10">
      <table class="table table-borderless">
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
          <td>Dikeluarkan Oleh</td>
          <td>:</td>
          <td>Gunawan</td>
        </tr>
        <tr>
          <td>Nomor Gate Pass</td>
          <td>:</td>
          <td>FG-M/0122/0004</td>
          <td>Departemen</td>
          <td>:</td>
          <td>Logistic</td>
        </tr>
        <tr>
        <td>Status Barang</td>
          <td>:</td>
          <td id="goods_status">N/A</td>
          <td>Bagian</td>
          <td>:</td>
          <td>Logistic</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
  <div class="row ">
    <div class="col-sm-12">
      <table class="table table-borderless">
        <tr>
          <td>Nama Vendor</td>
          <td>:</td>
          <td>PT. Tropolis</td>
          <td>Nama Sopir</td>
          <td>:</td>
          <td>Ron</td>
          <td>Nomor Kendaraan</td>
          <td>:</td>
          <td>Bp 2946 XZ</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Persetujuan</div>
  <div class="form-row p-2">
    <div class="form-group col-sm-3">
    <label for="inputApprovalStatus">Status Persetujuan Pengajuan</label>
      <input type="text" class="form-control" id="approval_status" value="Waiting Approval" readonly>
    </div>
  <div class="form-group col-sm-3">
  <label for="inputTakeDate">Tanggal Persetujuan Pengajuan</label>
      <input type="text" class="form-control" id="action_take_approve" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-3">
    <label for="inputApprover">Penyetuju Pengajuan</label>
      <input type="text" class="form-control" id="approval_name" value="N/A" readonly>
    </div>
    <div class="form-group col-sm-3">
    <label for="returntype">Pernyataan Persetujuan Pengajuan</label>
      <input type="text" class="form-control" id="return_dis" value="N/A" readonly>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-3">
    <label for="inputValidatorStatus">Status Verifikasi Security</label>
      <input type="text" class="form-control" id="Security Verifi_status" value="N/A" readonly>
    </div>
  <div class="form-group col-sm-3">
  <label for="inputTakeDateValid">Tanggal Terverifikasi Security</label>
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
  <div class="p-1 text-white rounded shadow mb-1" id="information">Informasi Barang</div>
  <div class="form-row p-2">
      <div class="form-group col-sm-4" id="data_expected_date">
          <label for="data_expected_date">
          Perkiraan Semua Barang Dikembalikan
            <!-- <a href="#" data-toggle="modal" data-target="#extend_date"><i class="bi bi-pencil-fill"></i></a>
            <a href="#" class="btn btn-sm btn-link text-danger font-weight-bold bdg" nbr="1" data-toggle="modal" data-target="#extend_date_approval">New</a> -->
          </label>
          <input type="text" class="form-control" name="data_expected_date" value="N/A" readonly>
      </div> 
    <div class="form-group col-sm-4" id="data_actual_date">
      <label for="data_actual_date">Tanggal Pengembalian Sebenarnya</label>
      <input type="text" class="form-control" name="data_actual_date"   value="N/A" readonly>
    </div>
  </div>
  <div class="form-row p-2">
  <div class="form-group col-sm-4">
  <div class="card" style="width: 18rem;">
  <div class="card-header">
    Foto Truck & Barang
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <a href="" data-toggle="modal" data-target="#popup_image">
        img 17122021.jpg
      </a>
    </li>
    <li class="list-group-item">
    <a href="" data-toggle="modal" data-target="#popup_image2">
        img 17122022.jpg
      </a>
    </li>
  </ul>
</div>
  </div>
  </div>
  <div class="form-group px-4 row justify-content-end d-none" > 
  <div  class="mx-1"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#returning_goods">Return The Goods</button></div>  
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#return_log">Returned Record</button> 
  </div>
  <div class="row p-2">
  <div class="mb-3 col-sm-12">
  <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th>Jenis Barang</th>
                <th>Qty</th>
                <th>Jenis Pengembalian</th>
                <th>Keterangan</th>
                <th>Estimasi Kembali</th>
                <th>Status</th>
                <th style="width: 150px">Sisa Pinjaman</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Resistor</td>
                <td>5 Pallet</td>
                <td>Tidak Dikembalikan</td> 
                <td>Untuk disimpan di tropolis</td> 
                <td>N/A</td>
                <td>N/A</td>
                <td>0 Unit</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Capasitor Material</td>
                <td>10 Pallet</td>
                <td>Tidak Dikembalikan</td> 
                <td>Untuk disimpan di tropolis</td> 
                <td>N/A</td>
                <td>N/A</td>
                <td>0 Unit</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Coil Material</td>
                <td>4 Pallet</td>
                <td>Tidak Dikembalikan</td> 
                <td>Untuk disimpan di tropolis</td> 
                <td>N/A</td>
                <td>N/A</td>
                <td>0 Unit</td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
  </div>
</div>
<div class="row">
<div class="col text-right">
<button type="button" onClick="history.go(-1);" class="btn btn-dark">Kembali</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rejectModal" >Menolak</button> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approveModal">Menyetujui</button>
<!-- <button type="button" class="btn btn-primary">Returning Goods</button> -->
</div>
  </div>
</div>


<!-- Modal extend expected date -->
<div class="modal fade" id="extend_date" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Extend Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-row p-2">
      <div class="form-group col-sm-6" id="data_expected_date">
          <label for="data_expected_date">Expected Date</label>
          <input type="text" class="form-control" name="old_data_expected_date"   value="<?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+30days")); ?>" disabled>
      </div>
      <div class="form-group col-sm-6" id="data_expected_date">
          <label for="data_expected_date">New Expected Date</label>
          <input type="date" class="form-control" name="new_expected_date">
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal return -->
<div class="modal custom fade" id="returning_goods" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Returning Goods</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row p-2">
  <div class="mb-3 col-sm-12">
  <div class="table-responsive">
  <table id="tbl_goods" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Type of goods</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Loaned Balance</th>
                <th class="">Return Qty</th>
                <th align="center" style="width:75px;">Return All</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Capasitor Material</td>
                <td>10 Pallet</td> 
                <td>Loaned</td>
                <td>0 Unit</td>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Menolak?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="">
       <div class="form-group">
        <label for="">Silahkan Berikan Alasan Anda</label>
        <input type="text" class="form-control " id="name" name="name" placeholder="Alasan Anda">
        <div class="invalid-feedback errorName">
        Silahkan Berikan Alasan Anda.
        </div>
      </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-dark"  href="<?php echo base_url('/logistic/authorizer/rejected');?>">Ya, Konfirmasi</a>
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
        <img src="<?php echo base_url('/image/lorry1.jpg'); ?>" style="width:100%;height:100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- modal image -->
<div class="modal fade" id="popup_image2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url('/image/lorryfront.jpg'); ?>" style="width:100%;height:100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- modal approve -->
<div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin untuk menyetujui Gate Pass ini?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary" href="<?php echo base_url('/logistic/authorizer/approved');?>">Ya, Konfirmasi</a>
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
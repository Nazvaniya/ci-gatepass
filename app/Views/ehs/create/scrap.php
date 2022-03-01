<?= $this->extend('templates/waste') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Pengajuan Limbah Scrap Gate Pass </h5>
            </div>
        </div>
    </div>

   
    <form>
    <div class="card mt-3 shadow card-body card-body">  
    <div class="p-1 text-white rounded shadow" id="information">Informasi Gate Pass</div>
    <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputNoGatepass">Nomor Gate Pass</label>
      <input type="text" class="form-control" id="no_gatepass" value="EHS-S/EHS/0002" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputdate">Tanggal</label>
      <input type="text" class="form-control" id="date"  value="<?php echo date('d-m-Y'); ?>" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputTyWaste">Jenis Limbah</label>
      <input type="text" class="form-control" id="typeofwaste" placeholder="Scrap" value="Scrap" readonly>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputissued">Dikeluarkan Oleh</label>
      <input type="text" class="form-control" id="issued"  value="April" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputDepartment">Departemen</label>
      <input type="text" class="form-control" id="department" name="department"  value="EHS" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputSection">Bagian</label>
      <input type="text" class="form-control" id="section" name="section"  value="EHS" readonly>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
  <div class="form-row p-2">
<div class="form-group col-sm-4">
      <label for="inputvendor">Nama Vendor</label>
      <select class="select2 form-control" id="name_vendor" name="vendor_name" data-placeholder="Pilih Vendor">
        <option></option>
        <option>PT. Desa Air Cargo</option>
        <option>PT. Sentral Agung Himalaya</option>
        <option>PT.Jamewin</option>
      </select>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputdriver">Nama Sopir</label>
      <select class="select2 form-control" id="name_driver" name="driver_name" data-placeholder="Pilih Sopir">
      <option></option>
      <option>Nasikin</option>
      <option>Didit</option>
      </select>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputRegnNo">Nomor Kendaraan</label>
      <select class="select2 form-control" id="regn_no" name="regn_no" data-placeholder="Pilih Nomor Kendaraan">
      <option></option>
      <option>Bp 2946 XZ</option>
      <option>Bp 9055 ZG</option>
      <option>Bp 9033 DU</option>
      <option>Bp 9832 BZ</option>
      </select>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Informasi Barang</div>
  <div class="row ">
    <div class="col-sm-12">
    <div class="table-responsive">
    <table class="table table-sm">
      <thead>
      <tr>
                <th style="width: 25px">No</th>
                <th>Jenis Limbah</th>
                <th style="width: 75px">QTY</th>
                <th style="width: 170px">Jenis Satuan</th>
                <th style="width: 85px">Berat(Kg)</th>
                <th style="width: 135px">Depart/CC</th>
                <!-- <th style="width: 175px">Return Type</th> -->
                <th style="width: 110px">Aksi</th>
            </tr>
      </thead>
      <tbody id="goodslist">
        <tr>
          <td>
            <?php $i=1; echo $i++ ?>
          </td>
          <td>  
          <select class="select2 form-control" name="type_goods[]" data-placeholder="Pilih Limbah">
              <option></option>
              <option>Aluminium</option>
              <option>Copper Lead Frame</option>
              <option>Copper Pin</option>
              <option>Copper Pipe</option>
              <option>Copper Terminal</option>
              <option>Copper Wire</option>
              <option>Lead Frame Iron</option>
              <option>Machine disposal Fix Asset</option>
              <option>Pallet Plastic</option>
              <option>Paper Pin</option>
              <option>Paper Steel</option>
              <option>Plastic  Bobbin</option>
              <option>Plastic Case</option>
              <option>Plastic PE</option>
              <option>Plastic Reel</option>
              <option>Plastic SPK</option>
              <option>Plastic Tray</option>
              <option>Plastik Bobbin</option>
              <option>Plastik PE</option>
              <option>Rubber</option>
              <option>Solder Scrap</option>
              <option>Steel</option>
              <option>Wooden pallet</option>
              <option>Woodent pallet NG</option>
            </select>
          </td>
          <td>
            <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
          </td>
          <td>
          <select class="select2 form-control" name="type_unit[]" data-placeholder="Pilih Jenis Satuan">
                  <option></option>
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
          <select id="inputdept_Cc" class="form-control" name="dept_cc[]">
              <option selected>pilih...</option>
              <option>Capacitor</option>
              <option>Resistor</option>
              <option>Inductor</option>
              <option>Varistor</option>
            </select>
          </td>
          <!-- <td>
          <select id="selectType" class="form-control"  name="return_type[]">
            <option id="unreturnable">Unreturnable</option>
            <option id="returnable">Returnable</option>
          </select>
          </td> -->
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          </td>
        </tr>
      </tbody>
    </table>
    <button type="button" class="btn btn-info add_item_btn">Tambahkan</button>
    </div>
  </div>
</div>

<div class="row">
  <div class="mt-3 form-group col-sm-5" id="expected_date">
    <label for="inputdate">Kapan semua barang akan dikembalikan?</label>
    <input type="date" class="form-control" name="expected_date">
  </div>
</div>

<div class="row">
      <div class="mt-3 form-group col-sm-5">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="camera-tab" data-toggle="tab" href="#camera" role="tab" aria-controls="camera" aria-selected="true">Kamera</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Unggah</a>
            </li>
        </ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="camera" role="tabpanel" aria-labelledby="home-tab">
  <label for="formFileMultiple" class="form-label">Foto Truck & Barang</label><br>
        <!-- <input  type="file" id="formFileMultiple" multiple> -->
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#takephoto">Ambil Foto</button>
        <p class="text-danger small">*Min-Maks 0.1MB-2MB</p>
      </div>
  <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="profile-tab">
  <label for="formFileMultiple" class="form-label">Foto Truck & Barang</label><br>
  <input  type="file" id="formFileMultiple" multiple>
  <p class="text-danger small">*Min-Maks 0.1MB-2MB</p> 
</div>
</div>
      </div>
    </div>
    
  <div class="row p-3 justify-content-end">
<div class="col-auto">  
<button type="button" onClick="history.go(-1);" class="btn btn-dark">Kembali</button>
<input type="reset" value="Bersihkan" class="btn btn-danger"></input>
<button type="button" class="btn btn-primary">Simpan</button>
</div>
</div>
</div>
</form>
</div>

<div class="modal" id="takephoto" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Take Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <video autoplay="true" id="videoElement" width="100%" height="300px">
	
    	</video>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Take</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>


<script>
var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}

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
          <select class="select2 form-control" name="type_goods[]" data-placeholder="Pilih Limbah">
              <option></option>
              <option>Aluminium</option>
              <option>Copper Lead Frame</option>
              <option>Copper Pin</option>
              <option>Copper Pipe</option>
              <option>Copper Terminal</option>
              <option>Copper Wire</option>
              <option>Lead Frame Iron</option>
              <option>Machine disposal Fix Ass</option>et
              <option>Pallet Plastic</option>
              <option>Paper Pin</option>
              <option>Paper Steel</option>
              <option>Plastic  Bobbin</option>
              <option>Plastic Case</option>
              <option>Plastic PE</option>
              <option>Plastic Reel</option>
              <option>Plastic SPK</option>
              <option>Plastic Tray</option>
              <option>Plastik Bobbin</option>
              <option>Plastik PE</option>
              <option>Rubber</option>
              <option>Solder Scrap</option>
              <option>Steel</option>
              <option>Wooden pallet</option>
              <option>Woodent pallet NG</option>
            </select>
          </td>
          <td>
            <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
          </td>
          <td>
          <select class="select2 form-control" name="type_unit[]" data-placeholder="Pilih Jenis Unit">
                  <option></option>
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
          <select id="inputdept_Cc" class="form-control" name="dept_cc[]">
              <option selected>Pilih...</option>
              <option>Capacitor</option>
              <option>Resistor</option>
              <option>Inductor</option>
              <option>Varistor</option>
            </select>
          </td>
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          <button type="button" class="btn btn-danger btn-sm remove_item_btn">X</button></i>
          </td>
        </tr>
          
      `);
      $('.select2').select2({
        
        theme: 'bootstrap4',
        allowClear: true
      });
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

});
</script>
<script>
  $(document).ready(function() {
    
      $('.select2').select2({
        theme: 'bootstrap4',
        allowClear: true
      });
    
  });
</script>
<?= $this->endSection() ?>
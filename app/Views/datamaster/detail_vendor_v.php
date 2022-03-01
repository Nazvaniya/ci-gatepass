<?= $this->extend('templates/index') ?>
<?= $this->section('datamaster/detail_vendor_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/default.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Detail Vendor</h5>
            </div>
        </div>
    </div> 
    <form>
    <div class="card mt-3 shadow card-body">
    <div class="p-1 text-white rounded shadow" id="information">Informasi Vendor
    <a type="button" class="btn btn-sm text-white"  data-toggle="modal" data-target="#edit_vendor"  data-placement="bottom" title="Edit Vendor" ><i class="bi bi-pencil-fill"></i></a>
    </div>
    <div class="form-row p-2">
    <div class="form-group col-4">
      <label for="inputregist_no">Nomor Registrasi</label>
      <input type="text" class="form-control" id="registration_no" value="3000483" readonly>
    </div>
    <div class="form-group col-4">
      <label for="inputContact">Email</label>
      <input type="text" class="form-control" id="inputEmail" value="DarmaPerkasa@gmail.com" readonly>
    </div>
    <div class="form-group col-4">
      <label for="inputaddress">Alamat</label>
      <input type="text" class="form-control" id="address" rows="3" value="Jl. Ahmad Yani, Kara Industrial" readonly>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-4">
      <label for="inputvendorname">Nama Vendor</label>
      <input type="text" class="form-control" id="vendor_name" value="PT. Darma Perkasa" readonly>
    </div>
    <div class="form-group col-4">
      <label for="inputContact_no">Nomor Kontak</label>
      <input type="text" class="form-control" id="contact_no" value="082546859588" readonly>
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Informasi Sopir
  <a type="button" class="btn btn-sm text-white" data-placement="bottom" title="Add Vehicle" data-toggle="modal" data-target="#add_driver"><i class="bi bi-plus-circle"></i></a>
  <a type="button" class="btn btn-sm text-white" data-toggle="modal" data-target="#edit_driver" data-placement="bottom" title="Edit" ><i class="bi bi-pencil-fill"></i></a>
  </div>
  <div class="row ">
    <div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-sm">
        <thead>
            <tr>
            <th style="width: 50px">No</th>
                <th style="width: 150px">ID Sopir</th>
                <th>Name Sopir</th>
                <th>Email</th>
                <th style="width: 200px">Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
          <tr>
          <td class="form-group">
            <?php $i=1; echo $i++ ?>
          </td>
          <div>
          <td class="form-group">  
          <input type="text" class="form-control" id="Driver_ID" value="1001" readonly>
          </td>
          </div>
          <div>
          <td class="form-group">  
          <input type="text" class="form-control" id="Driver_name" value="Nikita banyu" readonly>
          </td>
          </div>
          <div >
          <td class="form-group">
          <input type="email" class="form-control" id="Driver_email" value="Nikitibanyu456@gmail.com" readonly>
          </td>
          </div>
          <div >
          <td class="form-group">
          <input type="text" class="form-control" id="Driver_number" value="0853475474" readonly>
          </td>
          </div>
          </tr>
        </tbody>
        </table>
    </div>
    </div>
  </div> 
  <div class="p-1 text-white rounded shadow" id="information">Informasi Kendaraan
  <a type="button" class="btn btn-sm text-white" data-toggle="modal" data-target="#add_vehicle" data-placement="bottom" title="Add Vehicle"><i class="bi bi-plus-circle"></i></a>
  <a type="button" class="btn btn-sm text-white"  data-toggle="modal" data-target="#edit_vehicle" data-placement="bottom" title="Edit Vehicle" ><i class="bi bi-pencil-fill"></i></a>
  </div>
  <div class="row">
    <div class="col-sm-8">
    <div class="table-responsive">
        <table class="table table">
        <thead>
            <tr>
                <th style="width:50px">No</th>
                <th>Nama Kendaraan</th>
                <th>Nomor Kendaraan</th>
            </tr>
        </thead>
        <tbody>
          <tr>
          <td class="form-group">
            <?php $i=1; echo $i++ ?>
          </td>
          <div>
          <td class="form-group">  
          <input type="text" class="form-control" id="Vehicle_name" value="Lori Nissan" readonly>
          </td>
          </div>
          <div >
          <td class="form-group">
          <input type="text" class="form-control" id="Vehicle_Regn_No" value="Bp 4757 ZY" readonly>
          </td>
          </div>
          </tr>
        </tbody>
        </table>
    </div>
    </div>
  </div> 
  <div class="row p-3 justify-content-end">
<div class="col-auto" >  
<button type="button" onClick="history.go(-1);" class="btn btn-dark btn-sm">Kembali</button>
<button type="button" class="btn btn-primary btn-sm">Simpan</button>
</div>
</div>
</div>
</form>


<!-- Edit Vendor -->
<!-- Modal -->
<div class="modal custom fade" id="edit_vendor" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Vendor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-row p-2">
    <div class="form-group col-4">
      <label for="inputregist_no">Nomor Registrasi</label>
      <input type="text" class="form-control" id="registration_no" value="3000483" readonly>
    </div>
    <div class="form-group col-4">
      <label for="inputContact">Email</label>
      <input type="text" class="form-control" id="inputEmail" value="DarmaPerkasa@gmail.com" >
    </div>
    <div class="form-group col-4">
      <label for="inputaddress">Alamat</label>
      <input type="text" class="form-control" id="address" rows="3" value="Jl. Ahmad Yani, Kara Industrial" >
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-4">
      <label for="inputvendorname">Nama Vendor</label>
      <input type="text" class="form-control" id="vendor_name" value="PT. Darma Perkasa">
    </div>
    <div class="form-group col-4">
      <label for="inputContact_no">Nomor Kontak</label>
      <input type="text" class="form-control" id="contact_no" value="082546859588">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Perbarui</button>
      </div>
    </div>
  </div>
</div>


<!-- add Driver -->
<!-- Modal -->
<div class="modal custom fade" id="add_driver" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Sopir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-sm">
        <thead>
            <tr>
                <th  style="width: 25px">No</th>
                <th style="width: 100px">ID Sopir</th>
                <th style="width: 100px">Nama Sopir</th>
                <th style="width: 100px">Email</th>
                <th style="width: 100px">Nomor Handphone</th>
                <th style="width: 100px">Aksi</th>
            </tr>
        </thead>
        <tbody id="driverlist">
          <tr>
          <td>
            1
          </td>
          <td>  
          <input type="text" class="form-control" id="driver_id[]">
          </td>
          <td>  
          <input type="text" class="form-control" id="driver_name[]">
          </td>
          <td>
          <input type="email" class="form-control" id="driver_email[]">
          </td>
          <td>
          <input type="text" class="form-control" id="driver_number[]">
          </td>
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          </td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
    <div class="form-group row pl-3" >  
    <button type="button" class="btn btn-info add_driver_btn">Tambah</button>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- add Vehicle -->
<!-- Modal -->
<div class="modal custom fade" id="add_vehicle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kendaraan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-sm">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th style="width: 100px">Nama Kendaraan</th>
                <th style="width: 100px">Nomor Kendaraan</th>
                <th style="width: 100px">Aksi</th>
            </tr>
        </thead>
        <tbody id="vehiclelist">
          <tr>
          <td>
            1
          </td>
          <td>  
          <input type="text" class="form-control" id="vehicle_name[]">
          </td>
          <td>  
          <input type="text" class="form-control" id="vehicle_regn_no[]">
          </td>
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          </td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
    <div class="form-group row pl-3" >  
    <button type="button" class="btn btn-info add_vehicle_btn">Tambah</button>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>


<!-- Edit Driver -->
<!-- Modal -->
<div class="modal custom fade" id="edit_driver" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Sopir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-sm">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th style="width: 50px">ID Sopir</th>
                <th style="width: 180px">Nama Sopir</th>
                <th style="width: 180px">Email</th>
                <th style="width: 100px">Nomor Telepon</th>
            </tr>
        </thead>
        <tbody id="driverlist">
        <tr>
          <td>
            <?php $i=1; echo $i++ ?>
          </td>
          <td>  
          <input type="text" class="form-control" id="driver_id" value="1001">
          </td>
          <td>  
          <input type="text" class="form-control" id="driver_name" value="Nikita banyu">
          </td>
          <td>
          <input type="email" class="form-control" id="driver_email" value="Nikitibanyu456@gmail.com">
          </td>
          <td>
          <input type="text" class="form-control" id="driver_number" value="0853475474">
          </td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Perbarui</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Vehicle -->
<!-- Modal -->
<div class="modal custom fade" id="edit_vehicle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Kendaraan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-sm">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th style="width: 100px">Nama Kendaraan</th>
                <th style="width: 100px">Nomor Kendaraan</th>
            </tr>
        </thead>
        <tbody>
        <tr>
          <td class="form-group">
            <?php $i=1; echo $i++ ?>
          </td>
          <td class="form-group">  
          <input type="text" class="form-control" id="vehicle_name" value="Lori Nissan">
          </td>
          <td class="form-group">
          <input type="text" class="form-control" id="vehicle_regn_no" value="Bp 4757 ZY">
          </td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Perbarui</button>
      </div>
    </div>
  </div>
</div>

</div>

</body>
</html>
<script>
  $(document).ready(function(){
    let no = 1;
    $(".add_driver_btn").click(function(e){
      e.preventDefault();
      $("#driverlist").append(`
      <tr>
          <td>
          ${++no}
          </td>
          <td>  
          <input type="text" class="form-control" id="Driver_ID[]">
          </td>
          <td>  
          <input type="text" class="form-control" id="Driver_name[]">
          </td>
          <td>
          <input type="email" class="form-control" id="Driver_email[]">
          </td>
          <td>
          <input type="text" class="form-control" id="Driver_number[]">
          </td>
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          <button type="button" class="btn btn-danger btn-sm remove_item_btn">X</i>
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
  $(document).ready(function(){
    let no = 1;
    $(".add_vehicle_btn").click(function(e){
      e.preventDefault();
      $("#vehiclelist").append(`
      <tr>
          <td>
          ${++no}
          </td>
          <td>  
          <input type="text" class="form-control" id="vehicle_name[]">
          </td>
          <td>  
          <input type="text" class="form-control" id="vehicle_regn_no[]">
          </td>
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          <button type="button" class="btn btn-danger btn-sm remove_vehicle_btn">X</i>
          </td>
          </tr>
        
      `);
    });
    $(document).on('click', '.remove_vehicle_btn', function(e){
    e.preventDefault();
    let row_item = $(this).parent().parent();
    $(row_item).remove();
    no--;
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

});</script>
<?= $this->endSection() ?>
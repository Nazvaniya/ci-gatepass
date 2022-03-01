<?= $this->extend('templates/index') ?>
<?= $this->section('datamaster/regist_vendor_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/default.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Registrasi Vendor</h5>
            </div>
        </div>
    </div> 
    <form>
    <div class="card mt-3 shadow card-body">
    <div class="p-1 text-white rounded shadow" id="information">Informasi Vendor</div>
    <div class="form-row p-2">
    <div class="form-group col-4">
      <label for="inputregist_no">Nomor Registration</label>
      <input type="text" class="form-control" id="registration_no">
    </div>
    <div class="form-group col-4">
      <label for="inputContact">Email</label>
      <input type="text" class="form-control" id="inputEmail">
    </div>
    <div class="form-group col-4">
      <label for="inputaddress">Alamat</label>
      <textarea type="text" class="form-control" id="address" rows="1"></textarea>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-4">
      <label for="inputvendorname">Nama Vendor</label>
      <input type="text" class="form-control" id="vendor_name">
    </div>
    <div class="form-group col-4">
      <label for="inputContact_no">Nomor Kontak</label>
      <input type="text" class="form-control" id="contact_no">
    </div>
  </div>
  <div class="p-1 text-white rounded shadow" id="information">Informasi Sopir</div>
  <div class="row ">
    <div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-sm">
        <thead>
            <tr>
                <th style="width: 50px">No</th>
                <th style="width: 150px">ID Sopir</th>
                <th>Nama Sopir</th>
                <th>Email</th>
                <th style="width: 200px">Nomor Handphone</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="driverlist">
          <tr>
          <td class="form-group">
           1
          </td>
          <td class="form-group">  
          <input type="text" class="form-control" id="Driver_ID">
          </td>
          <td class="form-group">  
          <input type="text" class="form-control" id="Driver_name">
          </td>
          <td class="form-group">
          <input type="email" class="form-control" id="Driver_email">
          </td>
          <td class="form-group">
          <input type="text" class="form-control" id="Driver_number">
          </td>
          <td class="form-group">
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          </td>
          </tr>
        </tbody>
        </table>
        <div id="show_item">
  </div>
    </div>
    <div class="form-group row pl-3" >  
    <button type="button" class="btn btn-info add_driver_btn">Tambah</button>
    </div>
    </div>
  </div> 
  <div class="p-1 text-white rounded shadow" id="information">Informasi Kendaraan</div>
  <div class="row">
    <div class="col-sm-8">
    <div class="table-responsive">
        <table class="table table-sm">
        <thead>
            <tr>
                <th style="width:50px;">No</th>
                <th>Nama Vehicle</th>
                <th>Nomor Kendaraan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="vehiclelist">
          <tr>
          <td class="form-group">
           1
          </td>
          <td class="form-group">  
          <input type="text" class="form-control" id="Vehicle_name">
          </td>
          <td class="form-group">
          <input type="text" class="form-control" id="Vehicle_Regn_No">
          </td>
          <td class="form-group">
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          </td>
          </tr>
        </tbody>
        </table>
    </div>
    <div class="form-group row pl-3" >  
    <button type="button" class="btn btn-info add_vehicle_btn">Tambah</button>
    </div>
    </div>
  </div> 
  <div class="row p-3 justify-content-end">
<div class="col-auto" >  
<button type="button" class="btn btn-primary">Simpan</button>
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
    $(".add_driver_btn").click(function(e){
      e.preventDefault();
      $("#driverlist").append(`
      <tr>
          <td>
            ${++no}
          </td>
          <td class="form-group">  
          <input type="text" class="form-control" id="Driver_ID">
          </td>
          <td class="form-group">  
          <input type="text" class="form-control" id="Driver_name">
          </td>
          <td class="form-group">
          <input type="email" class="form-control" id="Driver_email">
          </td>
          <td class="form-group">
          <input type="text" class="form-control" id="Driver_number">
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
          <td class="form-group">  
          <input type="text" class="form-control" id="Vehicle_name">
          </td>
          <td class="form-group">
          <input type="text" class="form-control" id="Vehicle_Regn_No">
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
<?= $this->extend('templates/index') ?>
<?= $this->section('profile_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/default.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Halaman Profil</h5>
            </div>
        </div>
    </div>

    
    <form>
    <div class="card mt-3 shadow card-body">
    <div class="card-header bg-white">
    <div class="container p-2">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item col-sm-6" role="presentation">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profil</a>
  </li>
  <li class="nav-item col-sm-6" role="presentation">
    <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">Pengaturan</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="container-row py-5">
  <div class="row">
  <div class="col-sm-3 mgbt-xs-20">
    <div class="form-group">
      <div class="col-xs-12">
        <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="<?= base_url('image/user.png'); ?>" style="width: 150px;"> </div>
        <div class="form-img-action text-center mgbt-xs-20"> 
          <a class="btn btn-primary" href="#">
            <i class="fa fa-cloud-upload append-icon"></i> Unggah</a> </div>
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="inputno">Nomor Karyawan</label>
      <input type="text" class="form-control" id="no_employees" value="900484" readonly>
    </div>
    <div class="form-group col-sm-4">
      <label for="department">Departemen</label>
      <input id="department" class="form-control" value="BMO" readonly>
      </input>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputContact">Nomor Kontak</label>
      <input type="text" class="form-control" id="inputContact" value="467484" readonly>
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-6">
      <label for="inputname">Nama</label>
      <input type="text" class="form-control" id="name" value="Dani Mulyani" readonly>
    </div>
    <div class="form-group col-sm-6">
      <label for="section">Bagian</label>
      <input id="section" class="form-control" value="SFPO" readonly>
      </input>
    </div>
  
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-5">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" value="danimulyani@panasonic.com" readonly>
    </div>
    <div class="form-group col-sm-3">
      <label for="designation">Jabatan</label>
      <input id="designation" class="form-control" value="HOD" readonly>
      </input>
    </div>
    <div class="form-group col-sm-4">
      <label for="role">Role</label>
      <input id="role" class="form-control" value="Authorized" readonly>
      </input>
    </div>
    </div>
    <div class="row p-3 justify-content-end">
<div class="col-auto" >  
<button type="button" class="btn btn-primary">Edit</button>
</div>
</div>
</div>
  </div>
  </div>
  </div>
  <div class="tab-pane" id="setting" role="tabpanel" aria-labelledby="setting-tab">
  <div class="container-row py-5">
    <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="oldpass">Password Lama</label>
      <input type="password" class="form-control" id="oldpass" >
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="newpass">Password Baru</label>
      <input type="password" class="form-control" id="newpass" >
    </div>
    <div class="form-group col-sm-4">
      <label for="confirmpass">Konfirmasi Password</label>
      <input type="password" id="confirmpass" class="form-control" >
      </input>
    </div>
  
  </div>
    <div class="row p-3 justify-content-end">
<div class="col-auto" >  
<button type="button" class="btn btn-primary">Simpan</button>
</div>
</div>
  </div>
  </div>
</div>

<script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>
    <!-- <ul class="nav nav-tabs-borderless card-header-tabs">
      <li class="nav-item col-sm-6 ">
        <a class="nav-link active bg-dark text-white" id="profile" href="<?= base_url('home/profile'); ?>">Profil</a>
      </li>
      <li class="nav-item col-sm-6">
        <a class="nav-link text-dark" href="<?= base_url('home/setting'); ?>">Pengaturan</a>
      </li>
    </ul> -->
    </div>
  </div>  

  </div>
</form>
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
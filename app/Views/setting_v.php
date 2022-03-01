<?= $this->extend('templates/index') ?>
<?= $this->section('setting_v') ?>
<div class="container mt-5">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Change Password Page</h5>
            </div>
        </div>
    </div>

    
    <form>
    <div class="card mt-3 shadow card-body">
    <div class="card-header bg-white">
    <div class="container p-2">
    <ul class="nav nav-tabs-borderless card-header-tabs">
      <li class="nav-item col-sm-6 ">
        <a class="nav-link text-dark" id="profile" href="<?= base_url('home/profile'); ?>">Profile</a>
      </li>
      <li class="nav-item col-sm-6">
        <a class="nav-link active bg-dark text-white" href="<?= base_url('home/setting'); ?>">Setting</a>
      </li>
    </ul>
    </div>
  </div>  
  <div class="container-row px-5">
    <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="oldpass">Older Password</label>
      <input type="password" class="form-control" id="oldpass" >
    </div>
  </div>
  <div class="form-row p-2">
    <div class="form-group col-sm-4">
      <label for="newpass">New Password</label>
      <input type="password" class="form-control" id="newpass" >
    </div>
    <div class="form-group col-sm-4">
      <label for="confirmpass">Confirm Password</label>
      <input type="password" id="confirmpass" class="form-control" >
      </input>
    </div>
  
  </div>
    <div class="row p-3 justify-content-end">
<div class="col-auto" >  
<button type="button" class="btn btn-primary">Save</button>
</div>
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
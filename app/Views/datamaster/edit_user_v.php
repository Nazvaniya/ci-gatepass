<?= $this->extend('templates/index') ?>
<?= $this->section('datamaster/regist_user_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/default.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Edit Data Pengguna</h5>
            </div>
        </div>
    </div>

    <div class="card mt-3 shadow card-body">
      <form action="">
        <div class="row">
          <div class="col-6">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Nomor Karyawan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" value="900433" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" value="Budi Tabuti">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Departemen</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" value="BMO">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Bagian</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" value="SFPO">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Jabatan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" value="HOD">
              </div>
            </div>
          </div>
          <div class="col-6">
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Role</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" value="Authorizer">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">E-mail</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="BudiTabuti@panasonic.sg.id">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Telepon</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="0823224102">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Kata Sandi</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="inputEmail3" value="budi1234">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Konfirmasi Kata Sandi</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="inputEmail3" value="budi1234">
              </div>
            </div>
          </div>
          <div class="col text-right">
              <button type="button" class="btn btn-dark ml-auto">Kembali</button>
              <button type="reset" class="btn btn-secondary">Bersihkan</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>

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
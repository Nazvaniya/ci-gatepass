<?= $this->extend('templates/index') ?>
<?= $this->section('datamaster/regist_waste_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Registrasi Data Limbah</h5>
            </div>
        </div>
    </div>

    <div class="card card-shadow mt-3 py-5 px-3">
      <form action="">
        <div class="row">
          <div class="col-6">
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm text-right">Nama Item</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm text-right">Kategori</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm text-right">Kode Limbah Berbahaya</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 text-right">
            <button type="button" class="btn btn-dark" onclick="history.back()">Kembali</button>
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
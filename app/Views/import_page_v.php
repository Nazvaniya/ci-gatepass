<?= $this->extend('templates_security/index') ?>

<?= $this->section('import_page_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/import.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Import Page</h5>
            </div>
        </div>
    </div>

    
    <form>
    <div class="card mt-3 shadow card-body">  
    <button class="btn btn-info col-sm-2 m-1" type="button">Template Import</button>
    <div class="form-row p-2">
    <div class="form-group col-4">
      <label for=" bs-custom-file-input">Import File</label>
      <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFile">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    </div>
    </div>
    <div class="row p-3 justify-content-end">
<div class="col-auto" >  
<button type="button" class="btn btn-primary">Save</button>
</div>
</div>
</div>
</form>
</div>
</body>
</html>
<script>
$(document).ready(function () {
  bsCustomFileInput.init()
})</script>

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
<?= $this->extend('templates/index') ?>

<?= $this->section('datamaster/user_data_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-1">
              <img id="access" src="<?= base_url('/image/default.png'); ?>">
            </div>
            <div class="col-6 align-item-center"> 
              <h5 class="display-5">Data Pengguna</h5>
            </div>
            <div class="col-5 text-right">
              <a type="button" href="<?= base_url('home/regist_user')?>" class="btn btn-primary">Tambah Pengguna</a>
        </div>
    </div>
    </div>
    <div class="card mt-3 shadow p-3" style="max-width: 100%">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Karyawan</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>Departemen</th>
                <th>Jabatan</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <a href="<?= base_url('home/edit_user')?>">
                        900433
                    </a>   
                </td>
                <td>Budi Tabuti</td>
                <td>BudiTabuti@panasonic.sg.id</td>
                <td>BMO/SPO</td>
                <td>HOD</td>
                <td>Authorizer</td>
                <td>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                </td>
            </tr>
          </tbody>
      </table>
</div>
  </div>
  </div>
    </body>
</html>
<script>$(document).ready(function() {
    $('#example').DataTable({
        "language": {
            "url": "/assets/id.json"
          }
    });
} );</script>
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
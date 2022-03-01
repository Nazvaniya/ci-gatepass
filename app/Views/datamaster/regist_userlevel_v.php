<?= $this->extend('templates/index') ?>

<?= $this->section('datamaster/regist_userlevel_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1">
              <img id="access" src="<?= base_url('/image/tier.png'); ?>">
            </div>
            <div class="col-6 align-item-center"> 
              <h5 class="display-5">Tingkatan Pengguna</h5>
            </div>
                <div class="col-5 text-right">
                     <a type="button" data-toggle="modal" data-target="#add_userlevel" class="btn btn-primary">Tambah Tingkatan Pengguna</a>
                </div>
        </div>
    </div>


<!-- Modal add userlevel-->
<div class="modal fade" id="add_userlevel" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Tingkatan Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
            <label for="inputuserlevel">Tingkatan Pengguna</label>
          <input type="text" class="form-control" id="user_level">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal edit userlevel-->
<div class="modal fade" id="edit_userlevel" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Tingkatan Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
            <label for="inputuserlevel">Tingkatan Pengguna</label>
          <input type="text" class="form-control" id="user_level" value="Authorizer">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Perbarui</button>
      </div>
    </div>
  </div>
</div>
    

<div class="card mt-3 shadow p-3" style="max-width: 100%">
    <script>$(document).ready(function() {
    $('#example').DataTable({
       "language": {
            "url": "/assets/id.json"
          }
    });
} );</script>
<div class="table-responsive">
<table id="example" class="table table-sm table-striped table-bordered ">
        <thead>
            <tr>
                <th>No</th>
                <th>Tingkatan Pengguna</th>
                <th>Aksi</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Administrator</td>
                <td>
                    <div class="px-1" >
                        <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Authorizer</td>
                <td>
                    <div class="px-1">
                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit_userlevel" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
          </tbody>
      </table>
</div>
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
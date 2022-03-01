<?= $this->extend('templates/index') ?>

<?= $this->section('datamaster/waste_data_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row align-items-center">
            <div class="col-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-7"> 
              <h5 class="display-5">Data Jenis Limbah</h5>
            </div>
            <div class="col-4 text-right">
              <a type="button" href="<?= base_url('home/regist_waste')?>" class="btn btn-primary">Tambah Data Limbah</a>
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
<table id="example" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Item</th>
                <th>Kategori</th>
                <th>Kode Limbah Berbahaya</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#edit_waste">
                        ACID
                    </a>
                </td>
                <td>Limbah Berbahaya</td>
                <td>A109d</td>
                <td>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" title="Hapus" type="button">
                    <i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <a href="#">
                        COATING
                    </a>
                </td>
                <td>Limbah Berbahaya</td>
                <td>A328-5</td>
                <td>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" title="Hapus" type="button">
                    <i class="bi bi-trash"></i></button>
                </td>
            </tr>
          </tbody>
      </table>
  </div>
  </div>


<!-- Modal edit waste -->
<div class="modal fade" id="edit_waste" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Waste Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
        <div class="row">
          <div class="col-12">
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm text-right">Nama Item</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" value="ACID">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm text-right">Kategori</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" value="LImbah Berbahaya">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm text-right">Kode Limbah Berbahaya</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" value="A109d">
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>


  <div class="modal" id="modalDelete" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Waste Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete this waste?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn text-gray" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Yes, delete</button>
      </div>
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
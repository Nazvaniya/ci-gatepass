<?= $this->extend('templates/waste') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row align-items-center">
            <div class="col-1">
              <img id="access" src="<?= base_url('/image/bin.png'); ?>">
            </div>
            <div class="col-7"> 
              <h5 class="display-5">Waste Data</h5>
            </div>
            <div class="col-4 text-right">
              <a type="button" href="<?= base_url('home/regist_waste')?>" class="btn btn-primary">Add Waste</a>
        </div>
    </div>
    </div>
    <div class="card mt-3 shadow p-3" style="max-width: 100%">
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
<table id="example" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>No</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Hazardous Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <a href="#">
                        ACID
                    </a>
                </td>
                <td>Hazardous Waste</td>
                <td>A109d</td>
                <td>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" title="Delete" type="button">
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
                <td>Hazardous Waste</td>
                <td>A328-5</td>
                <td>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" title="Delete" type="button">
                    <i class="bi bi-trash"></i></button>
                </td>
            </tr>
          </tbody>
      </table>
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
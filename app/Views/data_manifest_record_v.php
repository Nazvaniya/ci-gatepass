<?= $this->extend('templates/index') ?>
<?= $this->section('data_manifest_record_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row justify-content-end">
            <div class="col-auto mr-auto">
              <img id="access" src="<?= base_url('/image/folder.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Manifest Record</h5>
            </div>
    </div>
    </div>
    <div class="card mt-3 shadow p-3" style="max-width: 100%">
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
<table id="example" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Gate Pass No</th>
                <th>Issued By</th>
                <th>Product</th>
                <th>Manifest No</th>
                <th>Entry Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>EHS-C/EHS/0006</td>
                <td>Siswanto</td>
                <td>IPA</td>
                <td>JL 0069813</td>
                <td>03-10-2021</td>
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
                <td>EHS-C/EHS/0006</td>
                <td>Siswanto</td>
                <td>COATING</td>
                <td>JL 0069812</td>
                <td>03-10-2021</td>
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
                <td>3</td>
                <td>EHS-C/EHS/0005</td>
                <td>Dwi</td>
                <td>COOLANT</td>
                <td>JL 0069811</td>
                <td>02-10-2021</td>
                <td>
                    <div class="px-1" >
                        <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
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
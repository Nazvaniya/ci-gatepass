<?= $this->extend('templates/bmo') ?>

<?= $this->section('content') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row justify-content-end">
            <div class="col-auto mr-auto">
              <img id="access" src="<?= base_url('/image/default.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Vendor Data</h5>
            </div>
            <div class="col-auto">
              <a type="button" href="<?= base_url('bmo/datamaster/create');?>" class="btn btn-primary">Add Vendor</a>
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
                <th>Registration No</th>
                <th>Name of Vendor</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Action</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3000483</td>
                <td>PT. Duta Computer</td>
                <td>Admin@dutatcomputer.com</td>
                <td >48796</td>
                <td ></td>
                <td>
                    <div class="px-1" >
                       <a href> <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
            <td>2</td>
                <td>3000484</td>
                <td>PT. Darma Pacific</td>
                <td>Admin@darmapacific.com</td>
                <td >76875</td>
                <td ></td>
                <td>
                    <div class="px-1" >
                      <a href="<?= base_url('bmo/datamaster/detail');?>">  <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button></a>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>3000485</td>
                <td>PT. JMB</td>
                <td>Admin@jmb.com</td>
                <td >80046</td>
                <td ></td>
                <td>
                    <div class="px-1" >
                       <a href> <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>3000486</td>
                <td>PT. Kinden</td>
                <td>Admin@kinden.com</td>
                <td >60045</td>
                <td ></td>
                <td>
                    <div class="px-1" >
                       <a href> <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>3000487</td>
                <td>PT. Sentral Agung Himalaya</td>
                <td>Admin@sentralagunghimalaya.com</td>
                <td >70057</td>
                <td ></td>
                <td>
                    <div class="px-1" >
                       <a href> <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>3000488</td>
                <td>PT. Jamewin</td>
                <td>Admin@Jamewin.com</td>
                <td >40087</td>
                <td ></td>
                <td>
                    <div class="px-1" >
                       <a href> <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="button">
                        <i class="bi bi-trash"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>3000489</td>
                <td>PT. Desa Air Cargo</td>
                <td>Admin@desaaircargo.com</td>
                <td >50047</td>
                <td ></td>
                <td>
                    <div class="px-1" >
                       <a href> <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
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
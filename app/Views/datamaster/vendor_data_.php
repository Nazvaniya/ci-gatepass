<?= $this->extend('templates/index') ?>

<?= $this->section('datamaster/vendor_data_v') ?>
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
              <a type="button" href="<?= base_url('home/regist_vendor')?>" class="btn btn-primary">Add Vendor</a>
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
                <td>PT. Sada Nursada</td>
                <td>SadaNursada@gmail.com</td>
                <td >48796</td>
                <td >Jl. Ahmad Yani, Kara Industrial </td>
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
            <td>1</td>
                <td>3000483</td>
                <td>PT. Darma Perkasa</td>
                <td>DarmaPerkasa@gmail.com</td>
                <td >76875</td>
                <td >Jl. Ahmad Yani, Kara Industrial </td>
                <td>
                    <div class="px-1" >
                      <a href="<?= base_url('home/detail_vendor')?>">  <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit" type="button">
                        <i class="bi bi-pencil"></i></button></a>
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
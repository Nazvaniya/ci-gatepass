<?= $this->extend('templates/resistor') ?>
<?= $this->section('content') ?>
<div class="container mt-5">

    <div class="card px-5 py-3 shadow">
        <div  class="row justify-content-end">
            <div class="col-auto mr-auto">
              <img id="access" src="<?= base_url('/image/folder.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Gate Pass Completed</h5>
            </div>
    </div>
    </div>
    <div class="card mt-3 shadow p-3" style="max-width: 100%">
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
<table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
<thead>
            <tr>
                <th>No</th>
                <th>Entry Date</th>
                <th>Gate Pass No</th>
                <th>Issued By</th>
                <th>Department</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
                <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")) ; ?></td>
                <td>
                    <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
                    General/RES/2202/0006
                    </a>
                </td>
                <td>Syarifuddin</td>
                <td>Resistor</td>
                <td ><span  class="badge badge-success">Completed</span></td>
            </tr>
            <tr>
            <td>2</td>
                <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")) ; ?></td>
                <td>
                    <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
                    General/RES/2202/0005
                    </a>
                </td>
                <td>Syarifuddin</td>
                <td>Resistor</td>
                <td ><span  class="badge badge-success">completed</span></td>
            </tr>
            <tr>
            <td>3</td>
                <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")) ; ?></td>
                <td>
                    <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
                    General/RES/2202/0001
                    </a>
                </td>
                <td>Syarifuddin</td>
                <td>Resistor</td>
                <td ><span  class="badge badge-success">completed</span></td>
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
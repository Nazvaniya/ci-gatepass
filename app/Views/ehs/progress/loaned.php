<?= $this->extend('templates/waste') ?>
<?= $this->section('content') ?>
<div class="container mt-5">

    <div class="card px-5 py-3 shadow">
        <div  class="row justify-content-end">
            <div class="col-auto mr-auto">
              <img id="access" src="<?= base_url('/image/folder.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Dipinjamkan</h5>
            </div>
    </div>
    </div>
    <div class="card mt-3 shadow p-3" style="max-width: 100%">
    <script>$(document).ready(function() {
    $('#example').DataTable({
        "language" : {
            "url": "/assets/id.json"
        }
    });
} );</script>
<table id="example" class="table table-striped table-bordered table-sm p-auto" style="max-width: 100%">
        <thead>
            <tr>
            <th>No</th>
                    <th>Tanggal Buat</th>
                    <th>Nomor Gate Pass</th>
                    <th>Dikeluarkan oleh</th>
                    <th>Departemen</th>
                    <th>Perkiraan Tanggal Pengembalian</th>
                    <th>Status Pengembalian </th>
                    <th>Tanggal Pengembalian Sebenarnya</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>05-01-2022</td>
                <td>
                    <a href="<?php echo base_url('home/general_detail');?>">
                        General/BMO/0004
                    </a>    
                </td>
                <td>April</td>
                <td>EHS</td>
                <td><?php echo date('15-02-2022'); ?></td>
                <td>
                    <span  class="badge badge-info">Dalam Proses</span>
                </td>
                <td>
                    N/A
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
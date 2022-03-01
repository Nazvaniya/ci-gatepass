<?= $this->extend('templates/index') ?>
<?= $this->section('record/data_rejected_gatepass_v') ?>
<div class="container mt-5">

    <div class="card px-5 py-3 shadow">
        <div  class="row justify-content-end">
            <div class="col-auto mr-auto">
              <img id="access" src="<?= base_url('/image/folder.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Rejected Gate Pass</h5>
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
                    <th>Dept</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>03-10-2021</td>
                    <td>
                        <a href="">
                            EHS-C/EHS/0003
                        </a>
                    </td>
                    <td>April</td>
                    <td>EHS</td>
                    <td><span  class="badge badge-danger"> Submission Rejected</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>03-10-2021</td>
                    <td>
                        <a href="">
                            EHS-C/EHS/0002
                        </a>
                    </td>
                    <td>April</td>
                    <td>EHS</td>
                    <td ><span  class="badge badge-danger">Revision Rejected</span></td>
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
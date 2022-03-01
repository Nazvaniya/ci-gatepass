<?= $this->extend('templates/index') ?>

<?= $this->section('datamaster/waste_data_v') ?>
<div class="container mt-2">

    <div class="card px-5 py-3 shadow">
        <div  class="row align-items-center">
            <div class="col-1">
              <img id="access" src="<?= base_url('/image/key.png'); ?>">
            </div>
            <div class="col-7"> 
              <h5 class="display-5">Izin Halaman</h5>
            </div>
            <div class="col-4 text-right">
              <a type="button" href="#" class="btn btn-primary">Tambah Halaman Baru</a>
            </div>
        </div>
    </div>

    <div class="card shadow mt-4 px-5 py-3">
        <div class="table-responsive">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Halaman</th>
                        <th>url</th>
                        <th style="text-align: center;">Admin</th>
                        <th style="text-align: center;">Manager</th>
                        <th style="text-align: center;">Authorizer</th>
                        <th style="text-align: center;">User</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Home</td>
                        <td>home</td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="authorizerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="userCheckBox">
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Create EHS Gate Pass</td>
                        <td>EHS/create</td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="authorizerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="userCheckBox">
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Create Logistic Gate Pass</td>
                        <td>Log/create</td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="authorizerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="userCheckBox">
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Create BMO Gate Pass</td>
                        <td>BMO/create</td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="authorizerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="userCheckBox">
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Create FGA Gate Pass</td>
                        <td>FGA/create</td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="managerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="authorizerCheckBox">
                        </td>
                        <td align="center">
                            <input type="checkbox" id="userCheckBox">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

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
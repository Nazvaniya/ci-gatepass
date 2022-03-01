<?= $this->extend('templates_security/index') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
<div class="card px-5 py-3 shadow">
        <div  class="row">
            <div class="col-sm-1 ">
              <img id="access" src="<?= base_url('/image/qr.png'); ?>">
            </div>
            <div class="col-sm-11 p-2"> 
              <h5 class="display-5">Dashboard Scanner</h5>
            </div>
        </div>
    </div>
    

<div class="card mt-5 p-3">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
            <div class="alert alert-danger" role="alert">
                 Arahkan Kode QR ke Scanner!
            </div>
                <div class="card-body shadow ">
                    <img src="<?= base_url('/image/scan.png');?>">
                </div>
            </div>
            <div class="col" style="font-size: xx-large;">
                <span>Silahkan Scan Kode QR Gate Pass</span>
            <div Class="row p-3">        
                <input type="text" class="form-control" placeholder="Kode Gate Pass">
                <button type="button" class="btn btn-primary mt-2">ENTER</button>
            </div>
            </div>
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
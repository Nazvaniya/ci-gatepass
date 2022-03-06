<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/font-awesome/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/style.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/css/dataTables.bootstrap4.min.css"); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="<?= base_url("/assets/js/jquery.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/jquery.dataTables.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/dataTables.bootstrap4.min.js"); ?>"> </script>
</head>

<body class="d-flex flex-column min-vh-100" style=" background-repeat: no-repeat; background-attachment: fixed;
  background-size: cover; background-image:url(<?php echo base_url('\image/security.jpg'); ?>)">

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
        <div class="col-sm-2 px-0 text-center d-none d-lg-block" id="logo">
            <a class="navbar-brand pl-3" href="#">
                <img src="<?php echo base_url('\image/logo.png'); ?>" width="150" height="25" alt="" />
            </a>
        </div>
        <div class="col-auto mr-auto">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row-12 justify-content-center">
            <div class="card card-custom">	
             <div class="card-body shadow rounded-5">
                    <div class="row justify-content-around">
                        <div class="col-6">
                        <div class="col-sm-4 px-5 align-self-center" >
                            <img src="<?php echo base_url('\image/gatepass.png'); ?>" style="width: 500px; max-height:100%" />
                        </div>
                        </div>
                        <div class="col-sm-6 py-5 px-5">
                            <div class="text-center">
                                <h4>MASUK</h4>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="inputUserID">ID Pengguna</label>
                                    <input type="text" class="form-control" id="userID">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col mt-auto">
                                        <a type="submit" class="btn btn-secondary btn-lg btn-block" onclick="getInputValue();">Masuk</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="text-center text-lg-start navbar-custom mt-auto">
        <!-- Copyright -->
        <div class="text-center p-3" style="color:white">
            © 2021 Copyright:
            <a class="text-light" href="https://panasonic.com/">SFPO</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>

<script>
    function getInputValue() {
        // Selecting the input element and get its value 
        var inputVal = document.getElementById("userID").value;


        if (inputVal == 900433) {
            window.location.replace('<?php echo base_url('/logistic/authorizer/index'); ?>');
        } else if (inputVal == 900744) {
            window.location.replace('<?php echo base_url('/bmo/authorizer/index'); ?>');
        } else if (inputVal == 900644) {
            window.location.replace('<?php echo base_url('/bmo/dashboard/index'); ?>');
        } else {
            window.location.replace('<?php echo base_url('/logistic/index'); ?>');
        }

    }
</script>
<script>
    $(document).ready(function() {
        var down = false;

        $('#bell').click(function(e) {

            var color = $(this).text();
            if (down) {

                $('#box').css('height', '0px');
                $('#box').css('opacity', '0');
                down = false;
            } else {

                $('#box').css('height', 'auto');
                $('#box').css('opacity', '1');
                down = true;

            }

        });

    });
</script>
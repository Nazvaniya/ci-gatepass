<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/font-awesome/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("/assets/auth.css"); ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url("/assets/style.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/css/dataTables.bootstrap4.min.css"); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="<?= base_url("/assets/js/jquery.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/jquery.dataTables.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/dataTables.bootstrap4.min.js"); ?>"> </script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form Using HTML And CSS Only</title>
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
	<div class="container" id="container">
    <div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
     			 <!-- <img src="<?php echo base_url('\image/.png'); ?>" style="width: 1000px; max-height:100%" /> -->
				  <h1 style="color:#fff">HTML CSS Login Form</h1>
				  <p>This login form is created using pure HTML and CSS. For social icons, FontAwesome is used.</p>

				</div>
			</div>
		</div>
		<div class="form-container log-in-container">
			<form action="#">
				<h1 style="margin: 50px 0;">MASUK</h1>
				<input type="text" placeholder="ID Pengguna" />
				<input type="password" placeholder="Password" />
				
				<a type="submit" class="btn btn-secondary btn-lg btn-block" onclick="getInputValue();">Masuk</a>
			</form>
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
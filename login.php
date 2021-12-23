<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dannys</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">

	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/reciclo.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Chatarrero "Dannys"
				</span>
				<form id="formlogin" action="logincode.php" method="POST" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Ingresar usuario">
						<input class="input100" type="text" name="usuario" placeholder="Usuario" autocomplete="off" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingresar contraseña">
						<input class="input100" type="password" name="contrasena" placeholder="Contraseña" autocomplete="off" required>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
					<button type="submit" name="login_btn" class="login100-form-btn">
							Entrar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>

	

	<script src="js/sweetalert2.all.min.js"></script>



	<?php
	include('includes/scripts.php'); 
	?>
</body>
</html>
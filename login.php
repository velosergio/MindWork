<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registro MindWork</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/fontawesome-all.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	</head>
	<body>
		<div class="quiz-top-area text-center">
			<h1>MindWork</h1>
		</div>
		<div class="quiz-title text-center" style="margin-top: 40px;">
			<h2>Registro</h2>
		</div>

		<div class="container">
			<form role="form" name="login" action="php/login.php" method="post">
			<div class="form-group">
				<label for="username">Nombre de usuario o email</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
			</div>
			<div class="form-group">
				<label for="password">Contrase&ntilde;a</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
			</div>

			<button type="submit" class="btn btn-default">Acceder</button>
			</form>
		</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>
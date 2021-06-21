<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MindWork App</title>
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
		<h2>Inicia sesión o registrate</h2>
	</div>
		<div class="quiz-option-selector">
			<div class="row">
				<!-- Inicio de Sesion -->
				<div class="col-md-4">
					<div class="actions clearfix" style="background-color: rgba(0, 0, 0, 0);">
						<ul>
							<a href="login.php">
								<li><span title="Inicio de Sesión">Inicio de Sesión</span>
								</li>
							</a>
						</ul>
					</div>
				</div>
				<!-- Registrate -->
				<div class="col-md-4">
					<div class="actions clearfix" style="background-color: rgba(0, 0, 0, 0);">
						<ul>
							<a href="registro.php">
								<li><span title="Registrate">Registrate</span></li>
							</a>
						</ul>
					</div>
				</div>
				<!-- Acerca de MindWork-->
				<div class="col-md-4">
					<div class="actions clearfix" style="background-color: rgba(0, 0, 0, 0);">
						<ul>
							<a href="about.php">
								<li><span title="Acerca de Mindwork">Acerca de MindWork</span></li>
							</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/form-step.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- <script src="assets/js/switch.js"></script> -->
	</body>
</html>
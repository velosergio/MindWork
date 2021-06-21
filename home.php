<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
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
		<h2>Bienvenid@</h2>
	</div>
	<div class="quiz-option-selector">
		<div class="row">
			<!-- Evaluar -->
			<div class="col-md-4">
				<div class="actions clearfix" style="background-color: rgba(0, 0, 0, 0);">
					<ul>
						<a href="#">
							<li><span title="Evaluar">Evaluar</span>
							</li>
						</a>
					</ul>
				</div>
			</div>
			<!-- Repaso -->
			<div class="col-md-4">
				<div class="actions clearfix" style="background-color: rgba(0, 0, 0, 0);">
					<ul>
						<a href="#">
							<li><span title="Repaso">Repaso</span></li>
						</a>
					</ul>
				</div>
			</div>
			<!-- Acerca de MindWork-->
			<div class="col-md-4">
				<div class="actions clearfix" style="background-color: rgba(0, 0, 0, 0);">
					<ul>
						<a href="#">
							<li><span title="Mi Perfil">Mi Perfil</span></li>
						</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
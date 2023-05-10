<!DOCTYPE HTML>
<html>
	<head>
		<title>Iniciar Sesion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/noscript.css" />
	</head>
	<body class="contact is-preload">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<?php
			session_start();
			if (!empty($_SESSION['usuario']) and ($_SESSION["usuario"]!="admin"))
			{
				header("location:index2.php");
			}
			else if (!empty($_SESSION['usuario']) and ($_SESSION["usuario"]=="admin"))
			{
				header("location:lista_usuario.php");
			}
			?>

	<div id="page-wrapper">
			
			<header id="header" class="alt">
				<h1 id="logo"><a href="index2.php">MATI GAME <span> by 3L</span></a></h1>
				
			</header>
			<!-- Main -->
			<article id="main">

				<header class="special container">
					<h2>Iniciar sesion</h2>
				</header>
				<section class="wrapper style4 special container medium">
					<!-- Content -->
					<div class="content">
						<form action="validarsesion.php" method="POST" name="my form" class="form-login" onsubmit="return validateform()">
							<div class="row gtr-50">
								<div class="col-6 col-12-mobile">
									<input type="text" name="usuario" placeholder="Usuario" />
								</div>
								<div class="col-6 col-12-mobile">
									<input type="password" name="contra" placeholder="Contraseña" />
								</div>
									<ul>
										<li><input type="submit" class="special" value="Iniciar Sesion" /></li>
										<li><i>No tienes cuenta?</i><a href="registro.php">Crear Cuenta</a></li>
									</ul>
							</div>
						</form>
					</div>
				</section>
			</article>
		</div>

		<script src="assets/js/login.js"></script>
	</body>
</html>
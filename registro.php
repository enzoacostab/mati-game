
<!DOCTYPE HTML>
<html>
	<head>
		<title>Registro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</head>
	<body class="contact is-preload">
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
				<h1 id="logo"><a href="index2.php">MATI GAME<span> by 3L</span></a></h1>	
			</header>
			<article id="main">
				<header class="special container">
					<h2>Registrarse</h2>
				</header>
				<section class="wrapper style4 special container medium">
					<div class="content">
						<form action="agregar_datos.php" method="POST" name="reg" onsubmit="return validatereg()">
							<div class="row gtr-50">
								<div class="col-6 col-12-mobile">
									<input type="text" name="usuario" placeholder="Usuario" />
								</div>
								<div class="col-6 col-12-mobile">
									<input type="email" name="email" placeholder="Email" />
								</div>
								<div class="col-6 col-12-mobile">
									<input type="password" name="contra" placeholder="Contraseña" />
								</div>
								<div class="col-6 col-12-mobile">
									<input type="password" name="conf_contra" placeholder="Confirmar Contraseña" />
								</div>
									<ul>
										<li><input type="submit" class="special" value="Registrarse" /></li>
										<li><i>ya tienes cuenta?</i><a href="login.php">Iniciar Sesion</a></li>
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
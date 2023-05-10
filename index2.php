<!DOCTYPE HTML>
<html>
	<head>
		<title>Mati Corp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="images/pic1 - copia.jpg">
	</head>
	<body id="body">
	<div class="mdp">
		<div class="header">
			<h4 style="font-weight: bolder;">FINALIZAR COMPRA</h4>
			<a style="border-bottom:none ;" href=""><img style="height:30px;width:30px;" src="images/cruzar.png" alt=""></a>
		</div>
		
		<div class="at">
			<div>
			<h4 style="padding-left:40px;">seleccionar metodo de pago</h4>
			</div>

			<form class="atf" name="atf" id="atf" action="comp.php" method="POST" onsubmit="return validatefor()">
			<div id="bordert">
			<div id="tarjeta"><label onclick="mp()"><input type="radio"  value="tarjeta" name="mp">TARJETA</label></div>
			<div id="tarjeta1">
			<h4 style="width: 100%;padding-left:50px">datos de la tarjeta</h4>
			<div id="formt">
				<input style="width:100%;" type="text" name="nt" id="nt" placeholder="Numero de tarjeta">
				<div style="width:100%;display:flex;gap:5%;">
				<input style="width:100%;" type="text" name="ca" id="ca" placeholder="Caducidad">
				<input style="width:100%" type="text" name="cvv" id="cvv" placeholder="CVV">
				</div>
			</div>
			</div>
			</div>
			<div id="borderp">
			<div id="paypal" ><label onclick="pp()"><input type="radio" value="paypal" name="mp">PAYPAL</label></div>
			<div id="paypal1">
			<h4 style="width: 100%;padding-left:50px">datos de la cuenta</h4>
			<div id="formt" >
				<input style="width:100%;" type="email" name="email" id="e" placeholder="Email">
				<input style="width:100%;" type="password" name="pass" id="p" placeholder="Contraseña">
				
			</div>
			</div>
			</div>
			<script type="text/javascript">
			let pay=document.getElementById("paypal");
			let pay1=document.getElementById("paypal1");  
			let tar1=document.getElementById("tarjeta1"); 
			let tar=document.getElementById("tarjeta"); 
			let bort=document.getElementById("bordert"); 
			let borp=document.getElementById("borderp"); 

    		function mp(){
				
				tar1.style.display="flex";
				
				tar.style.borderBottomLeftRadius="0"
				tar.style.borderBottomRightRadius="0"
				pay.style.borderBottomLeftRadius=""
				pay.style.borderBottomRightRadius=""
				pay1.style.display="";
				bort.style.border="solid blue 1px";
				borp.style.border="";
			};
			function pp(){
				pay1.style.display="flex";
				pay.style.borderBottomLeftRadius="0"
				pay.style.borderBottomRightRadius="0"
				tar.style.borderBottomLeftRadius=""
				tar.style.borderBottomRightRadius=""
				tar1.style.display="";
				borp.style.border="solid blue 1px";
				bort.style.border="";
     		};
			</script>
		</div>
		<div class="conf">
			<input type="hidden" name="t" value="juego">
			<input type="hidden" name="cant" value="1" >
			<input type="hidden" name="pre" value="10">
			<input style="height:60px;" type="submit" id="conf" value="pagar">
			<h4 style="margin-top:15px;font-weight:normal">total: $10</h4>
			</div>
			</form>
			
		</div>
		
		<header class="na">
			<div>
			<a class="bo" style="border-bottom:0px solid;">
			<span class="hamburgesa">&equiv;</span>
			</a>
			</div>
			<nav class="navm">
			<?php
				session_start();
				if (!empty($_SESSION['usuario']))
				{?>
				<ul class="n">
				<a class="menu">
				<li style="display:flex;align-items:center;gap:2px;justify-content:center;padding:0;margin:0;"><img style="height:20px;width:20px;" src="images/user.png" alt=""><?php echo $_SESSION['usuario'];?></li>
				</a>
				<a style="width:90%; min-width:150px;" href="cerrar.php"><li>Cerrar Sesion</li></a>
				</ul>
				<?php
				}
				else{
				?>
				<ul>
				<a href="" class="menu" data-id="#hero"><li>Inicio</li></a>
				<a href="login.php" class="menu"><li>Iniciar Sesion</li></a>
				<a href="registro.php" class="menu"><li>Registrarse</li></a>
				</ul>
				<?php
				}
				?>
			</nav>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		</header>
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index2.php">mati game <span>by 3L</span></a></h1>
					<nav id="nav">
						<ul>
							<?php
							if (!empty($_SESSION['usuario']) and $_SESSION['usuario']!="admin")
							{?>
							<li><p><?php echo $_SESSION['usuario'];?></p></li>
							<li><a href="cerrar.php" class="button primary">cerrar sesion</a></li>
							<?php
							}
							else if (!empty($_SESSION['usuario']) and $_SESSION['usuario']=="admin")
							{
								?>
								<script>
									window.location.href="lista_usuario.php"
								</script>
								<?php
							}
							else{	
							?>
							<li class="current"><a href="login.php">Iniciar Sesion</a></li>

							<li><a class="button primary" href="registro.php">Registrarse</a></li>
							<?php
							}
							?>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
				

					<div class="inner">
					
						<header>
							<h2>el juego de mati</h2>
						</header>
						<p>esto es <strong>el juego de mati</strong>, un juego de preguntas
						<br />
						donde podras descifrar codigos, responder preguntas y conocer a mati.
						<br />
						<footer>
							<ul class="buttons stacked">
								<?php
								include('conexion.php');
								$q="SELECT * FROM carrito WHERE tipo='juego'";
								$r=mysqli_query($conexion,$q);
								while($f=mysqli_fetch_array($r))
								{
									if (!empty($_SESSION["idusuario"]) and $f["idusuario"]==$_SESSION["idusuario"] )
									{
										$id=$f["idusuario"];
									}
								}
								if (!empty($id))
								{
								?>
								<li><a href="juego/index.php" class="button fit scrolly">jugar</a></li>
								<?php
								}
								else if (empty($_SESSION["idusuario"]))
								{
									?>
									<li><a class="button fit d">comprar</a></li>
									<?php
								}
								else{
									?>
									<li><a class="button fit c">comprar</a></li>
									<?php
								}
								
								mysqli_close($conexion);
								?>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						
						<h2>un poco de mati</h2>
						<p><strong>mati games (MG)</strong> es una saga de videojuegos en desarrollo de preguntas publicada por 3L 
						<br />
						y actualmente desarrollada por mati corp.
						<br />

					</header>

					<!-- cuadro central -->
						

					<!-- galeria de videos -->
						<section class="wrapper style3 container special">

								<header>
									<h2>sobre nosotros</h2>
								</header>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
									<img src="images/pic2.jpg" width="100%" height="315" ></img>
										<header>
											<h3>Un poco sobre Mati y 3L</h3>
										</header>
										<p>Nosotros buscamos crear juegos con nuestro protagonista Mati, un estafador de jubilados que disfrutamos meterlo en situaciones dificiles, pero el nunca aprende. Por otro lado enseñamos a los usuarios un poco sobre "Alan Turing" y cifrado cesar en esta primer entrega del juego</p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<img src="images/pic1.jpg" width="100%" height="315" ></img>
										<header>
											<h3>Sobre 3L</h3>
										</header>
										<p>3l es una empresa creada a modo de proyecto en la materia emprendimientos productivos de la escuela de educacion secundaria tecnica nro 3</p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<img src="images/pic3.jpg" width="100%" height="315" ></img>
										<header>
											<h3>Un poco sobre Mati Corp</h3>
										</header>
										<p>Mati corp es una empresa ficticia del protagonista "Mati" esta empresa desarrolla juegos como la vida de mati y se financia con la plata de los jubilados que estafa</p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<img src="images/pic4.jpg" width="100%" height="315"></img>
										<header>
											<h3>La vida de Mati</h3>
										</header>
										<p>La vida de mati se basa en la vida en un estafador de jubilados ficticio que al intentar asaltar un jubilado por la desesperacion, cae en su sotano donde vivira una experiencia muy bizarra</p>
									</section>

								</div>
							</div>

						</section>

				</article>

			<!-- CTA -->
				<section id="cta">
				</section>
			
			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>hecho por Woiciejoski Nicolas y Acosta Enzo</li>
					</ul>

				</footer>

		</div>
			<script src="assets/js/js.js"></script>
			<script src="assets/js/login.js"></script>
			<script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
	</body>
</html>
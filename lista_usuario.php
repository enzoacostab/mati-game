
<!DOCTYPE HTML>

<html>
	<head>
		<title>Lista de Usuarios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/noscript.css" />
	</head>
	<body class="contact is-preload">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<div id="page-wrapper">
        <?php
			session_start();
			if (empty($_SESSION['usuario']))
			{
                header("location:login.php");
            }
            else if($_SESSION["usuario"]!="admin")
            {
                header("location:index2.php");
            }
			?>
			<header id="header" class="alt">
				<h1 id="logo"><a>MATI GAME <span>by 3L</span></a></h1>
                <?php
				if (!empty($_SESSION['usuario']))
				{?>
				<ul class="n">
				<li class="usuario"><?php echo $_SESSION['usuario'];?></li>
				<li><a class="button primary" href="cerrar.php">Cerrar Sesion</a></li>
				</ul>
                <?php
                }
                ?>
			</header>
			<article id="main">
				<header class="special container">
					<h2>Lista de usuarios</h2>
				</header>
				<section class="wrapper style4 special container medium">
					<div class="contentli">
                        <?php
                        include("conexion.php");
                        $query="SELECT * FROM usuario";
                        $datos=mysqli_query($conexion,$query);?>
                        <table id="users"><tr><td>id</td><td>usuario</td><td>email</td><td>password</td><td class="u"></td></tr>
                        <?php
                        while($fila=mysqli_fetch_array($datos))
                        {
                            $id=$fila['id'];
                            echo "<tr><td>";
                            echo $fila['id']."</td><td>";
                            echo $fila['nombre_usuario']."</td><td>";
                            echo $fila['email']."</td><td>";
                            echo $fila['pass']."</td>";
                            ?>
                            <style>
                                form{
                                    margin:0;
                                }
                                table{
                                    background-color:grey;
                                    color:white
                                }
                            </style>
                            <?php 
                            if ($fila["nombre_usuario"]!="admin")
                            {
                            ?>
                            <td>
                            <form action="eliminar.php" class="td" method="POST">
                                <input type="hidden" name="idusuario" value="<?php echo $fila['id'];?>">
                                <input class="mod" type="submit" value="eliminar">
                            </form>
                            <?php
                            if (isset($_POST["mod"]) and ($_POST["idusuario"]==$id))
                            {
                            ?>
                            <form action="lista_usuario.php">
                                <input class="mod" value="cancelar" type="submit">
                                </form>

                            
                            <?php
                            }
                            else{
                                ?>
                                <form action="" class="td" method="POST">
                                <input type="hidden" name="idusuario" value="<?php echo $id?>">
                                <input class="mod" type="submit" value="modificar" name="mod">
                            </form>
                                <?php
                            }
                            ?>
                            </td></tr>
                        <?php
                            }
                            else{
                                ?>
                                <td></td>
                                <?php
                            }
                            if (isset($_POST["mod"]) and $_POST["idusuario"]==$id)
                            {
                                ?>
                            <tr class="tr1">
                                <form action="mod.php" method="POST">
                                <td></td>
                                <td class="ag"><input type="text" name="usuario"></td>
                                <td class="ag"><input type="text" name="email"></td>
                                <td class="ag"><input type="text" name="contra"></td>
                                <input type="hidden" name="idusuario" value="<?php echo "$id";?>">
                                <td><input class="mod" type="submit" value="confirmar"></td>
                                
                                </form>
                            </tr>
                            <?php
                            }
                        }
                            ?>
                            <tr class="tr1" >
                                <form action="agregar_datos.php" name="reg1"  method="POST">
                                <td></td>
                                <td class="ag"><input type="text" name="usuario"></td>
                                <td class="ag"><input type="email" name="email"></td>
                                <td class="ag"><input type="text" name="contra"></td>

                                <td><input style="margin-left:5px;" class="mod" type="submit" name="agr" value="agregar"></td>
                                
                                </form>
                            </tr>
                          <?php  
                        
                        mysqli_close($conexion);
                        ?>

                        </table>
					</div>
				</section>
			</article>
		</div>
		<script src="assets/js/js.js"></script>
        <script src="assets/js/login.js"></script>
	</body>
</html>
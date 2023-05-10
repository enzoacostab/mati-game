<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" sizes="16x16"  href="img/favicons/favicon-16x16.png">
    <title>START</title>
</head>
<body class="index">
    <?php
    include("../conexion.php");
    session_start();
    $q="SELECT * FROM carrito WHERE tipo='juego'";
        $r=mysqli_query($conexion,$q);
        while($f=mysqli_fetch_array($r))
        {
            if (!empty($_SESSION["idusuario"]) and $f["idusuario"]==$_SESSION["idusuario"] )
            {
                $id=$f["idusuario"];
            }
        }
        if (empty($id) || empty($_SESSION["idusuario"]))
        {
        ?>
        <script>
            window.location.href="../index2.php";
        </script>
        <?php
        }
        mysqli_close($conexion);
    ?>
    <div style="width:100%; display:flex; height:fit-content; justify-content:right ">
    <a href="../index2.php"><img style="width:20px; height:20px; margin-right:20px" src="img/cerrar.png"></a>
    </div>
    <div class="div1">
        <h1>The best<br>Escape room</h1>
    </div>
    <div class="div2">
        <a class="boton1" href="acertijos/p1.php">EMPEZAR</a>
        <a class="boton1" href="acertijos/info.html">INFORMACION</a>
    </div>
    <div class="div3">

    </div>
</body>

</html>
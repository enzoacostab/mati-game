<?php
include("../conexion.php");
$pistas=$_POST["val"];
$id=$_POST["id"];
$pag=$_POST["pag"];
$query="UPDATE usuario SET pistas=$pistas-1 WHERE id=$id";
$res=mysqli_query($conexion,$query);
header("location:$pag#pista");
mysqli_close($conexion);
?>
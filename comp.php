
<?php
include("conexion.php");
session_start();
$mp=$_POST["mp"];
$t=$_POST["t"];
$can=$_POST["cant"];
$pre=$_POST["pre"];
$pag=$_POST["pag"];
$query="INSERT INTO carrito(idusuario, usuario, metodo_pago, tipo, cantidad, valor) VALUES ($_SESSION[idusuario],'$_SESSION[usuario]','$mp','$t',$can,$pre*$can)";
var_dump($query);
$result=mysqli_query($conexion,$query);
if ($t=="pista")
{
    $que="UPDATE usuario SET pistas=$can WHERE id=$_SESSION[idusuario]";
    $res=mysqli_query($conexion,$que);
    header("location:juego/acertijos/p$pag.php");
}
else{
header("location:index2.php");
}

mysqli_close($conexion);	

?>
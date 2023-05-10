<?php
include("conexion.php");
$query="DELETE FROM usuario where id='$_POST[idusuario]'";
$res=mysqli_query($conexion,$query);
if(!$query)
{
    echo"error al eliminar un usuario";
}
else{
    header("location:lista_usuario.php");
}
mysqli_close($conexion);
?>

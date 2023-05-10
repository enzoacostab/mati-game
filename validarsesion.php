<?php
include('conexion.php');
$usuario=mysqli_real_escape_string($conexion,$_POST["usuario"]);
$contra=mysqli_real_escape_string($conexion,$_POST["contra"]);
$query="SELECT * FROM usuario where nombre_usuario='$usuario' and pass='$contra'";
$res=mysqli_query($conexion,$query);
$filas=mysqli_num_rows($res);
if ($filas)
{
    $fila=mysqli_fetch_assoc($res);
    session_start();
    
    $_SESSION['idusuario']=$fila['id'];
    $_SESSION['usuario']=$fila['nombre_usuario'];
    $_SESSION['email']=$fila['email'];
    $_SESSION['juego']=$fila['juego'];
    header("location:index2.php");
    if ($usuario=="admin" and $contra=="admin")
    {
        header("location:lista_usuario.php");
    }

}
else 
{
    include('login.php'); 
    ?><script>alert("usuario o contraseña incorrectos")</script><?php
}
mysqli_close($conexion);
?>

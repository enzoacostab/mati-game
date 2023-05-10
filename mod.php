<?php
include('conexion.php');
$usuario=$_POST["usuario"];
$contra=$_POST['contra'];
$email=$_POST['email'];
$id=$_POST['idusuario'];
if ($usuario!="" and $contra!="" and $email!="")
{
$query="UPDATE usuario SET nombre_usuario='$usuario', pass='$contra', email='$email' where id=$id";
$res=mysqli_query($conexion,$query);
if ($query)
{
    header("location:lista_usuario.php");
}
}
else{
    ?>
    <script>
        alert("hubo un error");
        window.location.href="lista_usuario.php"
    </script>
    <?php
    
}

mysqli_close($conexion);
?>



<?php
include('conexion.php');

if (!$conexion)
{
    echo "error de conexion<br>";
}
$username=mysqli_real_escape_string($conexion,$_POST["usuario"]);
$password=mysqli_real_escape_string($conexion,$_POST["contra"]);


$usuario=validacion($_POST['usuario']);
$contra=validacion($_POST['contra']);
if (!isset($_POST["agr"]))
{
$contraconf=validacion($_POST["conf_contra"]);
}
$email=validacion($_POST['email']);

function validacion($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  include("conexion.php");
  $x=true;
  $query="SELECT * FROM usuario";
  $datos=mysqli_query($conexion,$query);
  while($fila=mysqli_fetch_array($datos))
  {
      $us=$fila['nombre_usuario'];
      $em=$fila['email'];
      if ($us==$usuario){
        $x=false;
        ?>
        <script>
            alert("el usuario ya esta en uso");
            window.location.href="registro.php";
        </script>
        <?php
      }
      elseif ($em==$email){
        $x=false;
        ?>
        <script>
            alert("el email ya esta en uso");
            window.location.href="registro.php";
        </script>
        <?php
      }
  }
  if ($x==true and $usuario!="" and $email!="" and $contra!="" )
  {
    $sql_insert="INSERT INTO usuario(nombre_usuario,pass,email) VALUES ('$usuario','$contra','$email')";
    var_dump($sql_insert);
    $result=mysqli_query($conexion,$sql_insert);
    header("location:index2.php");
}
else{
  if (isset($_POST["agr"]))
  {
  ?>
  <script>
    alert("complete todos los campos");
    window.location.href="lista_usuario.php"
  </script>
  <?php
  }
}
mysqli_close($conexion);
?>
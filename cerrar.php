<?php
session_start();
unset($_SESSION['idusuario']);
session_destroy();
header('location:index2.php');
?>
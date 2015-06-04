<?php

session_start();
$conexion = new PDO('sqlite:favoritos.db');
$usuario = $_SESSION['usuario'];
$contraseña = $_SESSION['contraseña'];

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$usuarioantiguo = $_SESSION['usuario'];

$consulta = "UPDATE usuarios SET usuario='".$usuario."', contraseña='".$contraseña."', nombre='".$nombre."', apellido='".$apellido."', edad='".$edad."' WHERE usuario='".$usuarioantiguo."'";

$resultado = $conexion->query($consulta);

 $conexion = NULL;

echo' 
<html>
<head>
<meta http-equiv="REFRESH" content="0; url=gestionusuarios.php">
</head>
</html>
';
?>
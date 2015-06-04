<?php
session_start();

$contador =0;

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];


$conexion = new PDO('sqlite:favoritos.db');
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion -> query($consulta);

foreach ( $resultado  as $fila)
{
if($fila['usuario'] == $usuario)
{
$contador++;
}else{}
}
$conexion = NULL;

if($contador == 0)
{
$conexion = new PDO('sqlite:favoritos.db');
$consulta =

"INSERT INTO usuarios VALUES 
('$usuario','$contraseña','$nombre','$apellido','$edad',3)
";
$resultado = $conexion -> exec($consulta);
$conexion = NULL;

echo'
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=gestionusuarios.php">
</head>
</html>
';
}else
{
	echo "El usuario ya existe.....Elige Otro";
}
?>
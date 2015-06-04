<?php

session_start();

$usuario = $_SESSION['usuario'];
$contraseña = $_SESSION['contraseña'];


$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

$conexion = new PDO('sqlite:favoritos.db');

$consulta =

"INSERT INTO favoritos VALUES 
('$usuario','$contraseña','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')
";

$resultado = $conexion -> exec($consulta);
$conexion = NULL;

echo' 
<html>
<head>
<meta http-equiv="REFRESH" content="0; url=principal.php">
</head>
</html>
';

?>
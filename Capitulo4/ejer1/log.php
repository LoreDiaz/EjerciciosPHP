<?php

session_start();

$utc = date('U');
$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

$usuariolog = $_SESSION['usuario'];
$contraseñalog = $_SESSION['contraseña'];

@$ip= getenv(REMOTE_ADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"];

$conexion = new PDO('sqlite:favoritos.db');

$consulta =

"INSERT INTO logs VALUES 
('$utc','$anio','$mes','$dia','$hora','$minuto','$segundo,'$ip,'$navegador,'$usuariolog,'$contraseñalog')
";

$resultado = $conexion -> exec($consulta);
$conexion = NULL;

?>
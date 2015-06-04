<?php

$conexion= mysql_connect("localhost","video2brain","video2brain");

if (!$conexion)
{
die ('No he podido conectar porque: '.mysql_error());
}

mysql_select_db("agenda",$conexion);
$peticion = mysql_query("SELECT * FROM miagenda");

while ($fila = mysql_fetch_array($peticion))
{
	echo $fila['Nombre']."".$fila['Apellido']."".$fila['Edad']."".['Telefono'];
	echo "<br>";
}

mysql_close($conexion);
?>
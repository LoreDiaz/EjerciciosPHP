<?php

$conexion= mysql_connect("localhost","video2brain","video2brain");

if (!$conexion)
{
die ('No he podido conectar: '.mysql_error());
}

if(mysql_query("CREATE DATABASE agenda",$conexion))
{
	echo "Se ha creado la dase de datos";
}
else
{
	echo "No se ha podido crear la base de datos por el siguiente error".mysql_error();
}

mysql_select_db("agenda",$conexion);
$sql = "CREATE TABLE miagenda
(
personaID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY (personaID),	
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int
)";

mysql_query($sql,$conexion);


mysql_close($conexion);

?>
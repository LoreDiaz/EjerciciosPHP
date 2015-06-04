<?php

$conexion= mysql_connect("localhost","video2brain","video2brain");

if (!$conexion)
{
die ('No he podido conectar por la siguiente razon: '.mysql_error());
}

mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda (Nombre,Apellido,Edad,Telefono) VALUES ('Valentina','Ramirez',15,'3202487245')");

mysql_query("INSERT INTO miagenda (Nombre,Apellido,Edad,Telefono) VALUES ('Laura','Diaz',12,'3219275684')");

mysql_close($conexion);

?>
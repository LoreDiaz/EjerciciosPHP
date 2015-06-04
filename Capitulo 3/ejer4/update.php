<?php

$conexion = new PDO('sqlite:basededatos.db');

$consulta = "UPDATE  Discos SET Anio=1777 WHERE Anio= 1994";

$resultado = $conexion-> exec($consulta);
$conexion=NULL;

?>
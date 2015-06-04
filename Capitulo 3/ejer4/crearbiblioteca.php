<?php

$conexion = new PDO('sqlite:basededatos.db');

$consulta = '


CREATE TABLE Discos
(
Artista Char (20) Not Null,
NombreDisco Char (40),
Anio Integer
);';



$resultado = $conexion -> exec($consulta);
?>
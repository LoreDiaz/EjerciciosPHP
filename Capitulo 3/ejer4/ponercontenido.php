<?php
$conexion = new PDO('sqlite:basededatos.db');

$consulta =

"INSERT INTO Discos('Artista','NombreDisco','Anio') VALUES ('Santos','Bachata',1976);
INSERT INTO Discos('Artista','NombreDisco','Anio') VALUES ('Pipe','Popular',1487);
";

$resultado = $conexion -> exec($consulta);
$conexion = NULL;
?>
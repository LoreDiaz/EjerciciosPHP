<?php

$conexion = new PDO('sqlite:basededatos.db');

$consulta = "DELETE  FROM Discos WHERE Artista='Pipe'";

$resultado = $conexion-> exec($consulta);


?>
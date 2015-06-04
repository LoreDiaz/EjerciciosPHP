<?php

echo "<table
border=1<tr><td>Artista</td><td>NombreDisco</td><td>Anio</td></tr>";
$conexion = new PDO('sqlite:basededatos.db');

 $consulta = "SELECT * FROM Discos WHERE Artista= 'Ricardo';";

 $resultado = $conexion->query($consulta);

foreach ($resultado as $fila)
 {
 	echo "<tr><td>".$fila['Artista']."</td><td>".$fila['NombreDisco']."</td><td>".$fila['Anio']."</td></tr>";
 }

echo "</table>";
 
?>
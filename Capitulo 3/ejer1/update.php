<?php

$conexion= mysql_connect("localhost","video2brain","video2brain");


mysql_select_db("agenda",$conexion);

mysql_query("UPDATE miagenda SET Edad = '18' WHERE Nombre ='Valentina' AND Apellido = 'Ramirez'");

mysql_close($conexion);


?>
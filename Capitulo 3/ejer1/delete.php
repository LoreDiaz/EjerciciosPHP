<?php

$conexion= mysql_connect("localhost","video2brain","video2brain");


mysql_select_db("agenda",$conexion);

mysql_query("DELETE FROM miagenda WHERE Nombre ='Valentina' AND Apellido = 'Ramirez'");

mysql_close($conexion);


?>
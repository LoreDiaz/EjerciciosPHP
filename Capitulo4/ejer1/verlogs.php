<?php

session_start();

$codigo = $_SESSION['permisos'];

if($codigo == 1){
echo "Tu usuario es :..".$_SESSION['usuario']."<br/> Tu contrasena es:..".$_SESSION['contraseña'];

$conexion = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM logs ;";

$resultado = $conexion->query($consulta);

echo "
<table border=1 width=40%>
<tr>
<td>Marca de Tempo</td>
<td>Ano</td>
<td>Mes</td>
<td>Dia</td>
<td>Hora</td>
<td>Minuto</td>
<td>Segundo</td>
<td>ip</td>
<td>Navegador</td>
<td>usuario</td>
<td>contrasena</td>
</tr>
";
foreach ($resultado as $fila )
 {
 	echo  "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['ip']."</td><td>".$fila['navegador']."</td><td>".$fila['usuario']."</td><td>".$fila['contraseña']."</td></tr>";
 }

 echo "</table>";

$conexion = NULL;
}else
{
	echo "Tu no eres Administrador";
}

?>
<html>
<body>
<table border=1 width=20%>
<tr>
<td>
	<form action="login.php" method="post">
	<input type="text" name="usuario" value="Introduce  tu Usuario" width=60%>
	</td>
	</tr>
	<tr>
	<td>
	<input type="text" name="contraseña" value="Introduce tu Contrasena" width=60%>
	</tr>
	<tr>
	<td>
	<input type="submit">
	</tr>
</form>
</table>
No eres usuario todavia? PULSA <a href="formularioaltausuario.php">AQUI</a>
</body>

</html>

<?php

echo "<br/><br/>Link que te Pueden Interezar :)";
$conexion = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM favoritos  ORDER BY RANDOM () LIMIT 3;";

$resultado = $conexion->query($consulta);
 echo "
<table border=1 width=40%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>valoracion</td>
<td></td>
<td></td>
</tr>
";

foreach ( $resultado as $fila )
 {
 	echo  "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td></tr>";
 }
echo "</table>";

 $conexion = NULL;

?>
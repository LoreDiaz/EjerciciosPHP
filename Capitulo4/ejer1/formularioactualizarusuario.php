<?php

session_start();

$usuario = $_SESSION['usuario'];
$contraseña = $_SESSION['contraseña'];

$usuario = $_GET['usuario'];
$contraseña = $_GET['contraseña'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];

$conexion = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contraseña='".$contraseña."' AND nombre='".$nombre."' AND apellido='".$apellido."' AND edad='".$edad."'";
$resultado = $conexion->query($consulta);

echo'

echo "
<table border=1 width=40%>
<tr>
<td>Usuario</td>
<td>Contraseña</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td></td>
<td></td>
</tr>
';
foreach ($resultado as $fila)
 {
echo"
<tr><form action='actualizarusuario.php' method='post'>
<td><input type='text' name='usuario' value='".$fila['usuario']."'></td>
<td><input type='text' name='contraseña' value='".$fila['contraseña']."'></td>
<td><input type='text' name='nombre' value='".$fila['nombre']."'></td>
<td><input type='text' name='apellido' value='".$fila['apellido']."'></td>
<td><input type='text' name='edad' value='".$fila['edad']."'></td>
<td><input type='submit'></td>
</form>
</tr>
";

 }

echo "</table>";

$_SESSION['usuario']= $usuario;

 $conexion = NULL;

?>
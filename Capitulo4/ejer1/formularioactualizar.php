<?php

session_start();

$usuario = $_SESSION['usuario'];
$contraseña = $_SESSION['contraseña'];

$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

$conexion = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM favoritos WHERE usuario='".$usuario."' AND contraseña='".$contraseña."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";
$resultado = $conexion->query($consulta);

echo'

<table border=1 width=50%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>valoracion</td>
<td></td>
</tr>
';
foreach ($resultado as $fila)
 {
echo"
<tr><form action='actualizarfavorito.php' method='post'>
<td><input type='text' name='titulo' value='".$fila['titulo']."'></td>
<td><input type='text' name='direccion' value='".$fila['direccion']."'></td>
<td>
<select name='categoria'>
<option value='salud'>Salud</option>
    <option value='trabajo'>trabajo</option>
    <option value='hobby'>Hobby</option>
    <option value='personal'>Personal</option>
    <option value='otros'>Otros</option>
    <option value='".$fila['categoria']."' selected>".$fila['categoria']."</option>
</select>
</td>
<td><input type='text' name='comentario' value='".$fila['comentario']."'></td>
<td><input type='text' name='valoracion' value='".$fila['valoracion']."'></td>
<td><input type='submit'></td>
</form>
</tr>
";

 }

echo "</table>";

$_SESSION['titulo']= $titulo;

 $conexion = NULL;

?>
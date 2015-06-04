<?php

session_start();
echo "Tu usuario es :..".$_SESSION['usuario']."<br/> Tu contrasena es:..".$_SESSION['contraseña'];

$conexion = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM favoritos WHERE usuario='".$_SESSION['usuario']."' AND contraseña='".$_SESSION['contraseña']."';";

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
foreach ($resultado as $fila )
 {
 	echo  "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td><td><a href='eliminarfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Eliminar</td><td><a href='formularioactualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Actualizar</a></td></tr>";
 }

 echo "
<tr>

<form action ='crearfavorito.php' method='POST'>
<td><input type='text' name='titulo'></td>
<td><input type='text' name='direccion'></td>
<td><select name='categoria'>
    <option value='salud'>Salud</option>
    <option value='trabajo'>trabajo</option>
    <option value='hobby'>Hobby</option>
    <option value='personal'>Personal</option>
    <option value='otros'>Otros</option>
</td>
<td><input type='text' name='comentario'></td>
<td><input type='text' name='valoracion'></td>
<td><input type='submit'></td><td></td>
</tr>
";

echo "</table>";
$conexion = NULL;

////////////////////////////////////////////
function muestraCategoria($damecategoria){

echo "Link de la Categoria ".$damecategoria." Pueden Interezar :)";
$conexion = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM favoritos WHERE usuario != '".$_SESSION['usuario']."' AND categoria='".$damecategoria."' ORDER BY RANDOM () LIMIT 3;";

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
}
muestraCategoria("salud");
muestraCategoria("trabajo");
muestraCategoria("hobby");
muestraCategoria("personal");
muestraCategoria("otros");

?>
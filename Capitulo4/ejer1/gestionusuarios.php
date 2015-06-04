<?php

session_start();

$codigo = $_SESSION['permisos'];

if($codigo == 1){
echo "Tu usuario es :..".$_SESSION['usuario']."<br/> Tu contrasena es:..".$_SESSION['contraseña'];

$conexion = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM usuarios ;";

$resultado = $conexion->query($consulta);

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
";
foreach ($resultado as $fila )
 {
 	echo  "<tr><td>".$fila['usuario']."</td><td>".$fila['contraseña']."</td><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['edad']."</td><td><a href='eliminarusuario.php?usuario=".$fila['usuario']."&contraseña=".$fila['contraseña']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>Eliminar</td><td><a href='formularioactualizarusuario.php?usuario=".$fila['usuario']."&contraseña=".$fila['contraseña']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>Actualizar</a></td></tr>";
 }

 echo "
<tr>

<form action ='crearusuario.php' method='POST'>
<td><input type='text' name='usuario'></td>
<td><input type='text' name='contraseña'></td>
<td><input type='text' name='nombre'></td>
<td><input type='text' name='apellido'></td>
<td><input type='text' name='edad'></td>
<td><input type='submit'></td><td></td>
</tr>
";

$conexion = NULL;
}else
{
	echo "Tu no eres Administrador";
}

?>
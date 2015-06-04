<?php

session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$conexion = new PDO('sqlite:favoritoS.db');

$consulta = "SELECT * FROM usuarios;";

$resultado = $conexion->query($consulta);


foreach ($resultado as $fila)
 {
 	$usuariobasededatos = $fila['usuario'];
 	$contraseñabasededatos = $fila['contraseña'];
 	$permisosenbase = $fila['permisos'];

 	if ($usuario == $usuariobasededatos & $contraseña == $contraseñabasededatos )
 	 {
 		$_SESSION['usuario'] = $usuario;
 		$_SESSION['contraseña'] = $contraseña;
 		$_SESSION['permisos'] = $permisosenbase;

 		echo '
          <html>
          <head>
          <meta http-equiv="REFRESH"content="0;url=principal.php">
           </head>
           </html>
          ';
 	 }
}

?>
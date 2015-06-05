<?php

session_start();

$codigo = $_SESSION['permisos'];
if($codigo == 1)
{
echo "Pulsa <a href='verlogs.php'>AQUI</a>Para Ver a los Usuarios <br/>";
echo "Pulsa <a href='gestionusuarios.php'>AQUI</a>Para Gestionar a los Usuarios";
}
else
{
echo'
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=index.php">
</head>
</html>
';
}

?>
<?php

$conexion = new PDO('sqlite:favoritos.db') or die ('Ha sido imposible establecer la conexion');

$consulta ='

CREATE TABLE favoritos
(

usuario Char(40) Not Null,
contraseña Char (40) Not Null,
titulo Char (40) Not Null,
direccion Char (100) Not Null,
categoria Char (40),
comentario Char (200),
valoracion Int
)';

$resultado = $conexion -> exec($consulta);
$conexion = NULL;

$conexion = new PDO('sqlite:favoritos.db') or die ('Ha sido imposible establecer la conexion');

$consulta =

"INSERT INTO favoritos  VALUES ('jocarsa','jocarsa','google','htpp://www.google.com','Tecnologia','Este es un buscador muy famoso',10);
INSERT INTO favoritos VALUES ('jocarsa','jocarsa','JOCARSA','htpp://jocarsa.com','Tecnologia','Esta es mi pagina',10);
";
$resultado = $conexion -> exec($consulta);
$conexion = NULL;

$conexion = new PDO('sqlite:favoritos.db') or die ('Ha sido imposible establecer la conexion');

$consulta ='

CREATE TABLE usuarios
(

usuario Char(40) Not Null,
contraseña Char (40) Not Null,
nombre Char (40) Not Null,
apellido Char (100) Not Null,
edad Int,
permisos Int
)';
$resultado = $conexion -> exec($consulta);
$conexion = NULL;

$conexion = new PDO('sqlite:favoritos.db') or die ('Ha sido imposible establecer la conexion');

$consulta =

"INSERT INTO usuarios  VALUES ('LoreDiaz','151212','Lore','Diaz',21,1);
";
$resultado = $conexion -> exec($consulta);
$conexion = NULL;

$conexion = new PDO('sqlite:favoritos.db') or die ('Ha sido imposible establecer la conexion');

$consulta ='

CREATE TABLE logs
(

utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char (50),
navegador Char (100),
usuario Char (40),
contraseña Char (40)
)';
$resultado = $conexion -> exec($consulta);
$conexion = NULL;


$conexion = new PDO('sqlite:favoritos.db') or die ('Ha sido imposible establecer la conexion');

$consulta =

"INSERT INTO logs VALUES ('00','2011','09','07','21','07','34','127.0.0.1','chrome','Fabis','246');
INSERT INTO logs VALUES ('00','2011','09','07','21','07','34','127.0.0.1','chrome','Peter','0000');
";
$resultado = $conexion -> exec($consulta);
$conexion = NULL;

?>
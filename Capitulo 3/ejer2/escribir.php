<?php

$archivo = "text.txt";
$contenido = "Este es otro contenido";

$manejador = fopen($archivo, 'w+');
fwrite($manejador, $contenido);


?>
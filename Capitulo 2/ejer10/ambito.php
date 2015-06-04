<?php

$variable ="Hola";

function hola()
{
	global $variable;
	echo $variable;
}

hola();

?>
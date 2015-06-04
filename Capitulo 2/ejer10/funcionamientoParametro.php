<?php

function miTabla($numero)
{
	for($multiplicador=0;$multiplicador<=5;$multiplicador++)
	{
		echo $numero."x".$multiplicador."=".$numero.$multiplicador."<br>";
	}
}

for($otronumero=0;$otronumero<=0;$otronumero)
{
	echo "Tabla de ".$otronumero.":<br>";
	miTabla($otronumero);
}
?>
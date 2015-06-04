<?php

$agenda[0] ['Nombre'] = "Leo";
$agenda[0] ['Telefono'] =  3202487245;
$agenda[0] ['Email'] = "leo@hotmail.com";

$agenda[1] ['Nombre'] = "Lore";
$agenda[1] ['Telefono'] =  3219275684;
$agenda[1] ['Email'] = "lola-85@hotmail.com";

$agenda[2] ['Nombre'] = "Luis";
$agenda[2] ['Telefono'] =  3217878787;
$agenda[2] ['Email'] = "luis-85@hotmail.com";



for ($indice=0;$indice<=2;$indice++)
{
	echo'
	<table border=1 width=300px>
	<tr>
	<td>
	Nombre:
	</td>
	<td>'.$agenda[$indice] ['Nombre'].'
	</td>
	</tr>
	  </table>
	<table border=1 width=300px>
	<tr>
	<td>
	Telefono:
	</td>
	<td>'.$agenda[$indice] ['Telefono'].'
	</td>
	</tr>
	</table>
	  </table>
	<table border=1 width=300px>
	<tr>
	<td>
	Email:
	</td>
	<td>'.$agenda[$indice] ['Email'].'
	</td>
	</tr>
	</table>
	';
}


?>
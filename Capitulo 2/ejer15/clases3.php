<?php

class saluda
{
	function saludo() 
	{
		echo "Yo te saludo";
	}

	function Adios()
	{
     echo "Yo te digo Adios";
	}
}

class subsaluda extends saluda
{
  var $atributo;
  function holados(){}
}
$instancia = new saluda();

$ins = $instancia->Adios();

?>
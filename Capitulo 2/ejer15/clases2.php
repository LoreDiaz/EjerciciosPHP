<?php
class dimeAlgo
{
	var $stributo;

	function dimeAlgo($algo)
	{
		$this->atributo = $algo;
		echo $this->atributo;
	}
}

$decir = new dimeAlgo ("Hola");

?>
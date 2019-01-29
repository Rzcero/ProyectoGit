<?php

/**
 * 
 */
class Celular
{
	//metodos
	public function  descargar($descarga)
	{
		echo $descarga;
	}

	//atributos
	public $marca="Sony Erickson";

}
$celular=new Celular();
//echo $celular->descargar("El programa ya se descargo");
echo $celular->marca;




?>
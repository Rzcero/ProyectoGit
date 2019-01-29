<?php

class Persona{

//propiedades
//	var $nombre;
//	var $apellido;
//metodos
//Creamos el constructor(al momento que se va a crear el objeto se va a inicializar esta funcion constructor)

	public function __construct($nom1,$ape1){
		$this->nombrecito=$nom1;
		$this->apellidito=$ape1;
	}

public function asignarNombre($nom){

$this->nombrecito=$nom;
}
public function asignarApellido($ape){
$this->apellidito=$ape;
}

public function mostrarNombre(){
return $this->nombrecito;

}
public function mostrarApellido(){
return $this->apellidito;
	
}
}

$persona1=new Persona("Eduardo","Sanandres Chavez");
$persona2=new Persona("Gleny","Cervera Rojas");
$persona3=new Persona("Aaron","Sanandres Cervero");

echo $persona1->mostrarNombre()."<br>";
echo $persona2->mostrarApellido();
/*$persona->asignarNombre("Gleny");
$persona->asignarApellido("Cervera Rojas");
echo $persona->mostrarNombre()."    ".$objeto->mostrarApellido();*/


?>


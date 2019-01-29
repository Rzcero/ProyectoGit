<?php

class myCLase{

public static $uno="esto es un atributo estatico";
const MI_CONSTANTE = 3.1416;

}

$obj=new myCLase();
echo  myCLase:: $uno."<br>";
echo myCLase:: MI_CONSTANTE;
?>
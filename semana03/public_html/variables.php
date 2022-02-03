<?php

$i=10;

$var1="hola mundo";
$var2='hola mundo';

$decimal=10.02;
$f1=11;

static $f4=14;

function f1()
{
	$f1=12;
}

$es_numero=true;

$array1 = [1,2,3];
$array2 = array(4,5,6);

echo print_r($array2,1);

echo "<br>";
$obj = new stdClass();
$obj->codigo="P001";
$obj->nombre="Producto 1"; 


echo print_r($obj,1);

$f1=null;

echo $f1;




<?php 

$array1 = [1,2,3];
$array2 = ["uno","dos","tres"];


$array1 = array(11,2,3);
$array2 = array("uno","dos","tres");


echo "el tamaño del array es =".count($array1);
echo "<br>";

echo "la posicion 0 es igual =".$array1[0];
echo "<br>";




$array3= ["pos1"=>"azul","pos2"=>"verde", "a1"=>"valor11"];

echo "el elmento pos1 es igual =".$array3["pos2"];
echo "<br>";


foreach($array3 as $clave => $valor)
{
	echo "el elemento $clave es igual a $valor";
	echo "<br>";
}


$array4 = [[6,74],[5]];


echo "el elmento 0,1 del array4 es = ".$array4[0][1];
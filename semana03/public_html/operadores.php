<?php

//modulos
$dividendo =  20;
$divisor =  7;


$cociente = (int)($dividendo / $divisor);  //CAST - CASTING
 
$residuo = $dividendo % $divisor; 

echo "dividendo = ".$dividendo;
echo "<br>";

echo "divisor = ".$divisor;
echo "<br>";


echo "cociente = ".$cociente;
echo "<br>";

echo "residuo =".$residuo;
echo "<br>";

$base = 11;
$exponente = 15;

echo $base." elevado a ".$exponente."=".$base**$exponente;
echo "<br>";

//OPERADORES DE ASIGNACION

$var1=10;
$var2=20;

$var3=$var2;

$var1+=$var2;

echo "var1=".$var1;
echo "<br>";

//OPERADORES DE INCREMENTO

$j=10;

echo "j=".$j;
echo "<br>";

$j++;

echo "j=".$j;
echo "<br>";

$j+=2;

echo "j=".$j;
echo "<br>";


echo "sin concatenar j=$j";
echo "<br>";


echo "con concatenar j=".$j;
echo "<br>";











<?php

$i=10;

$f=10.58;

echo "Utilizando la funcion is_int=".is_int($i);
echo "<br>";


echo "Utilizando la funcion is_float=".is_float($f);
echo "<br>";


echo "Utilizando la funcion is_finite=".is_finite($f);
echo "<br>";

echo "Utilizando la funcion is_infinite=".is_infinite(1/0);
echo "<br>";

echo "Utilizando la funcion is_nan=".is_nan(acos(1.01));
echo "<br>";


echo "Constante PHP_INT_MAX=".PHP_INT_MAX;
echo "<br>";

echo "Constante PHP_FLOAT_EPSILON=".PHP_FLOAT_EPSILON;
echo "<br>";


echo "Constante pi=".pi();
echo "<br>";

echo "Constante abs=".abs(-15.5);
echo "<br>";


echo "Constante round=".round(12.25,1,PHP_ROUND_HALF_DOWN);
echo "<br>";


echo "Constante rand=".rand();
echo "<br>";

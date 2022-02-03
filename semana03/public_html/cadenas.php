<?php

$cadena1 = "Hola mundo cruel";

echo "usando la funcion strlen=".strlen($cadena1);
echo "<br>";

echo "usando la funcion str_word_count=".str_word_count($cadena1);
echo "<br>";

echo "usando la funcion strrev=".strrev($cadena1);
echo "<br>";

echo "usando la funcion strpos=".strpos($cadena1,"Hola");
echo "<br>";

echo "usando la funcion str_replace=".str_replace("mundo", "luis", $cadena1);
echo "<br>";

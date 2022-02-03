<?php 

$var1=-2;
$var2=-2;


if(($var1==$var2) && $var1>0)
{
	echo "var1 y var2 son iguales";
}
else if($var1<=0)
{
	echo "la variables var1 es menor a cero";
}
else
{
	echo "las variables son diferentes";
}

$v1=111;
$v2=20;


if($v1>$v2)
{
	$v3=$v1;
}
else
{
	$v3=$v2;
}

echo "<br>";
echo "el mayor valor es =".$v3;


echo "<br>";
echo "el mayor valor es =".($v1>$v2?$v1:$v2);


$v5=12;
echo "<br>";
echo "se asume el valor =".($v5??0);



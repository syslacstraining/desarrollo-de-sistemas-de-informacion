<?php 

//for

for($i=0;$i<10;$i++)
{
	echo "el valor de i=".$i;
	echo "<br>";
}

//foreach colecciones // array

echo "<br><br> FOREACH <br>";
$array1=["jose","luis","juan"];

foreach ($array1 as $item) {

	echo "el valor de item =".$item;
	echo "<br>";
}

//usando el while
echo "<br><br> while <br>";

$j=5;
while($j<5)
{
	echo "el varlo de j es =".$j;
	echo "<br>";
	$j++;	
}


//usando el do while
echo "<br><br> do while <br>";
$j=5;
do
{

	echo "el varlo de j es =".$j;
	echo "<br>";
	
	$j++;
}
while($j<5);


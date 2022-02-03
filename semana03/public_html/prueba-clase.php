<?php 

include "clases.php";


$producto = new Producto();

$producto->setId(1);
$producto->setCodigo("P001");
$producto->setNombre("Producto 1");

echo print_r($producto,1);

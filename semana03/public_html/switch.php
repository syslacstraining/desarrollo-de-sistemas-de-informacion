<?php

$comando="leer";

switch ($comando) {
	case 'escribir':
		echo "se esta escribiendo";
		break;
	case 'leer':
		echo "se esta leyendo";
		break;
	
	default:
		echo "no se encuentra el comando";
		break;
}
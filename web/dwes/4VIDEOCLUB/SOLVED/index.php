<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Herencia en PHP5</title>
</head>
<body>
	<?php
	// Activamos la función de auto-carga de clases.
	spl_autoload_register(function($nombreClase)
	{ 
		require_once 'class'.DIRECTORY_SEPARATOR.strtolower($nombreClase).'.php';
	});

	
	$soporte1 = new soporte(22,"Los Intocables",3);
	echo "<b>" . $soporte1->numero . "</b>";
	echo "<br>Precio: " . $soporte1->getPrecioSinIVA() . " euros";
	echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros.<br/><br/>"; 

	$micinta = new cinta(22,"Los Otros", 4.5, "115 minutos","VHS");
	echo "<b>" . $micinta->getTitulo() . "</b>";
	echo "<br>Precio: " . $micinta->getPrecioSinIVA() . " euros";
	echo "<br>Precio IVA incluido: " . $micinta->getPrecioConIVA() . " euros.<br/><br/>"; 


	$mijuego = new juego(21,"Final Fantasy", 2.5, "Playstation",1,1);
	$mijuego->imprimirCaracteristicas();
	$mijuego->imprimeJugadores();

	echo "<p>";
	$mijuego2 = new juego(27,"GP Motoracer", 3, "Playstation II",1,2);
	echo "<b>" . $mijuego2->getTitulo() . "</b>";
	$mijuego2->imprimeJugadores(); 
	?>
</body>
</html>
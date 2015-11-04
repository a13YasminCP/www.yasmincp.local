<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3>ARRAYS & METHODS</h3>
	<?php

	//Crear un array con 30 posiciones que contiene números aleatorios entre 0 y 20.
	$array= array();

	for($i=0;$i<30;$i++){

		$array[$i]=rand(0,20);//rand-> para crear el numero aleatorio
		//(minimo,maximo)

		//Imprimir el array creado anteriormente.
		echo($array[$i]." , ");//para que me los ponga todos seguidos

	}
	echo("<br>");

	//Crear un array con la siguiente información: Batman, Superman, Krusty, Bob, Mel y Barney.
	$arrayDibus= array("Batman", "Superman", "Krusty", "Bob", "Mel" , "Barney");
	for($i=0;$i<count($arrayDibus);$i++){//count equivale a length para que me devuelva el tamaño del array


		echo($arrayDibus[$i]." , ");//para que me los ponga todos seguidos


	}
	echo("<br>");

	//Eliminar el último elemento dentro del array (use métodos de array ).
	unset($arrayDibus[count($arrayDibus)-1]);//borras con unset la ultima posicion q es el tamaño del array menos uno

	for($i=0;$i<count($arrayDibus);$i++){


		echo ($arrayDibus[$i]." , ");//para que me los ponga todos seguidos

	}
	echo("<br>");

	//Imprimir la posición del array donde se encontró 'Superman' (use métodos de array para buscar el contenido).
	echo("Superman está en la posición: ");
	echo(array_search("Superman", $arrayDibus)+1);
	echo("<br>");

	//Agregue los siguientes elementos al final de la matriz: Carl, Lenny, Burns y Lisa (métodos de utilización de la matriz).
	array_push($arrayDibus ,'Carl', 'Lenny', 'Burns' ,'Lisa');
	
	foreach ($arrayDibus as $key => $value) {

		echo "$value , ";
	 	# code...
	 } 
	 echo("<br>");


	//Ordenar los elementos de la matriz e imprimir la matriz ordenada (métodos de utilización de la matriz).

	sort($arrayDibus);
	foreach ($arrayDibus as $key => $value) {

		echo "$value , ";
	 	# code...
	 } 
	 echo("<br>"); 

	//Eliminar de la posición número 4, 2 elementos, incluyendo el cuarto elemento. (usar métodos de matriz).
	array_splice($arrayDibus, 4,2);
	
	
	foreach ($arrayDibus as $key => $value) {

		echo "$value , ";
	 	# code...
	 } 
	 echo("<br>"); 
	
	//Añadir estos elementos a la matriz (en la posición de inicio): Manzana, Melón, Sandía (métodos de utilización de la matriz).
	array_unshift($arrayDibus, "Manzana", "Melón", "Sandía");

	foreach ($arrayDibus as $key => $value) {

		echo "$value , ";
	 	# code...
	 } 
	 echo("<br>"); 

	//Crear una copia de la matriz con el nombre micopia y que contiene los elementos de tercero a quinto (métodos de utilización de la matriz).

	 //te coge desde donde hasta lo q le pongas
	 $micopia = array_slice($arrayDibus, 3,3);

	 foreach ($micopia as $key => $value) {

		echo "$value , ";
	 	# code...
	 } 
	 echo("<br>"); 

	 //Añadir el elemento "Monitor" al final del array (use métodos de array ).
	 array_push($micopia, "Monitor"); 
		

		foreach ($micopia as $value) {

		   echo "$value , ";
	 	# code...
	 } 
	 echo("<br>"); 

	//Crear un nuevo array que contenga el primer array y "micopia" concatenado. 
	//Nombra al nuevo array como Tercero (use array methods).
	 $tercero = array_merge($arrayDibus, $micopia); //me concatena el array random y mi copia uno detras de otro

	foreach ($tercero as $value) { 

    
		   echo "$value , ";
	 	# code...
	 } 
	 echo("<br>"); 
?>
</body>
</html>
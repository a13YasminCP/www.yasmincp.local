<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title></title>
</head>
<body>
   <h3>ARRAYS AND STRINGS</h3>
   <?php

   /*
	Crear una aplicación PHP para imprimir en una tabla toda la información proporcionada por la cadena usando las columnas: en la ciudad, país y continente.
   */

//tengo q convertir este string en un array para poder recorrerlo y separarlo 
	
   	$information="Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";

	$array = explode(";", $information);//lo separo


//la longitud del array es con count
//lo recorro

	for($i=0;$i<count($array);$i++)
	   {
	 		echo <td><tr>$array[$i]</tr></td>."<br>";//para acceder a cada posicion del array[$i]

	   } 
	


   ?>
</body>
</html>
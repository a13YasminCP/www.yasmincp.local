<!DOCTYPE html>
<!--
We have the following information:  City, Country, Continent saved in one string

$information="Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;
Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe"

Create a PHP application to print in a table all the information from the string with the colums City, Country and Continent.

Feedback comments	
Tu programa genera un bucle infinito.!!!!!!!!!!!!!!!!!!!!
-->
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table style='width:25%' align="center">
		<tr>
			<td><b>City</b></td> 
			<td><b>Country</b></td>
			<td><b>Continent</b></td>
		</tr>
		<?php
		$information = "Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";

		$newinfo = explode(';', $information);//para separar x los PUNTOS Y COMAS

		echo "<tr>";
		for ($i = 0; $i <count($newinfo); $i++) {

			$celdas = explode(',', $newinfo[$i]);//para separar x las COMAS

			for ($e=0; $e <count($celdas);$e++)
			{
				echo "<td>{$celdas[$e]}</td>";//td tokio/td japon/td asia//para separar
			}
			echo "<tr>";


		}
		?>
	</table>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task3.3</title>
</head>
<body> 

	<?php
	$datos= array(
		"John"=>array("email" => "john@demo.com",	"website" => "www.john.com", "age" => "22",	"password"=> "pass"),
		"Anna"=> array("email" => "anna@demo.com", "website" => "www.anna.com",	"age" => "24",	"password" =>"pass"),	
		"Peter"=>array("email" =>"peter@mail.com",	"website" => "www.peter.com",	"age" => "42",	"password" => "pass"),
		"Max"=>array("email" => "max@mail.com",	"website" => "www.max.com",	"age" => "33", "password" => "pass"));

	echo "<pre>";
	print_r($datos);
	echo "</pre>";

echo "<ul>"; //lista desordenada, elemento principla
	foreach ($datos as $key => $valor) 
	{

	echo "<li>$key</li>";
	
	echo "<ul>";

		foreach($valor as $clave=> $contenido) //lo llamamos de otra manera diferente para no cargarme el anterior y que me lo recorra igual
		{

			echo "<li>$clave: $contenido</li>";
		}

	echo "</ul>";
	
	}

echo "</ul>";

	?>
</body>
</html>
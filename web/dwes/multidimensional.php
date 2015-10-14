<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MULTIDIMENSIONAL</title>
</head>
<body>
	<H3>MULTIDIMENSIONAL ARRAY</H3>
	<?php
	$lista = [

	'John' => [
	'email' => 'john@demo.com',
	'website' => 'www.john.com',
	'age' => 22,
	'password' => 'pass',
	],

	'Anna' => [
	'email' => 'anna@demo.com',
	'website' => 'www.anna.com',
	'age' => 24,
	'password' => 'pass',
	],

	'Peter' => [
	'email' => 'peter@mail.com',
	'website' => 'www.peter.com',
	'age' => 42,
	'password' => 'pass'
	],

	'Max' => [
	'email' => 'max@mail.com',
	'website' => 'www.max.com',
	'age' => 33,
	'password' => 'pass',
	]

	];
	echo $lista[0][0]."<br/>";
	/*foreach ($lista as $key){

		echo $key[0]."<br>";
		//key 0 es el jonh
		//recorre una vez x cada array q tienes dentro
		
	}*/

	?>
</body>
</html>
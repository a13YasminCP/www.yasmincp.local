<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3>FUNCTIONS</h3>
	<?php
	/*
	Write a function that receives a character and prints if the character is a digit between 0 and 9.
	Write a function that receives one string and returns its length.
	Write a function that receives two numbers a and b and returns the number a raised to the power of b.
	Write a function that receives one character and returns true if the character is a vowel.
	Write a function thar receives one number and returns if the number is odd or even.
	Write a function that receives one string and returns the string in uppercase.
	Write a function that prints the default timezone used in PHP.
	Write a function that prints the sunrise and sunset time for the default location.
	*/
	function ver($a) {

		echo $a."<br>";
	}
	ver("HOLA");
	//$a es hola
	//-------------------------
	function caracter($a) {

		if($a>0 && $a<9)
		{
			echo"El numero está entre 0 y 9"."<br>";
		}
		else 
			echo"El numero NO esta entre 0 y 9"."<br>";
	}
	caracter(2);
	//-------------------------
	
	function cadena($letra) {

		return strlen($letra);
	}
	
	echo "La longitud de la cadena es: ";
	echo cadena("casa")."<br>";

	//-------------------------
	//Escribe una función que recibe dos números a y b y devuelve el número de uno elevado a la potencia del otro

	function potencia($a,$b) {

		return pow($a,$b);
	}
	echo "La potencia es: ";
	echo potencia(2,3)."<br>";

	//-------------------------
	//Escriba una función que recibe un carácter y devuelve true si el carácter es una vocal.

	function letra($a) {

		if($a=='a'||$a=='e'||$a=='i'||$a=='o'||$a=='u'){

			echo"TRUE"."<br>";
		}
		else 
			echo"FALSE"."<br>";
	}
	echo letra("a");

	//-------------------------
	//Escriba una función q recibe un número y devuelve si el número es par o impar.

	//cualquier numero q al dividirlo x dos el resto sea cero es par
	function numero($num) {

		if($num%2==0){

			echo "el numero es PAR";

		}else
			echo "el numero es IMPAR";
		
	}
	echo numero(7)."<br>";

	//-------------------------
	//Escriba una función que recibe una cadena y devuelve la cadena en mayúsculas 

	function cadena1($letra) {

		return strtoupper($letra);
	}
	
	echo cadena1("casa")."<br>";


	//-------------------------
	//Escriba una función que imprime la zona horaria por defecto utilizado en PHP

	function zonahoraria()
 	{
     
     echo date_default_timezone_get()."<br>";
	
	}
	zonahoraria();

	//-------------------------
	//Escriba una función que imprime la hora del amanecer y el atardecer de la ubicación predeterminada.

	function hora()
 	{
     
     echo "Amanecer: ";
     echo(date_sunrise(time()))."<br>";
     echo "Atardecer: ";
     echo(date_sunset(time()));
	
	}
	hora();
	?>
</body>
</html>
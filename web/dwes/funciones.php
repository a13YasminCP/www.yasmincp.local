<?php

function caracter($a) {

	if($a>0 && $a<9)
	{
		echo"El numero está entre 0 y 9"."<br>";
	}
	else 
		echo"El numero NO esta entre 0 y 9"."<br>";
}

function cadena($letra) {

	return strlen($letra);
}


function potencia($a,$b) {

	return pow($a,$b);
}


function letra($a) {

	if($a=='a'||$a=='e'||$a=='i'||$a=='o'||$a=='u'){

		echo"TRUE"."<br>";
	}
	else 
		echo"FALSE"."<br>";
}


function numero($num) {

	if($num%2==0){

		echo "el numero es PAR";

	}else
	echo "el numero es IMPAR";

}


function cadena1($letra) {

	return strtoupper($letra);
}


function zonahoraria()
{

	echo date_default_timezone_get()."<br>";
	
}


function hora()
{

	echo "Amanecer: ";
	echo(date_sunrise(time()))."<br>";
	echo "Atardecer: ";
	echo(date_sunset(time()));
	
}

?>
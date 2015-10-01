<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GREETINS</title>
</head>
<body>
	<h2>GREETINS AND FORM SUBMISSION</h2>
	<?php
	echo "FECHA de hoy : ";
	echo date("d-m-Y");
	echo "<br>";
	echo "HORA de hoy : ";
	echo date("H:i:s");
	echo "<br>"."<br>";

	$time=date("H");
	//echo date("H")."<br>";
	if($time>8 && $time<13) 
		echo "GoOod moOrning, Glory!!!<br>";
	elseif ($time>13 && $time<15) 
		echo "Enjoy your meal. BUrRRrRrrPPP!!.-´¨*º<br>";
	elseif($time>15 && $time<17)
		echo "Coffee Time. Do You like COFFEE??<br>";
	else echo "GoOod NightzZzZZZ...!!<br>";
	
	echo "<br>";
	
	?>

	<ul>
		<li>Coca Cola ( 1 €)</li>
		<li>Pepsi Cola (0,80 €)</li>
		<li>Fanta Naranja (0,90 €)</li>
		<li>Trina Manzana (1,10 €)</li>
	</ul><br>

	<!--abrimos un formulario pq sino no funciona-->
	<form name="formulario" method="post" action="">

		<select name="option">
			<option value="cocacola">Coca Cola</option>
			<option value="pepsi">Pepsi Cola</option>
			<option value="fanta">Fanta Naranja</option>
			<option value="trina">Trina Manzana</option>
		</select>


		<input type="text" name="cantidad"/><!--cantidad-->
		<input type="submit" value="Total" /><!--boton-->

	</form>

	<?php

	if(!empty($_POST['cantidad']))//si esta vacio que me muestre el formulario (todo lo de arriba)
	{
		if($_POST['option']=="cocacola")//si la opcion q selecciono es cocacola
		{
			echo "<br>"."You requested ". $_POST['cantidad']." Coca Cola bottles. Total amount: ".($_POST['cantidad']*1)." Euros";
				//para que me multiplique la cantidad x el precio
		}
		if($_POST['option']=="pepsi")//si la opcion q selecciono es cocacola
		{
			echo "<br>"."You requested ". $_POST['cantidad']." Pepsi bottles. Total amount: ".($_POST['cantidad']*0.80)." Euros";
		}
		if($_POST['option']=="fanta")//si la opcion q selecciono es cocacola
		{
			echo "<br>"."You requested ". $_POST['cantidad']." Fanta bottles. Total amount: ".($_POST['cantidad']*0.90)." Euros";
		}
		if($_POST['option']=="trina")//si la opcion q selecciono es cocacola
		{
			echo "<br>"."You requested ". $_POST['cantidad']." Trina bottles. Total amount: ".($_POST['cantidad']*1.10)." Euros";
		}
	}

		?>

	</body>
	</html>
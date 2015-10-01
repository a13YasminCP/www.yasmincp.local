<!DOCTYPE html>
<!--
1.- Create a PHP script to show some greetings depending on the time of the day and the following conditions:

If 8 < time < 13 : "Good morning"

if 13 < time < 15: "Enjoy your meal"

If 15 < time < 17: "Coffee Time"

In other case: "Good night".

2.- Create a form to request products from a list with 4 drinks:

Coca Cola ( 1 €)
Pepsi Cola (0,80 €)
Fanta Naranja (0,90 €)
Trina Manzana (1,10 €)
We also need one box with the quantity of drinks selected and one submit button.

The program will show something like:

"You requested 3 Coca Cola bottles. Total amount: 3 Euros.

You can use a "switch "or "if" statement for this solution:

<select name="option">
<option value="cocacola">Coca Cola</option>
<option value="pepsi">Pepsi Cola</option>
<option value="fanta">Fanta Naranja</option>
<option value="trina">Trina Manzana</option>
</select>

If you feel like improving your exercise, please have a look at associative arrays here and try to use them to store the drink's price.

Send your result in a .ZIP file
-->
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Greetings and form submission</title>
	</head>
	<body>
		<?php
		$hora = date("H");// CON S ME SALEN LOS SEGUNDOS CON M LOS MINUTOS//

		if ($hora > 8 && $hora < 13)
			echo "Good morning Glory!<br>";
		elseif ($hora > 13 && $hora < 15)
			echo "Enjoy your meal. BUrRRrRrrPPP!.-´¨*º<br>";
		elseif ($hora > 15 && $hora < 17)
			echo "Coffee Time. Do You like COFFEE?<br>";
		else
			echo "Good NightzZzZZZ...<br>";
		?>
		<ol>
			<li>Coca Cola ( 1 €)</li>
			<li>Pepsi Cola (0,80 €)</li>
			<li>Fanta Naranja (0,90 €)</li>
			<li>Trina Manzana (1,10 €)</li>
		</ol>
		<form name="formulario" method="post" action="">
			We also need one box with the quantity of drinks selected and one submit button.<br>
			The program will show something like:<br>
			"You requested 3 Coca Cola bottles. Total amount: 3 Euros.<br>
			<br>

			<select name="opcion">
				<option value="Coca Cola">Coca Cola</option>
				<option value="Pepsi Cola">Pepsi Cola</option>
				<option value="Fanta Naranja">Fanta Naranja</option>
				<option value="Trina Manzana">Trina Manzana</option>
			</select>
			<br>
			<input type="text" name="numero">
			<br>
			<input type="submit" name="bebercio" value="Total" /> <!--LO UNICO IMPORTANTE ES LO DE TYPE SUBMIT Q ES LO D ENVIAR-->
		</form>
		<?php
		
		$bebidas = array(
			"cocacola" => 1,
			"pepsi" => 0.8,
			"fanta" => 0.9,
			"trina" => 1.1,
		);
                                                                            //si existe o esta definido la opcion (del select) y el numero del input....
		if (isset($_POST['opcion']) && isset($_POST['numero'])) //???con isset estoy mirando si existe o la variable esta def 
			{
			switch ($_POST['opcion']) //--???....elige opcion???
			{
			case 'Coca Cola':// COMPRUEBA LA BEBIDA SELECCIONADA EN EL <select>
				$total = $bebidas['cocacola'] * $_POST['numero']; //EL PRECIO(consigue el precio mediante la clave cocacola del array asociativo)
                                                                                 // X EL NUMERO DE COCACOLAS//
				echo ("You requested ". $_POST['numero'] ." Coca Cola bottles. Total amount: ".$total." Euros");
				break;
			case 'Pepsi Cola':
				$total = $bebidas['pepsi'] * $_POST['numero'];//multiplica el precio que yo le meti al array por el numero q yo le puse en el formulario
				echo ("You requested ". $_POST['numero'] ." Pepsi bottles. Total amount: ".$total." Euros");
				break;
			case 'Fanta Naranja':
				$total = $bebidas['fanta'] * $_POST['numero'];
				echo ("You requested ". $_POST['numero'] ." Fanta bottles. Total amount: ".$total." Euros");
				break;
			case 'Trina Manzana':
				$total = $bebidas['trina'] * $_POST['numero'];
				echo ("You requested ". $_POST['numero'] ." Trina bottles. Total amount: ".$total." Euros");
				break;
			}
			}
			?> 
	</body>
</html>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Greetings and form submission</title>
	</head>
	<body>
		<?php
		$hora = date("H");

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
				<option value="cocacola" <?php echo (!empty($_POST['opcion']) && $_POST['opcion'] == 'cocacola') ? "selected" : ''; ?>>Coca Cola</option>
				<option value="pepsi" <?php echo (!empty($_POST['opcion']) && $_POST['opcion'] == 'pepsi') ? "selected" : ''; ?>>Pepsi Cola</option>
				<option value="fanta" <?php echo (!empty($_POST['opcion']) && $_POST['opcion'] == 'fanta') ? "selected" : ''; ?>>Fanta Naranja</option>
				<option value="trina" <?php echo (!empty($_POST['opcion']) && $_POST['opcion'] == 'trina') ? "selected" : ''; ?>>Trina Manzana</option>
                               <!--lo del empty me mira que no este vacio o meta un cero
                               esto es una manera d me guarde el valor y de q me guarde la opcion seleccionada
                               cuando se cumple las dos condciones me queda selecionado el valor-->
			</select>
			<br>
			<input type="text" value="<?php echo !empty($_POST['numero']) ? $_POST['numero'] : ''; ?>" name="numero">
			<br>
			<input type="submit" class="submit" name="bebercio" value="Total" />
		</form>
		<?php
		
		$bebidas = array(
			"cocacola" => 1,
			"pepsi" => 0.8,
			"fanta" => 0.9,
			"trina" => 1.1,
		);

		if (isset($_POST['opcion']) && isset($_POST['numero'])) //si existe la variable, no que no este vacia = si pongo el empty 
                // me aseguro que haga los calculos si los datos no estan vacios//
                    //ISSET COMPRUEBA SI ESTA DEFINIDA  Y SI EXISTE
                    //EMPTY COMPRUEBA Q NO ESTE VACIA
			{
			switch ($_POST['opcion']) 
			{
			case 'cocacola':
				$total = $bebidas['cocacola'] * $_POST['numero'];
				echo ("You requested ". $_POST['numero'] ." Coca Cola bottles. Total amount: ".$total." Euros");
				break;
			case 'pepsi':
				$total = $bebidas['pepsi'] * $_POST['numero'];
				echo ("You requested ". $_POST['numero'] ." Pepsi bottles. Total amount: ".$total." Euros");
				break;
			case 'fanta':
				$total = $bebidas['fanta'] * $_POST['numero'];
				echo ("You requested ". $_POST['numero'] ." Fanta bottles. Total amount: ".$total." Euros");
				break;
			case 'trina':
				$total = $bebidas['trina'] * $_POST['numero'];
				echo ("You requested ". $_POST['numero'] ." Trina bottles. Total amount: ".$total." Euros");
				break;
			}
			}
			?>
	</body>
</html>
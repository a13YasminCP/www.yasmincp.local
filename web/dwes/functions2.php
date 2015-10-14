<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3>MORE FUNCTIONS</h3>
	<?php 

	function dni($numero,$letra){

		$letras= array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T');
		if ($numero<0 || $numero>99999999){
			echo "El numero proporcionado no es valido";//no entra
		}else {

			//si el resto del numero entre 23 si no coincide con la posiciones del array no es correcto sino si
			//lo miramos en el array letras
			if($letras[$numero % 23] != $letra) {
				echo "La letra o el número proporcionados no son correctos";
			}
			else {
				echo "El número de DNI y su letra son correctos";
			}
		}
	}

	dni(99999999,'P');
	?>
</body>
</html>
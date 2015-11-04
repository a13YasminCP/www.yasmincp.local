<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3>INCLUDE & REQUIRE</h3>

	<?php

	//1.- Crear una biblioteca con todas sus funciones.

	//2.- Escribe la diferencia entre incluir, include_once, requiere y require_once.
	
	/*
	require() vs include()

	Ambas funciones importan o insertan el código contenido en el archivo.php dentro de otro. La diferencia puede deducirse de su nombre:

	require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. 

	Por ello, si el archivo especificado en la función require() no se encuentra saltará un error “PHP Fatal error” y el programa PHP se detendrá.

	include(), por el contrario, si no se encuentra dicho código, saltará un error tipo “Warning” y el programa seguirá ejecutándose 
	(aunque como consecuencia de no incluirse el código puede que no funcione correctamente, o sí, depende de la situación).

	Por tanto, es más común utilizar require(), pues lo más normal es que si llamamos al código de otro archivo es porque lo necesitamos. 
	No obstante, se suele utilizar require para invocar código que, si no es incluido, el programa puede llegar a errores muy graves y por lo tanto, 
	en dichas circunstancias, es mejor parar la ejecución del programa. Y utilizar include() para la llamada a archivos cuyo código no afecta a otras partes de la aplicación 
	y que, por tanto, si no están, no afectará al resto del programa.

	Por ejemplo, si tenemos un script PHP para mostrar artículos sería mejor utilizar require(), para cargar el código que realiza la consulta a la base de datos
	y recibe los datos del artículo a mostrar, mientras que podemos utilizar include() para invocar el archivo que contiene código html como puede ser el pie de la página web
	u otra parte de la plantilla.

	require_once()/include_once() vs require()/include()
	Las versiones require_once() e include_once() funcionan de la misma forma que sus respectivos, salvo que, al utilizar la versión _once, 
	se impide la carga de un mismo archivo más de una vez.

	Si incluimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases. 
	Es lógico pensar que por ello, es mejor siempre utilizar la versión _once. Si embargo, has de saber que estas versiones son más pesadas y consumen más recursos 
	y por ello hay que utilizarlas sólo cuándo sea necesario.

	*/
	//3.- Descarga esta plantilla y dividir el index.php, utilizar archivos de recursos, por lo que tendremos los siguientes archivos adicionales como resultado:

	//--- Logo.php archivo (contiene la div id = "logo")

	//----logo.php

	//--- Menu.php archivo (contiene la div id = "menú")

	//----menu.php

	//--- Pictures.php archivo (contiene la div id = "fotos")

	//----pictures.php

	//--- Content.php archivo (contiene la div id = "contenido")

	//----content.php

	//--- Sidebar.php archivo (contiene la div id = "sidebar")

	//----sidebar.php

	//--- Footer.php archivo (contiene la div id = "pie de página")

	//----footer.php

	//Modifique el index.php de utilizar los archivos de recursos creados antes.

	//Enviar sólo el código de la fuente logo.php y index.php.

	?>
</body>
</html>
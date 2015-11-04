<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BIBLIOTECA</title>
</head>
<body>
	<h3>BIBLIOTECA</h3>
<?php

  
    spl_autoload_register(function($nombreClase) {      
     
        require_once 'class' . DIRECTORY_SEPARATOR . strtolower($nombreClase) . '.php';
    });
    
  
    $documento=new Documento("1","Bolso");
    echo "<b>Documento</b>"."<br>";
    $documento->imprimirCaracteristicas();
    //($id, $formato, $autor, $paginas, $año)
    echo "<br>";

    $revista=new Revistas("2","Bolsillo","277","1999","Original");
    echo "<b>Revista</b>"."<br>";
    $revista->imprimirCaracteristicas();
   //($id, $formato, $paginas, $año, $tipo)
    echo "<br>";

    $libro=new Libros("3","Grande","Rosa","167","2013");
    echo "<b>Libro</b>"."<br>";
    $libro->imprimirCaracteristicas();
   //($id, $formato, $autor, $paginas, $año)
   //solo se necesitan los tres ultimos
   //pero no podemos borrar los dos primeros

   // COMO HAGO PARA Q SE VEAN LAS DOS PRIMERAS???
   // Q HICE DIFERENTE EN LOS OTROS PARA Q SI SE VEAN TODAS???
   // NECESITO EL PARENT EN IMPRIMIR CARACTERISTICAS 
   // PASANDOLE LAS PROPIEDADES DEL PARENT ID Y FORMATO PARA QUE ME LAS IMPRIMA TB
    echo "<br>";

    $dvd=new Dvd("4","Pequeño","20","2015","Típico");
    echo "<b>Dvd</b>"."<br>";
    $libro->imprimirCaracteristicas();
    //$id, $formato, $numero, $año, $formato

    //echo $libro->getFormato();
    //al ser public puedo acceder desde cualquier sitio siento protected no 
    //si cambio ese metodo por protecded me da fallo
    $biblioteca=new Biblioteca("pepe","Rua Viena","777-77-77-77","google.es");
    //$nombre, $direccion, $telefono, $web, $documentos
    echo "<b>Biblioteca</b>"."<br>";
    $biblioteca->agregar($libro);
    //$biblioteca->listar();
?>
</body>
</html>
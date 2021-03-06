<?php

    //Activamos la funcion autocarga de clases
    //--RECIBE UNA CLASE Y CARGA TODAS LAS CLASES DENTRO
    spl_autoload_register(function($nombreClase) {       //ME CARGA TODAS LAS CLASES D LA CARPETA CLASS
        //DIRECTORY_SEPARATOR PARA QUE ME COJA LA RUTA BIEN =  (/ O \)
        require_once 'class' . DIRECTORY_SEPARATOR . strtolower($nombreClase) . '.php';
    });
//ENTRE PARENTESIS PONEMOS LAS CARACTERISTICAS DEL CONSTRUCTOR
$soporte= new Soporte(0,"Soporte","30");

echo $soporte->imprimirCaracteristicas();

$dvd= new Dvd(1,"Los Miserables","20","Spanish","DVD");

echo $dvd->imprimirCaracteristicas();

$cinta= new Cinta(2,"El Naufrago","12","2h","VHS");

echo $cinta->imprimirCaracteristicas();

$juego= new Juego(3,"NET","35","PSP","3","2");

echo $juego->imprimirCaracteristicas();

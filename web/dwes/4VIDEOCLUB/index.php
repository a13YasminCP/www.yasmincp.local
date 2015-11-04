<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Herencia en PHP5</title>
    </head>
    <body>
        <?php
        //Activamos la funcion autocarga de clases
        //--RECIBE UNA CLASE Y CARGA TODAS LAS CLASES DENTRO
        spl_autoload_register(function($nombreClase) {       //ME CARGA TODAS LAS CLASES D LA CARPETA CLASS
            //DIRECTORY_SEPARATOR PARA QUE ME COJA LA RUTA BIEN =  (/ O \)
            require_once 'class' . DIRECTORY_SEPARATOR . strtolower($nombreClase) . '.php';
        });

        // instanciamos nuevo soporte
        $soporteM = new Soporte(1, 'Clase de soporte', 0); //CREAMOS UN INSTANCIA DEL OBJETO
        echo $soporteM->imprimirCaracteristicas();


        $cintaM = new Cinta(2, 'Ibiza Mix 95', 5.95, '85 min', 'VHS');
        echo $cintaM->imprimirCaracteristicas();


        $dvdM = new Dvd(3, 'Game of Thrones', 39.95, 'Español', 'DVD');
        echo $dvdM->imprimirCaracteristicas();


        $juegoM = new Juego(4, 'House of Boredom', 44.95, 'PSX', '1', '8');
        echo $juegoM->imprimirCaracteristicas();

        echo $juegoM->imprimirJugadores();
        echo "El título del juego es:  " . $juegoM->getTitulo() . "</br>";
        ?>
    </body>
</html>
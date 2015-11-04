<?php

Class Dvd extends Soporte{
    
    private $_idioma,$_formato;

    public function __construct($numero, $titulo, $precio, $idioma, $formato) {
       
        parent::__construct($numero, $titulo, $precio);
        $this->_idioma=$idioma;
        $this->_formato=$formato;
    }
    public function imprimirCaracteristicas() {
        
        parent::imprimirCaracteristicas();
        echo 'Idioma: '.$this->_idioma."<br>";
        echo 'Formato: '.$this->_formato."<br>";
    }
}


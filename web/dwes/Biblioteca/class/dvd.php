<?php

Class Dvd extends Documento{
    
    protected $_numero,$_año,$_formato;
    
    public function __construct($id, $formato, $numero, $año, $formato) {
        parent::__construct($id, $formato);
        $this->_numero=$numero;
        $this->_año=$año;
        $this->_formato=$formato;
       
    }
     public function imprimirCaracteristicas(){
        parent::imprimirCaracteristicas();
         echo "Número---> ".$this->_numero."<br>";
		 echo "Año---> ".$this->_año."<br>";
		 echo "Tipo---> ".$this->_tipo."<br>";
    }
}
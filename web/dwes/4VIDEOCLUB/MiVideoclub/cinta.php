<?php

Class Cinta extends Soporte{
    
    private $_duracion,$_formato;
    
    public function __construct($numero,$titulo,$precio,$duracion,$formato) {
        
        parent::__construct($numero,$titulo,$precio);//ACABA EN PUNTO Y COMA
            //AQUI SOLO SE PONE LO Q TIENE EL CONSTRUCTOR D LA CLASE PRINCIPAL
            $this->_duracion=$duracion;
            $this->_formato=$formato;
            
        }
    
    public function imprimirCaracteristicas() {
        parent::imprimirCaracteristicas();
        
        echo 'Duracion : '.$this->_duracion.'Formato: '.$this->_formato;
    }    
        
        
    }
    


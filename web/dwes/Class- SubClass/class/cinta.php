<?php

Class Cinta extends Soporte{

	private $_duracion;
	private $_formato;

	 public function __construct($numero,$titulo,$precio,$duracion,$formato) {
        
        parent::__construct($numero,$titulo,$precio);
         
            $this->_duracion=$duracion;
            $this->_formato=$formato;
            
        }
		public function imprimirCaracteristicas() {

			parent::imprimirCaracteristicas();

			echo 'Duracion: '.$this->_duracion."<br>";
			echo 'Formato: '.$this->_formato."<br>";

		}

	} 
	?>
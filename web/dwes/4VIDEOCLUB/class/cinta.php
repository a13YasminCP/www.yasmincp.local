<?php

//clase cinta
class Cinta extends Soporte{

//variables
	private $_duracion,$_formato;
	//constructor
	public function __construct($num,$tit,$pre,$dura,$form) {
		//llamamos al constructor de la clase padre
		parent::__construct($num,$tit,$pre);
		$this->_duracion=$dura;
		$this->_formato=$form;
	}
	//metodos
        public function imprimirCaracteristicas(){
                parent::imprimirCaracteristicas();
		echo  "Duracion =  ".$this->_duracion."<br>";
                echo  "Formato = ".$this->_formato."</br>";
	}
        
}

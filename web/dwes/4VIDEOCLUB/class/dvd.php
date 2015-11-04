<?php

class Dvd extends Soporte{

//variables
	private $_idioma,$_formato;
	//constructor
	public function __construct($num,$tit,$pre,$idi,$form) {
		parent::__construct($num,$tit,$pre);
		$this->_idioma=$idi;
		$this->_formato=$form;
	}
	//metodos
        public function imprimirCaracteristicas(){
	parent::imprimirCaracteristicas();
		echo  "Idioma=  ".$this->_idioma."<br>"."  Formato= ".$this->_formato."</br>";
	}

}


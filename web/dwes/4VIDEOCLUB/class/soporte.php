<?php

class Soporte{

	// creamos atributos
public $numero;
protected $_titulo, $_precio;

public function __construct($numero,$titulo,$precio){//parametros
	$this->numero=$numero;
	$this->_titulo=$titulo;
	$this->_precio=$precio;
	//le asignamos valores 
	//asignamos a los atributos esos parametros

}
//METODOS
public function getPrecioConIva(){
	return $this->_precio*1.21;
}

public function getPrecioSinIva(){
	return $this->_precio;
}

public function setTitulo($titulo){
	$this->_titulo=$titulo;
}

public function getTitulo(){
	return $this->_titulo;
}

public function imprimirCaracteristicas(){
	echo "<br/>Titulo: ....................................  Precio: <br/>";
	echo $this->_titulo ."...............................". $this->_precio;
	echo "<br/>                                         " . $this->numero . "<br/>";
}

}

?>
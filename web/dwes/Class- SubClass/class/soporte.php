<?php

Class Soporte{

	public $numero;
	protected $_titulo,$_precio;

	public function __construct($numero,$titulo,$precio){

		$this->numero=$numero;
		$this->_titulo=$titulo;
		$this->_precio=$precio;

	}
	public function get_Numero(){

		return $this->$numero;

	}
	public function get_Titulo(){

		return $this->_titulo;

	}
	public function get_PrecioConIva(){

		return $this->_precio*1.21;

	}
	public function get_PrecioSinIva(){

		return $this->_precio;

	}
	public function set_Titulo($titulo){

		$this->_titulo=$titulo;

	}
	public function imprimirCaracteristicas(){

	echo "<br/>Titulo: ....................................  Precio: <br/>";
	echo $this->_titulo ."...............................". $this->_precio;
	echo "<br/>                                         " . $this->numero . "<br/>";
	//echo $this->get_Titulo();
	}

}
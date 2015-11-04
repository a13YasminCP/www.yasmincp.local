<?php
class soporte{
	public $numero;
	protected $titulo;
	protected $precio;

	public function __construct($num,$tit,$precio){
		$this->numero = $num;
		$this->titulo = $tit;
		$this->precio = $precio;
	}

	public function getPrecioSinIVA(){
		return $this->precio;
	}

	public function getPrecioConIVA(){
		return $this->precio * 1.16;
	}

	public function setTitulo($titulo){
		$this->titulo=$titulo;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function imprimirCaracteristicas(){
		echo "<br/>Número: {$this->numero}";
		echo "<br/>Título: {$this->titulo}";
		echo "<br>{$this->precio} (IVA no incluido)";
	}
} 
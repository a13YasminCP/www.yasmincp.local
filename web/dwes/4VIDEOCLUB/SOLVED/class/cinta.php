<?php
// La clase cinta extiende soporte.

class cinta extends soporte{
	private $duracion;
	private $formato;

	public function __construct($num,$tit,$precio,$duracion,$formato){
		parent::__construct($tit,$num,$precio);
		$this->duracion = $duracion;
		$this->formato = $formato;
	}

	public function imprimirCaracteristicas(){
		echo "Película en VHS:<br>";
		parent::imprimirCaracteristicas();
		echo "<br>Duración: " . $this->duracion;
		echo "<br>Formato: " . $this->formato;
	}
} 
<?php
// La clase dvd extiende soporte.
class dvd extends soporte{
	private $idioma;
	private $formato;

	public function __construct($num,$tit,$precio,$idioma,$formato){
		parent::__construct($tit,$num,$precio);
		$this->idioma = $idioma;
		$this->formato = $formato;
	}

	public function imprimirCaracteristicas(){
		echo "Película en DVD:<br>";
		parent::imprimirCaracteristicas();
		echo "<br/>" . $this->idioma;
		echo "<br/>" . $this->formato;
	}
} 
?>
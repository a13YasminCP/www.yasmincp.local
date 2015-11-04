<?php
// La clase juego extiende soporte.

class juego extends soporte{
	private $consola; //nombre de la consola del juego ej: playstation
	private $minJugadores;
	private $maxJugadores;

	public function __construct($num,$tit,$precio,$consola,$min_j,$max_j){
		parent::__construct($num,$tit,$precio);
		$this->consola = $consola;
		$this->minJugadores = $min_j;
		$this->maxJugadores = $max_j;
	}

	public function imprimirCaracteristicas(){
		echo "Juego para: " . $this->consola;
		parent::imprimirCaracteristicas();
		echo "<br/>" . $this->imprimeJugadores();
	}

	public function imprimeJugadores(){
		if ($this->minJugadores == $this->maxJugadores){
			if ($this->minJugadores==1)
				echo "<br>Para un jugador";
			else
				echo "<br>Para " . $this->minJugadores . " jugadores";
		}else{
			echo "<br>De " . $this->minJugadores . " a " . $this->maxJugadores . " Jugadores.";
		}
	}


}
<?php

//clase juego
class Juego extends Soporte{

//variables
	private $_consola,$_minJugadores,$_maxJugadores;
	//constructor
	public function __construct($num,$tit,$pre,$con,$min,$max) {
		parent::__construct($num,$tit,$pre);
		$this->_consola=$con;
		$this->_minJugadores=$min;
		$this->_maxJugadores=$max;
	}
	//metodos
public function imprimirCaracteristicas(){
	parent::imprimirCaracteristicas();
		echo  "consola=  ".$this->_consola."</br>";
	}

public function imprimirJugadores(){	
	echo  "El número mínimo de jugadores= ".$this->_minJugadores."<br>"." El número máximo de jugadores= ".$this->_maxJugadores."</br>";
}
}


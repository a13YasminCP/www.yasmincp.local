<?php

Class Juego extends Soporte{

	private $_consola;
	private $_minJugadores;
	private $_maxJugadores;

	public function __construct($numero, $titulo, $precio,$consola,$minJugadores,$maxJugadores) {
        
       parent::__construct($numero, $titulo, $precio);
       
        $this->_consola=$consola;
        $this->_minJugadores=$minJugadores;
        $this->_maxJugadores=$maxJugadores;
       
    }
		public function imprimirCaracteristicas() {

			parent::imprimirCaracteristicas();
			
			echo 'Consola: '.$this->_consola."<br>";
			echo 'MinJugadores: '.$this->_minJugadores."<br>";
			echo 'MaxJugadores: '.$this->_maxJugadores."<br>";

		}

	} 
	?>
	
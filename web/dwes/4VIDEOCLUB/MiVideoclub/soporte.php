<?php
Class Soporte {
    public $numero;
    protected $_titulo, $_precio;
    
    public function __construct($numero,$titulo,$precio) {
        $this->numero=$numero;
        $this->_titulo=$titulo;
        $this->_precio=$precio;
    
    }
    public function getNumero(){
        return $this->numero;
        
    }
    public function getPrecioConIVA(){
        return $this->_precio*1.21;
    }
    public function getPrecioSinIVA() {
        return $this->_precio;
    }
    public function getTitulo() {
        return $this->_titulo;
    }
    public function setTitulo($titulo) {
        $this->_titulo=$titulo;
    }
    public function imprimirCaracteristicas(){
    
         echo "<br> Titulo: ................... Precio: <br>";
         echo $this->_titulo. "................." .$this->_precio."<br>";
         echo $this->_numero."<br>";
    }    
 }  
?>

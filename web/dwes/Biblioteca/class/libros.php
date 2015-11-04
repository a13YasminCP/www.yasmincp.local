<?php

Class Libros extends Documento{
    
    protected $_autor,$_paginas,$_año;
    
    public function __construct($id, $formato, $autor, $paginas, $año) {
        parent::__construct($id, $formato);
        $this->_autor=$autor;
        $this->_paginas=$paginas;
        $this->_año=$año;
       
    }
     public function imprimirCaracteristicas(){
         parent::imprimirCaracteristicas();
         //llamamos al padre pero a la funcion imprimirCaracteristicas
        //para que me coja las dos caracteristicas de id formato ademas d estas
         echo "Autor---> ".$this->_autor."<br>";
		 echo "Paginas---> ".$this->_paginas."<br>";
		 echo "Año---> ".$this->_año."<br>";
    }    
}
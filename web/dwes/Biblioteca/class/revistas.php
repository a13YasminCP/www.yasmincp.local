<?php

Class Revistas extends Documento{
    
    protected $_paginas,$_año,$_tipo;
    
    public function __construct($id, $formato, $paginas, $año, $tipo) {
        parent::__construct($id, $formato);
        $this->_paginas=$paginas;
        $this->_año=$año;
        $this->_tipo=$tipo;
       
    }
    public function imprimirCaracteristicas(){
        parent::imprimirCaracteristicas();
        //llamamos al padre pero a la funcion imprimirCaracteristicas
        //para que me coja las dos caracteristicas de id formato ademas d estas
         echo "Páginas---> ".$this->_paginas."<br>";
		 echo "Año---> ".$this->_año."<br>";
		 echo "Tipo---> ".$this->_tipo."<br>";
    }    
 }
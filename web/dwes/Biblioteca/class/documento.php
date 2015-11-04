<?php
Class Documento 
{//un documento no es un tipo de biblioteca x eso no es extend aqui 
    //esta al mismo nivel
	protected $_id;
	protected $_formato;

	public function __construct($id,$formato) {
		$this->_id=$id;
		$this->_formato=$formato;

	}
	 public function getId(){
        return $this->_id;
        
    }
    public function setId($id) {
        $this->_titulo=$titulo;
    }
     public function getFormato(){
        return $this->_formato;
        
    }
     public function setFormato($formato) {
        $this->_formato=$formato;
    }
    public function imprimirCaracteristicas(){
    
         echo "Id---> ".$this->_id."<br>";
		 echo "Formato---> ".$this->_formato."<br>";
    }    
}
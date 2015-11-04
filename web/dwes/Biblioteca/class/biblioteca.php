<?php

Class Biblioteca {
    
    protected $_nombre,$_direccion,$_telefono,$_web;
    protected $documentos;

    //hay que imprimir caracteristicas del objeto en cada posicion del array 
    
    public function __construct($nombre, $direccion, $telefono, $web) {
     
        $this->_nombre=$nombre;
        $this->_direccion=$direccion;
        $this->_telefono=$telefono;
        $this->_web=$web;

       
    }
    public function getNombre(){
        return $this->_nombre;
        
    }
    public function setNombre($nombre) {
        $this->_nombre=$nombre;
    }
    public function getDireccion(){
        return $this->_direccion;
        
    }
    public function setDireccion($direccion) {
        $this->_direccion=$direccion;
    }
    public function getTelefono(){
        return $this->_telefono;
        
    }
    public function setTelefono($telefono) {
        $this->_telefono=$telefono;
    }
    public function getWeb(){
        return $this->_web;
        
    }
    public function setWeb($web) {
        $this->_web=$web;
    }

    public function getDocumentos(){
        return $this->documentos;
    }
    
    public function setDocumentos($documentos){
        $this->documentos = $documentos;
    }
    
    public function agregar($documento){
            $documentos[]=$documento;
            //con poner corchetes ya me esta creando una nueva posicion en el array
    }
    public function listar(){//listo los documentos..listo un libro, un dvd, una revista

        foreach ($this->documentos as $key => $value) {
            //variable- posicion -valor
            $value->imprimirCaracteristicas();
            # code...
        }

    }
}
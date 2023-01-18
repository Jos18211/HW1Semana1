<?php
class Persona  {
    public $nombre;
    public $apellidos;
    function __construct($vNombre , $vApellidos ){
        $this->nombre = $vNombre;
        $this->apellidos = $vApellidos;
        


    }
    function setNombre($nombre){
         $this->nombre=$nombre;

    }

    function getNombre(){
       return  $this->nombre;
    }
   

} 
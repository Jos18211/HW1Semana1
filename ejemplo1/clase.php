<?php
class Persona
{
    public $nombre;
    public $apellidos;
    function __construct($vNombre, $vApellidos)
    {
        $this->nombre;
        $this->apellidos;
    }
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNombre()
    {
        return  $this->nombre;
    }
}

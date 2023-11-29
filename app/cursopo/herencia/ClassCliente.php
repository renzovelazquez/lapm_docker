<?php

require_once ("ClassPersona.php");

class Cliente extends Persona
{
    protected $fltCredito;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCredito(float $credito)
    {
        $this->fltCredito = $credito;
    }

    public function getCredito():float
    {
        return $this->fltCredito; 
    }

}
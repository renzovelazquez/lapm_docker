<?php
    // https://youtu.be/I2b3spc7nXg?si=zku9WWS1lPj8w1e4
    require_once("ClassMueble.php");

    class Mesa extends Mueble
    {
        private $strForma = "";
        protected $strTamanio;

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio)
        {
            parent::__construct($descripcion, $precio, $marca, $color, $material);

            $this->strTamanio = $tamanio;
        }

        public function setForma(string $forma)
        {
            $this->strForma = $forma;
        }


    }// end class mesa

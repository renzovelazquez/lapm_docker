<?php
    class Producto{
        public $strDescripcion;
        public $fltPrecio;
        protected $intStockMinimo = 10;
        protected $strStatus = "Activo";

        public function __construct(string $decripcion, float $precio)
        {
            $this->strDescripcion = $decripcion;
            $this->fltPrecio = $precio;
        }

        public function getInfoProducto()
        {
            $arrProducto = array('producto' => $this->strDescripcion,
                                'precio' => $this->fltPrecio,
                                'stock_minimo'  =>  $this->intStockMinimo,
                                'estado' => $this->strStatus
                            );
            return $arrProducto;
        }

    }// End class producto
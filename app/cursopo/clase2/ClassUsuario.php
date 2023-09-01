<?php
    Class Usuario{
        public $strNombre;
        public $strEmail;
        public $strTipo;
        private $strClave;
        protected $strFechaRegitro;
        static $strEstado = "Activo";

        function __construct(string $nombre, string $email, string $tipo)
        {
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClve = rand();
        }

    }//End Class usuario


?>
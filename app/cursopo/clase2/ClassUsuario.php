<?php
    Class Usuario{
        private $strNombre;
        private $strEmail;
        private $strTipo;
        private $strClave;
        protected $strFechaRegitro;
        static $strEstado = "Activo";

        function __construct(string $nombre, string $email, string $tipo)
        {
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
            $this->strFechaRegitro = date('y-m-d H:m:s');
        }

        // para acceder a las propiedades tanto protected  como private en este caso tenesmo que hacer 
        // uso de métodos geter y seter
        
        //defino los geters para acceder a las propiedades privadas
        public function getNombre():string
        {
            return $this->strNombre;
        }

        public function getEmail():string
        {
            return $this->strEmail;
        }

        public function getTipo():string
        {
            return $this->strTipo;
        }

        // crar un metodo que muestre todos los datos del Usuario
        public function getPerfil()
        {
            echo "Datos del usuario <br>";
            echo "Nombre: ". $this->strNombre."<br>";
            echo "Email: ". $this->strEmail."<br>";
            echo "clave: ". $this->strClave."<br>";
            echo "Fecha registro: ". $this->strFechaRegitro."<br>";
            echo "Estado: ". self::$strEstado."<br>";
        }
        // seter se puede sear el valor de una propidedad
        public function setCambiarClave(string $pass)
        {
            $this->strClave = $pass;
        }

    }//End Class usuario


?>
<?php
    //https://www.youtube.com/watch?v=PkPk1bWiaUw&list=PL3b9xmg86NTKWP3Xzu-1DCwaeO5sftK4V&index=2
    // https://youtu.be/PkPk1bWiaUw?si=_U1GKucATcQ2cZKQ
    class Operacion{
        public $cantidadUno = 0;
        public $cantidadDos = 0;
        public $resultado = 0;

        function __construct($intCont1, $intCont2){

            $this->cantidadUno = $intCont1;
            $this->cantidadDos = $intCont2;

        }

        public function getSuma(){
            $this->resultado = $this->cantidadUno + $this->cantidadDos;
            return $this->resultado;
        }

        public function getResta(){
            $this->resultado = $this->cantidadUno - $this->cantidadDos;
            return $this->resultado;
        }

        public function getMultiplicacion(){
            $this->resultado = $this->cantidadUno * $this->cantidadDos;
            return $this->resultado;
        }

        public function getDivision(){
            $this->resultado = $this->cantidadUno / $this->cantidadDos;
            return $this->resultado;
        }


    }//End Class Operacion

?>
<?php

    class LocalComercial extends Local{

        private string $razonsocial;
        private string $numlicencia;

        public function __construct($razonsocial, $numlicencia, $ciudad, $calle, $numeroPlantas, $dimensiones) {

            if(is_string($razonsocial) && is_string($numlicencia)) {

                $this -> razonsocial = $razonsocial;
                $this -> numlicencia = $numlicencia;
                parent::__construct($ciudad, $calle, $numeroPlantas, $dimensiones);

            } else {

                echo "Los datos del Local Comercial introducidos no son de tipo string";
                die();

            }
            
        }

        public function __toString() {

            return "<p>" . parent::__toString() . "</p>Razón Social: " . $this -> razonsocial . "<br></p><p>Número de Liccencia: " . $this -> numlicencia . "<br></p>";
            
        }
                
    }

?>
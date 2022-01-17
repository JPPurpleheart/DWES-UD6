<?php

    class Cine extends LocalComercial{

        private int $aforoSala;

        public function __construct($aforoSala, $ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia) {
            
            if($aforoSala > 0 && is_int($aforoSala)) {

                $this -> aforoSala = $aforoSala;
                parent::__construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia);

            } else {

                echo "El aforo introducido debe de ser mayor que cero";
                die();

            }

        }

        public function __toString() {
            
            return "<p>" . $this -> aforoSala . "</p><p>Aforo: " . parent::__toString() . "<br></p>";
            
        }

    }

?>
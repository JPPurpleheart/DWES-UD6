<?php

    class Local extends Dimensiones{

        private string $ciudad;
        private string $calle;
        private int $numplantas;
        private Dimensiones $dimensiones;

        public function __construct($ciudad, $calle, $numplantas, $dimensiones) {
            
            if($dimensiones instanceof Dimensiones) {

                if($numplantas >= 1 && $numplantas <= 10) {

                    $this -> ciudad = $ciudad;
                    $this -> calle = $calle;
                    $this -> numplantas = $numplantas;
                    $this -> dimensiones = $dimensiones;

                } else {

                    echo "El número de plantas debe estar comprendido entre 1 y 10";
                    die();

                }

            } else {

                echo "Dimensiones no es una instancia de la clase Dimensiones";
                die();

            }

        }

        public function __clone() {

            return $this -> dimensiones = clone $this -> dimensiones;

        }

        public function __toString() {

            return "<p>Ciudad: " . $this -> ciudad . "<br></p><p>Calle: " . $this -> calle . "<br></p><p>Plantas: " . $this -> numplantas . "<br></p><p>Dimensiones: (" . $this -> dimensiones -> __toString() . ")<br></p>";
            
        }

    }

?>
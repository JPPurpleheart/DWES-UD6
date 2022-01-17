<?php

    abstract class Vehiculo {

        private string $color;
        private float $peso;

        public function __construct($color, $peso) {

            $this -> color = $color;
            $this -> peso = $peso;
            
        }

        public function __get($name) {

            return $this -> $name;
            
        }

        public function __set($name, $value) {

            $this -> $name = $value;
            
        }

        public function circula() {

            return "El vehículo está circulando";

        }

        abstract public function añade_persona($peso_persona);

        public static function ver_atributo($obj) {

            if($obj instanceof Dos_ruedas) {

                return $obj -> color . ", " . $obj -> peso . ", " . $obj -> cilindrada;

            } else if($obj instanceof Coche) {

                return $obj -> color . ", " . $obj -> peso . ", " /*. $obj -> numero_puertas . ", "*/ . $obj -> numero_cadenas_nieve;

            } else if($obj instanceof Camion) {

                return $obj -> color . ", " . $obj -> peso . ", " /*. $obj -> numero_puertas . ", "*/ . $obj -> longitud;

            } else {

                echo "El objeto no es una instancia de ninguna de las clases";

            }
            
        }

    }

?>
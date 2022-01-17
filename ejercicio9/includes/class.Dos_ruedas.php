<?php

    class Dos_ruedas extends Vehiculo {

        private float $cilindrada;

        function __construct($color, $peso) {

            parent::__construct($color, $peso);

        }

        public function añade_persona($peso_persona) {

            $this -> peso += $peso_persona + 1.5;

        }

        public function poner_gasolina($litros) {

            $this -> peso += (1.5 * $litros);

        }

        public function __get($name) {
            
            if(property_exists(get_class(), $name)) {
                
                return $this -> $name;

            } else {

                return parent::__get($name);

            }

        }
    
        public function __set($name, $value) {

            if(property_exists(get_class(), $name)) {
                
                $this -> $name = $value;

            } else {

                parent::__set($name, $value);

            }

        }

    }

?>
<?php

    class Cuatro_ruedas extends Vehiculo {

        private int $numero_puertas;

        function __construct($color, $peso) {
        
            parent::__construct($color, $peso);
        
        }

        public function añade_persona($peso_persona) {

            $this -> peso += $peso_persona;

        }

        public function repintar($color) {

            $this -> color = $color;

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
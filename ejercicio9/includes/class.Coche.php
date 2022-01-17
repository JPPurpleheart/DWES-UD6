<?php

    class  Coche extends Cuatro_ruedas {

        private int $numero_cadenas_nieve = 0;

        function __construct($color, $peso) {
            Vehiculo::__construct($color, $peso);
            $this -> color = $color;
            $this -> peso = $peso;
        }

        public function añadir_cadenas_nieve($num) {

            $this -> numero_cadenas_nieve += $num;

        }

        public function quitar_cadenas_nieve($num) {

            $this -> numero_cadenas_nieve -= $num;

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
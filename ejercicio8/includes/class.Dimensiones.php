<?php

    class Dimensiones{

        private float $alto;
        private float $ancho;
        private float $largo;
        
        public function __construct($alto, $ancho, $largo) {
            
            $this -> __set("alto", $alto);
            $this -> __set("ancho", $ancho);
            $this -> __set("largo", $largo);

        }


        public function __set($nombre, $valor) {
            
            switch($nombre)
            {
                case "alto":
                    
                    if($valor > 1 && is_float($valor)) {
                    
                        $this -> $nombre = $valor;

                    } else {
                        
                        echo "El valor no puede ser menor que uno";
                        die();

                    }
                    
                    break;

                case "ancho":
                    
                    if($valor > 1 && is_float($valor)) {
                        
                        $this -> $nombre = $valor;

                    } else {
                        
                        echo "El valor no puede ser menor que uno";
                        die();

                    }

                    break;

                case "largo":
                    
                    if($valor > 1 && is_float($valor)) {
                        
                        $this -> $nombre = $valor;

                    } else {

                        echo "El valor no puede ser menor que uno";
                        die();

                    }
                    
                    break;

            }

        }

        public function __get($nombre) {

            return "El valor del atributo es: " . $this -> $nombre;

        }

        public function __toString() {

            return "alto=" . $this -> alto . ", ancho=" . $this -> ancho . ", largo=" . $this -> largo;
            
        }

    }
    
?>
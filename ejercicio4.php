<?php

    class Vivienda{
        
        private string $tipoVivienda;
        private float $valorMercado;

        public function __construct($tipoVivienda, $valorMercado){
            
            $this -> tipoVivienda = $tipoVivienda;
            $this -> valorMercado = $valorMercado;

        }

        public function __set($nombre, $valor){
            
            switch($nombre)
            {
                case "tipoVivienda":
                    $this -> $nombre = $valor;
                    break;
                case "valorMercado":
                    if($valor > 0) {
                        $this -> $nombre = $valor;
                    } else {
                        echo "El valor no puede ser menor que cero";
                    }
                    break;
            }

        }

        public function __get($nombre){

            return "El valor del atributo es: " . $this -> $nombre;

        }

    }

    $miCasa = new Vivienda("Casa", 205);
    echo $miCasa -> tipoVivienda;
    echo "<br>";
    echo $miCasa -> valorMercado;
    echo "<hr>";
    $miCasa -> tipoVivienda = "Piso";
    echo $miCasa -> tipoVivienda;
    echo "<br>";
    $miCasa -> valorMercado = "-2";
    echo "<br>";
    echo $miCasa -> valorMercado;

?>
<?php
    
    interface IEquipoFutbol{

        public function getNumeroJugadores();
        public function juegaPartido();

    }

    interface ICampeonato{

        public function getNombreCampeonato();

    }

    class EquipoFutbol implements IEquipoFutbol, ICampeonato{

        private int $numJugadores;
        private string $nombrEquipo;
        private string $nombreCampeonato;

        public function __construct($numJugadores, $nombrEquipo, $nombreCampeonato){

            $this -> numJugadores = $numJugadores;
            $this -> nombrEquipo = $nombrEquipo;
            $this -> nombreCampeonato = $nombreCampeonato;

        }

        public function getNumeroJugadores(){

            return $this -> numJugadores;

        }

        public function juegaPartido(){

            return $this -> nombrEquipo . " VICTORIA";

        }

        public function getNombreCampeonato(){
            
            return $this -> nombreCampeonato;

        }

    }

    $miEquipo = new EquipoFutbol(26, "Betis", "Copa del Rey");
    echo $miEquipo -> getNumeroJugadores();
    echo "<br>";
    echo $miEquipo -> juegaPartido();
    echo "<br>";
    echo $miEquipo -> getNombreCampeonato();
    
?>
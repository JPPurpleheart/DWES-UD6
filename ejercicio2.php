<?php

use Persona as GlobalPersona;

class Persona {

        //Atributos
        private $nombre;
        private $apellido;
        private $dni;
        private $sexo;
        private $peso;
        private $altura;
        private $fechaNac;

        //Método constructor
        public function __construct($nombre, $apellido, $dni, $sexo, $peso, $altura, $fechaNac)
        {
            //Inicializo las variables
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> dni = $dni;
            $this -> sexo = $sexo;
            $this -> peso = $peso;
            $this -> altura = $altura;
            $this -> fechaNac = $fechaNac;

        }

        //Métodos Getter y Setter
        function getNombre() {

            return $this -> nombre;

        }
        function setNombre($nombre) {

            $this -> nombre = $nombre;

        }

        function getApellido() {

            return $this -> apellido;

        }
        function setApellido($apellido) {

            $this -> apellido = $apellido;
        
        }
        
        function getDni() {

            return $this -> dni;

        }
        function setDni($dni) {

            $this -> dni = $dni;

        }
        
        function getSexo() {

            return $this -> sexo;

        }
        function setSexo($sexo) {

            $this -> sexo = $sexo;
        
        }
        
        function getPeso() {

            return $this -> peso;

        }
        function setPeso($peso) {

            $this -> peso = $peso;
        
        }
        
        function getAltura() {

            return $this -> altura;

        }
        function setAltura($altura) {

            $this -> altura = $altura;
        
        }
        
        function getFechaNac() {

            return $this -> fechaNac;

        }
        function setFechaNac($fechaNac) {

            $this -> fechaNac = $fechaNac;
        
        }

        function mostrarPersona() {

            echo $this -> nombre . " " . $this -> apellido . " con DNI " . $this -> dni . " de sexo " . $this -> sexo . " pesa " . $this -> peso . " kg, mide " . $this -> altura . " cm y nació el " . $this -> fechaNac;

        }
        
    }

    class Trabajador extends GlobalPersona {

        //Atributo adicional de la clase
        private $empresaTrabaja;

        //Método constructor
        function __construct($empresaTrabaja)
        {
            parent::__construct(parent::getNombre(), parent::getApellido(), parent::getDni(), parent::getSexo(), parent::getPeso(), parent::getAltura(), parent::getFechaNac());
            $this -> empresaTrabaja = $empresaTrabaja;

        }

        //Métodos Getter y Setter
        function getEmpresaTrabaja() {

            return $this -> empresaTrabaja;

        }
        function setEmpresaTrabaja($empresaTrabaja) {

            $this -> empresaTrabaja = $empresaTrabaja;

        }

        function mostrarPersona()
        {

            parent::mostrarPersona();
            
        }

        function mostrarTrabajador() {

            echo parent::mostrarPersona() . "; trabaja en " . $this -> empresaTrabaja;

        }

    }

    $p1 = new Persona("José Pablo", "Machuca González", "77937635L", "Hombre", "66.6", "1.63", "01/09/1996");

    $p1 -> mostrarPersona();

    echo "<hr>";

    $t1 = new Trabajador("Deloitte");

    $t1 -> mostrarPersona();

    $t1 -> mostrarTrabajador();

?>
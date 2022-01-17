<?php

    include('includes/class.Vehiculo.php');
    include('includes/class.Cuatro_ruedas.php');
    include('includes/class.Coche.php');
    include('includes/class.Dos_ruedas.php');

    $miCoche = new Coche("Azul", 650);
    $miCoche -> añade_persona(700);

    echo "\$miCoche:<br>";
    echo $miCoche -> color;
    echo "<br>";
    echo $miCoche -> peso;
    echo "<br>";

    echo "<hr>";

    echo "\$miCoche:<br>";
    $miCoche -> repintar("Amarillo");
    $miCoche -> añadir_cadenas_nieve(3);
    echo $miCoche -> color;
    echo "<br>";
    echo $miCoche -> numero_cadenas_nieve;
    echo "<br>";

    echo "<hr>";

    $misDos_ruedas = new Dos_ruedas("Marrón", 30);
    $misDos_ruedas -> añade_persona(2);
    $misDos_ruedas -> poner_gasolina(2000);
    
    echo "\$misDos_ruedas:<br>";
    echo $misDos_ruedas -> color;
    echo "<br>";
    echo $misDos_ruedas -> peso;
    echo "<br>";

?>
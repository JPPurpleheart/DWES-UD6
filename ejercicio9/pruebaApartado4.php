<?php

    include('includes/class.Vehiculo.php');
    include('includes/class.Cuatro_ruedas.php');
    include('includes/class.Camion.php');
    include('includes/class.Dos_ruedas.php');

    $misDos_ruedas_2 = new Dos_ruedas('Transparente', 1550);
    $misDos_ruedas_2 -> añade_persona(70);

    echo "\$misDos_ruedas_2:<br>";
    echo $misDos_ruedas_2 -> peso;
    echo "<br>";

    echo "<hr>";

    $misDos_ruedas_2 -> color = 'Verde';
    $misDos_ruedas_2 -> cilindrada = 1000;

    echo Vehiculo::ver_atributo($misDos_ruedas_2);
    echo "<br>";

    echo "<hr>";

    $miCamion = new Camion('Blanco', 6000);
    $miCamion -> parent::añade_persona(84);
    $miCamion -> parent::repintar('Azul');
    $miCamion -> parent::$numero_puertas = 4;

    echo "\$miCamion:<br>";
    echo Vehiculo::ver_atributo($miCamion);

?>
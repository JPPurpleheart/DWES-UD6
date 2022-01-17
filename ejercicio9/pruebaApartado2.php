<?php

    include('includes/class.Vehiculo.php');

    $miVehiculo = new Vehiculo("Rojo", 450);

    echo $miVehiculo -> circula();

    echo "<br>";

    echo "<br>";

    $miVehiculo -> añade_persona(50);

    echo "El peso de mi vehiculo es: " . $miVehiculo -> peso . " KG.";

    echo "<br>";

    echo "<br>";

    $miVehiculo -> añade_persona(60);

    echo "El peso de mi vehiculo es: " . $miVehiculo -> peso . " KG.";

?>
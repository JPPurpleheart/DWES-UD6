<?php

    include 'includes/class.Dimensiones.php';
    include 'includes/class.Local.php';
    include 'includes/class.LocalComercial.php';
    include 'includes/class.Cine.php';
    
    $cines[0] = new Cine('Sevilla', 'Calle Sierpes', 13, new Dimensiones(100., 50., 75.),'Razon 1584', 'C0001A', 100);
    $cines[1] = new Cine('Cádiz', 'Calle Merced', 26, new Dimensiones(25., 45., 50.),'Razon 2987', 'C0002B', 50);
    $cines[2] = new Cine('Málaga', 'Calle Monte Sancha', 39, new Dimensiones(50., 15., 25.),'Razon 3942', 'C0001C', 75);

    $copia = clone $cines[1];

    $copia->dimensiones->alto = 20.;
    $copia->dimensiones->ancho = 40.;
    $copia->dimensiones->largo = 80.;
    
    foreach ($cines as $cine) {

        echo $cine.'<br>';

    }

    echo $copia;

?>
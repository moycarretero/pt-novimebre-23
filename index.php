<?php

    $numero = 1;
    $pi = 3.1416;
    $nombre = 'Moises';
    $apellidos = "Carretero";

    //echo "Me llamo '$nombre' y $apellidos";

    $verdadero = true;
    $falso = false;
    $nulo = null;
    $frutas = [
        'fresa',
        'manzana',
        'naranja',
        22 => 'melocotón',
        '43FC4' => 'sandia',
        'melón',
        12 => 'higo',
        'mandarina',
        2 => 'aguacate'
    ];

    $frutas[88] = "pera";
    $frutas[] = "granada";

    //echo $frutas[22]. " ". $frutas[1];

// http://localhost/index.php?nombre=XX&apellidos=YY&edad=BBB
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $age = $_GET['edad'];

    echo "Me llamo $nombre $apellidos y tengo $age años";

    //print_r($frutas);
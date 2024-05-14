<?php
    require_once "Coche.php";

    $coche = new Coche("Ford", "Fiesta");

    $coche->repostarCombustible(20);
    $coche->mover(56);
    $coche->mover(130);
    $coche->setNumRuedas(4);

    //coche.cantidadCombustible
    //echo "La cantidad de combustible es: ".$coche->getCantidadCombustible();
    $coche->pintaInfo();
    $coche->mover(99);
    $coche->pintaInfo();
    //echo "<br>La cantidad de combustible es: ".$coche->getCantidadCombustible();

    $otroCoche = new Coche("Seat", "Ibiza");
    $otroCoche->repostarCombustible(10);
    $otroCoche->mover(456);
    $otroCoche->pintaInfo();

    $ferrari = new Coche("Ferrari", "Testarrosa");
    $ferrari->pintaInfo();

    $vehiculo = new Vehiculo();

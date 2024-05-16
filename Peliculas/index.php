<?php
    require_once "vendor/autoload.php";

    use Upgrade\Netflix\Serie;
    use Upgrade\Netflix\Multimedia\Temporada;
    use Upgrade\Netflix\Multimedia\Elemento\Capitulo;

    $juegoTronos = new Serie();
    $juegoTronos->setNombre("Juego de Tronos");

    $temporada1 = new Temporada();

    $capitulo11 = new Capitulo();
    $capitulo21 = new Capitulo();
    $capitulo31 = new Capitulo();

    $temporada1->addCapitulo($capitulo11);
    $temporada1->addCapitulo($capitulo21);
    $temporada1->addCapitulo($capitulo31);

    $temporada2 = new Temporada();
    $capitulo12 = new Capitulo();
    $capitulo22 = new Capitulo();

    $temporada2->addCapitulos([$capitulo12, $capitulo22]);

    $juegoTronos->addTemporada($temporada1);
    $juegoTronos->addTemporada($temporada2);

    echo "Juego de Tronos tiene {$juegoTronos->getNumCapitulos()} capitulos";

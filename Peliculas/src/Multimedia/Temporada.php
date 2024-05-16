<?php

namespace Upgrade\Netflix\Multimedia;

use Upgrade\Netflix\Multimedia\Elemento\Capitulo;

class Temporada
{
    protected int $numTemporada;
    protected int $year;
    protected array $capitulos;

    public function addCapitulo(Capitulo $capitulo)
    {
        $this->capitulos[] = $capitulo;
    }

    public function addCapitulos(array $capitulos){
        $this->capitulos = $capitulos;
    }

    public function getNumTemporada(): int
    {
        return $this->numTemporada;
    }

    public function setNumTemporada(int $numTemporada): void
    {
        $this->numTemporada = $numTemporada;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getNumCapitulos(): int
    {
        return count($this->capitulos);
    }


}

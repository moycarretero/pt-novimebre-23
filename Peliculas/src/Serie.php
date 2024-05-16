<?php

namespace Upgrade\Netflix;

use Upgrade\Netflix\Multimedia\Temporada;

class Serie
{
    protected string $nombre;
    protected string $tipo;
    protected array $temporadas;

    public function addTemporada(Temporada $temporada)
    {
        $this->temporadas[] = $temporada;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getNumCapitulos(): int
    {
        $numCapitulos = 0;

        foreach ($this->temporadas as $temporada){
            $numCapitulos += $temporada->getNumCapitulos();
        }

        return $numCapitulos;
    }
}

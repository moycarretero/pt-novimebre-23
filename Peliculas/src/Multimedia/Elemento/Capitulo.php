<?php

namespace Upgrade\Netflix\Multimedia\Elemento;

class Capitulo
{
    protected int $valoracion;
    protected string $titulo;

    public function getValoracion(): int
    {
        return $this->valoracion;
    }

    public function setValoracion(int $valoracion): void
    {
        $this->valoracion = $valoracion;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }


}

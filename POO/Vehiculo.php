<?php

abstract class Vehiculo
{
    protected int $numRuedas;

    public function getNumRuedas(): int
    {
        $this->setNumRuedas(0);
        return $this->numRuedas;
    }

    public function setNumRuedas(int $numRuedas): void
    {
        $this->numRuedas = $numRuedas;
    }

    public abstract function mover(float $distancia);
}

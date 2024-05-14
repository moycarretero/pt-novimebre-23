<?php
require_once "Vehiculo.php";

class Coche extends Vehiculo
{
    protected string $matricula;
    protected string $marca;
    protected string $modelo;
    protected float $cantidadCombustible;
    protected int $kilometrosRecorridos;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;

        $this->cantidadCombustible = 0;
        $this->kilometrosRecorridos = 0;
        $this->setNumRuedas(0);
    }

    function mover(float $distancia)
    {
        $this->kilometrosRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia * 0.05;
    }

    function repostarCombustible(float $cantidadCombutible)
    {
        $this->cantidadCombustible += $cantidadCombutible;
    }

    function pasarITV()
    {

    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): self
    {

        $this->matricula = $matricula;
        return $this;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getCantidadCombustible(): float
    {
        return $this->cantidadCombustible;
    }

    public function setCantidadCombustible(float $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    public function getKilometrosRecorridos(): int
    {
        return $this->kilometrosRecorridos;
    }

    public function setKilometrosRecorridos(int $kilometrosRecorridos): void
    {
        $this->kilometrosRecorridos = $kilometrosRecorridos;
    }

    function pintaInfo()
    {
        echo "<ul>";
        echo "<li>Marca: $this->marca</li>";
        echo "<li>Modelo: $this->modelo</li>";
        echo "<li>Cantidad Combustible: $this->cantidadCombustible</li>";
        echo "<li>Km Recorridos: $this->kilometrosRecorridos</li>";
        echo "</ul>";
    }

}

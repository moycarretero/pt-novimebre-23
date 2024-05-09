<?php


    function sumar(int $num1, int $num2): int
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    function dameFecha(): string
    {
        return date("d/m/Y");
    }

    function saludo(string $nombre): void
    {
        echo "Buenas noches $nombre<br>";
    }

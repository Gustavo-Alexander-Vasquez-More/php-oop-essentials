<?php

namespace Ejercicio1;

class Motocicleta extends Vehiculo implements Enviable
{

    private int $cilindrada;

    //Constructor
    public function __construct(string $patente, string $marca, string $modelo, int $cilindrada)
    {
        parent::__construct($patente, $marca, $modelo);
        $this->cilindrada = $cilindrada;
    }

    //Gettter & Setter
    public function getCilindrada(): int
    {
        return $this->cilindrada;
    }

    public function setCilindrada(int $cilindrada): void
    {
        $this->cilindrada = $cilindrada;
    }

    //Definicion del metodo de la interfaz

    public function calcularCostoEnvio(): float
    {
        return 500 + (2 * $this->cilindrada);
    }

    public function getString(): string
    {
        return "Motocicleta - Patente: " . $this->getPatente() . ", Marca: " . $this->getMarca() . ", Modelo: " . $this->getModelo() . ", Cilindrada: " . $this->cilindrada;
    }
}

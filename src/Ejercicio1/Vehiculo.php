<?php

namespace Ejercicio1;

abstract class Vehiculo
{

    private string $patente;
    private string $marca;
    private string $modelo;

    //Constructor
    public function __construct(string $patente, string $marca, string $modelo)
    {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    //Gettter & Setter
    public function getPatente(): string
    {
        return $this->patente;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setPatente(string $patente): void
    {
        $this->patente = $patente;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    abstract function getString(): string;
}

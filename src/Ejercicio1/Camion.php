<?php

    namespace Ejercicio1;

    class Camion extends Vehiculo implements Enviable {

        private float $capacidadCarga;

        //Constructor
        public function __construct(string $patente, string $marca, string $modelo, float $capacidadCarga) {
            parent::__construct($patente, $marca, $modelo);
            $this->capacidadCarga = $capacidadCarga;
        }

        //Gettter & Setter
        public function getCapacidadCarga(): float {
            return $this->capacidadCarga;
        }

        public function setCapacidadCarga(float $capacidadCarga): void {
            $this->capacidadCarga = $capacidadCarga;
        }

        //Definicion del metodo de la interfaz
        public function calcularCostoEnvio(): float {
            return $this->capacidadCarga * 100;
        }

        public function getString(): string {
            return "Camion - Patente: " . $this->getPatente() . ", Marca: " . $this->getMarca() . ", Modelo: " . $this->getModelo() . ", Capacidad de Carga: " . $this->capacidadCarga;
        }

    }

?>
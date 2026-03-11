<?php

namespace Ejercicio1;

    class GestionLogistica {

        private array $vehiculos;

        //Constructor
        public function __construct(){
            $this->vehiculos = [];
        }

        //Gettter & Setter
        public function getVehiculos(): array {
            return $this->vehiculos;
        }

        public function setVehiculos(array $vehiculos): void {
            $this->vehiculos = $vehiculos;
        }

        //Metodos

        public function agregarVehiculo(Enviable $vehiculo): void {
            $this->vehiculos[] = $vehiculo;
        }
        
        public function obtenerCostoTotal(): float {
          $costoTotal = 0;
          foreach ($this->vehiculos as $vehiculo){
              $costoTotal += $vehiculo->calcularCostoEnvio();
          }
          return $costoTotal;
        }

    }

?>
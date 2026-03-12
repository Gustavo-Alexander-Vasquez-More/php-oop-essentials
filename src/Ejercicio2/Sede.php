<?php

    namespace Ejercicio2;

    class Sede {
        
        private String $nombreSede;
        use Geolocalizable;

        //Constructor
        public function __construct(String $nombreSede, float $latitud, float $longitud) {
            $this->nombreSede = $nombreSede;
            $this->latitud = $latitud;
            $this->longitud = $longitud;
        }

        //Gettter & Setter
        public function getNombreSede(): String {
            return $this->nombreSede;
        }
        public function setNombreSede(String $nombreSede): void {
            $this->nombreSede = $nombreSede;
        }
    
    }

?>
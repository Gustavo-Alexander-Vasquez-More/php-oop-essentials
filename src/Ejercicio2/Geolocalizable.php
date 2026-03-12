<?php

    namespace Ejercicio2;

    trait Geolocalizable {

        private float $latitud;
        private float $longitud;
        
        //Gettter & Setter
        public function getLatitud(): float {
            return $this->latitud;
        }
        public function setLatitud(float $latitud): void {
            $this->latitud = $latitud;
        }
        public function getLongitud(): float {
            return $this->longitud;
        }
        public function setLongitud(float $longitud): void {
            $this->longitud = $longitud;
        }

        public function distanciaA( float $lat, float $long):float {

            return ($this->latitud + $this->longitud) - ($lat + $long);

        }

    }

?>
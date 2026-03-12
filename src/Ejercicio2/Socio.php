<?php

    namespace Ejercicio2;

    class Socio {
        private String $nombre;
        private String $dni;
        use Geolocalizable;

        //Constructor
        public function __construct(String $nombre, String $dni, float $latitud, float $longitud) {
            $this->nombre = $nombre;
            $this->dni = $dni;
            $this->latitud = $latitud;
            $this->longitud = $longitud;
        }

        //Gettter & Setter
        public function getNombre(): String {
            return $this->nombre;
        }
        public function setNombre(String $nombre): void {
            $this->nombre = $nombre;
        }
        public function getDni(): String {
            return $this->dni;
        }
        public function setDni(String $dni): void {
            $this->dni = $dni;
        }


    }

?>
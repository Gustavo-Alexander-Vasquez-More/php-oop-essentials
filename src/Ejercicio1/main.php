<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Ejercicio1\Camion;
use Ejercicio1\GestionLogistica;
use Ejercicio1\Motocicleta;

$gestionLogistica = new GestionLogistica();

$camion1 = new Camion("ABC123", "Volvo", "FH16", 20.5);
echo "Detalles del Camion 1:<br>";
echo $camion1->getString() . "<br><br>";

$camion2 = new Camion("DEF456", "Scania", "R500", 15.0);
echo "Detalles del Camion 2:<br>";
echo $camion2->getString() . "<br><br>";
echo "Modelo: " . $camion2->getModelo() . "<br>";
echo "Capacidad de Carga: " . $camion2->getCapacidadCarga() . " toneladas<br>";
echo "Costo de Envío: $" . $camion2->calcularCostoEnvio() . "<br><br>";

$motocicleta1 = new Motocicleta("GHI789", "Yamaha", "MT-07", 689);
echo "Detalles de la Motocicleta 1:<br>";
echo $motocicleta1->getString() . "<br><br>";
echo "Costo de Envío: $" . $motocicleta1->calcularCostoEnvio() . "<br><br>";

$motocicleta2 = new Motocicleta("JKL012", "Honda", "CBR500R", 471);
echo "Detalles de la Motocicleta 2:<br>";
echo $motocicleta2->getString() . "<br><br>";
echo "Costo de Envío: $" . $motocicleta2->calcularCostoEnvio() . "<br><br>";

$gestionLogistica->agregarVehiculo($camion1);
$gestionLogistica->agregarVehiculo($camion2);
$gestionLogistica->agregarVehiculo($motocicleta1);
$gestionLogistica->agregarVehiculo($motocicleta2);

$costoTotal = $gestionLogistica->obtenerCostoTotal();
echo "El costo total de envío es: $" . $costoTotal;

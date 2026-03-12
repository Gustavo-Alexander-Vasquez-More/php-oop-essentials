<?php

  require_once __DIR__ . '/../../vendor/autoload.php';

    use Ejercicio2\Socio;
    use Ejercicio2\Sede;

    $sede1 = new Sede("Sede Central", 40.7128, -74.0060);
    $sede2 = new Sede("Sede Norte", 34.0522, -118.2437);
    $sede3 = new Sede("Sede Sur", 51.5074, -0.1278);
    $socio1 = new Socio("Juan Perez", "12345678", 41.8781, -87.6298);

    $distanciaSede1 = $socio1->distanciaA($sede1->getLatitud(), $sede1->getLongitud());
    $distanciaSede2 = $socio1->distanciaA($sede2->getLatitud(), $sede2->getLongitud());
    $distanciaSede3 = $socio1->distanciaA($sede3->getLatitud(), $sede3->getLongitud());

    // Encontrar la sede más cercana
    $minDistancia = min($distanciaSede1, $distanciaSede2, $distanciaSede3);

    // Mostrar la sede más cercana
    if ($minDistancia == $distanciaSede1) {
        echo "La sede más cercana a " . $socio1->getNombre() . " es: " . $sede1->getNombreSede();
    } elseif ($minDistancia == $distanciaSede2) {
        echo "La sede más cercana a " . $socio1->getNombre() . " es: " . $sede2->getNombreSede();
    } else {
        echo "La sede más cercana a " . $socio1->getNombre() . " es: " . $sede3->getNombreSede();
    }

?>
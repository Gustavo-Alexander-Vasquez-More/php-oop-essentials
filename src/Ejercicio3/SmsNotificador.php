<?php

namespace Ejercicio3;

class SmsNotificador implements Notificador
{

    private $mensaje;

    // Constructor
    public function __construct(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }

    // Getter y Setter
    public function getMensaje(): string
    {
        return $this->mensaje;
    }
    public function setMensaje(string $mensaje): void
    {
        $this->mensaje = $mensaje;
    }

    public function enviar(string $mensaje): void
    {
        echo "Enviando SMS con el mensaje: $mensaje";
    }
}

<?php

namespace Ejercicio3;

interface Notificador
{

    public function enviar(string $mensaje): void;
}

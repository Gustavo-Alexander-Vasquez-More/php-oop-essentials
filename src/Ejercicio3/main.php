<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Ejercicio3\EmailNotificador;
use Ejercicio3\SmsNotificador;
use Ejercicio3\PushNotificador;
use Ejercicio3\Usuario;

$usuario = new Usuario("Juan", "juan@example.com", "123456789");
$emailNotificador = new EmailNotificador("Hola Juan, este es un mensaje de notificación por email.");
$smsNotificador = new SmsNotificador("Hola Juan, este es un mensaje de notificación por SMS.");
$pushNotificador = new PushNotificador("Hola Juan, este es un mensaje de notificación por Push.");

$usuario->agregarCanal($emailNotificador);
$usuario->agregarCanal($smsNotificador);
$usuario->agregarCanal($pushNotificador);

echo $usuario->notificarTodo("Este es un mensaje de notificación para todos los canales. <br>");

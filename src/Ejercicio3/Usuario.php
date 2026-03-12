<?php

namespace Ejercicio3;

class Usuario
{

    private string $nombre;
    private string $email;
    private string $telefono;
    private array $notificadores = [];

    // Constructor
    public function __construct(string $nombre, string $email, string $telefono)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    // Getters y Setters
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getTelefono(): string
    {
        return $this->telefono;
    }
    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function agregarCanal(Notificador $canal): void
    {
        $this->notificadores[] = $canal;
    }

    public function notificarTodo(String $mensaje): void
    {
        foreach ($this->notificadores as $notificador) {
            $notificador->enviar($mensaje);
        }
    }
}

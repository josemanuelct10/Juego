<?php

class Usuario {
    private string $nombre;
    private string $usuario;
    private string $password;
    private string $email;


    

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

    }

    /**
     * Get the value of usuario
     */
    public function getUsuario(): string
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     */
    public function setUsuario(string $usuario)
    {
        $this->usuario = $usuario;

    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

    }
}
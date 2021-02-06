<?php

class Usuarios {
    public $id;
    public $username;
    public $password;
    public $nombre;
    public $apellido;
    public $fecha_nacimiento;
    public $pais;
    public $telefono;
    
    
    function __construct($id="", $username="", $pass="", $nombre="", $apellido="", $fecha_nacimiento="", $pais="", $telefono="") { 
        $this->id = $id;
        $this->username = $username;
        $this->password = $pass;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->pais = $pais;
        $this->telefono = $telefono;
    }
    
       function nuevoUsuario($username, $pass, $nombre, $apellido, $fecha_nacimiento, $pais, $telefono) {
        $this->username = $username;
        $this->password = $pass;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->pais = $pais;
        $this->telefono = $telefono;
    }
}

    ?>
<?php

require_once 'conexion.php';
require_once 'model/Usuarios.php';

Class ControladorUsuarios {

    public static function insertUsuario(usuario $n){

        try{
            $conex = new Conexion();
           
            $conex->exec("INSERT INTO usuarios (username, password, nombre, apellido, fecha_nacimiento, pais, telefono) VALUES('$n->username', '$n->password', '$n->nombre', '$n->apellido', '$n->fecha_nacimiento', '$n->pais', '$n->telefono')");
            
        }catch(PDOException $ex){
            
            die('error con la base de datos');

        }
       
        unset($conex);
    }

 

}

?>
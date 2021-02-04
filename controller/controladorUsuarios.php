<?php

require_once 'conexion.php';
require_once 'model/Usuarios.php';

Class ControladorUsuarios {

    public static function insertUsuario(Usuarios $n){

        try{
            $conex = new Conexion();

            $pass = md5($n->password);
           
            $conex->exec("INSERT INTO usuarios (username, password, nombre, apellido, fecha_nacimiento, pais, telefono) VALUES('$n->username', '$pass', '$n->nombre', '$n->apellido', '$n->fecha_nacimiento', '$n->pais', '$n->telefono')");


        }catch(PDOException $ex){
            
            die('error con la base de datos');

        }
       
        unset($conex);
    }
    public static function buscarUsuario($email) {
        try {
            $conex = new Conexion();
            $result = $conex->prepare("SELECT * FROM usuarios WHERE username=?");
            $result->bindParam(1, $email);
            $result->execute();
            if ($result->rowCount()) {
                $registro = $result->fetchObject();
                $c = new Usuarios($registro->username, $registro->password, $registro->nombre, $registro->apellido, $registro->fecha_nacimiento, $registro->pais, $registro->telefono);

                return $c;
            }
            unset($result);
            unset($conex);
        } catch (PDOException $ex) {
            $errores[] = $exc->getMessage();
        }
        unset($conex);
    }

 

}

?>
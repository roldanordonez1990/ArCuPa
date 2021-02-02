<?php

require_once 'conexion.php';
require_once 'model/Noticias.php';

Class ControladorNoticias {

    public static function insertNoticia(Noticias $n){

        try{
            $conex = new Conexion();
           
            $conex->exec("INSERT INTO noticias (imagen, titulo, id_autor, fecha, contenido) VALUES('$n->imagen', '$n->titulo', '$n->id_autor', '$n->fecha', '$n->contenido')");
            
        }catch(PDOException $ex){
            
            die('error con la base de datos');

        }
       
        unset($conex);
    }

    public static function deleteNoticias($idNoticia){
        try{
            $conex = new Conexion();
            $conex->exec("DELETE from noticias WHERE id ='$idNoticia'");
        }catch(PDOException $ex){

            die('error con la base de datos');

        }
        
        unset($conex);
    }

}

?>